<?php

namespace Tests\Feature;

use App\Models\Contact;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactFormAndAdminTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test contact form submits successfully with correct data.
     */
    public function test_contact_form_submits_successfully_with_valid_data(): void
    {
        $contactData = [
            'nom' => 'John Doe',
            'email' => 'john.doe@example.com',
            'telephone' => '0612345678',
            'message' => 'Bonjour, je souhaite un devis pour ma piscine.',
            'produit' => 'Filtre à sable',
        ];

        $response = $this->post(route('contact.store'), $contactData);

        $response->assertRedirect('/#contact-form');
        $response->assertSessionHasNoErrors();
        $this->assertDatabaseHas('contacts', [
            'nom' => 'John Doe',
            'email' => 'john.doe@example.com',
            'telephone' => '0612345678',
            'statut' => 'nouveau',
        ]);
    }

    /**
     * Test contact form fails with invalid Moroccan phone number.
     */
    public function test_contact_form_validation_fails_with_invalid_phone(): void
    {
        $contactData = [
            'nom' => 'John Doe',
            'email' => 'john.doe@example.com',
            'telephone' => '12345678', // Invalid (should start with 0 or +212 and have 9 digits after 0[5-7])
            'message' => 'Bonjour, je souhaite un devis.',
        ];

        $response = $this->post(route('contact.store'), $contactData);

        $response->assertSessionHasErrors('telephone');
        $this->assertDatabaseCount('contacts', 0);
    }

    /**
     * Test admin dashboard is protected by authentication middleware.
     */
    public function test_admin_dashboard_is_protected(): void
    {
        $response = $this->get(route('admin.dashboard'));
        $response->assertRedirect(route('login'));
    }

    /**
     * Test admin can login with valid credentials.
     */
    public function test_admin_can_login_with_valid_credentials(): void
    {
        $admin = User::factory()->create([
            'email' => 'admin@balibaypiscines.com',
            'password' => bcrypt('admin123'),
        ]);

        $response = $this->post(route('admin.login.submit'), [
            'email' => 'admin@balibaypiscines.com',
            'password' => 'admin123',
        ]);

        $response->assertRedirect(route('admin.dashboard'));
        $this->assertAuthenticatedAs($admin);
    }

    /**
     * Test admin dashboard shows statistics.
     */
    public function test_admin_dashboard_shows_statistics_when_authenticated(): void
    {
        $admin = User::factory()->create();

        // Create some contact messages
        Contact::create([
            'nom' => 'A', 'email' => 'a@a.com', 'telephone' => '0612345678', 'message' => 'Message de test 1', 'statut' => 'nouveau'
        ]);
        Contact::create([
            'nom' => 'B', 'email' => 'b@b.com', 'telephone' => '0612345678', 'message' => 'Message de test 2', 'statut' => 'traité'
        ]);

        $response = $this->actingAs($admin)->get(route('admin.dashboard'));

        $response->assertStatus(200);
        $response->assertSee('Dashboard');
        // Let's assert we see the message counts in the statistics
        $response->assertSee('2'); // Total messages
        $response->assertSee('1'); // New and Treated counts
    }

    /**
     * Test admin can update contact message status.
     */
    public function test_admin_can_update_message_status(): void
    {
        $admin = User::factory()->create();
        $contact = Contact::create([
            'nom' => 'A', 'email' => 'a@a.com', 'telephone' => '0612345678', 'message' => 'Message de test 1', 'statut' => 'nouveau'
        ]);

        $response = $this->actingAs($admin)->patch(route('admin.messages.update', $contact), [
            'statut' => 'traité'
        ]);

        $response->assertRedirect(route('admin.messages.index'));
        $this->assertEquals('traité', $contact->fresh()->statut);
    }

    /**
     * Test admin can delete contact message.
     */
    public function test_admin_can_delete_message(): void
    {
        $admin = User::factory()->create();
        $contact = Contact::create([
            'nom' => 'A', 'email' => 'a@a.com', 'telephone' => '0612345678', 'message' => 'Message de test 1', 'statut' => 'nouveau'
        ]);

        $response = $this->actingAs($admin)->delete(route('admin.messages.destroy', $contact));

        $response->assertRedirect(route('admin.messages.index'));
        $this->assertDatabaseMissing('contacts', ['id' => $contact->id]);
    }
}
