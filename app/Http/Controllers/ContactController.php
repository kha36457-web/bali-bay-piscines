<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Contact::latest()->get();
        return view('admin.messages', compact('messages'));
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('admin.messages.index')->with('success', 'Message supprimé avec succès.');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => ['required', 'string', 'regex:/^(?:\+212|0)[5-7]\d{8}$/'],
            'message' => 'required|string|min:10',
            'produit' => 'nullable|string|max:255',
        ], [
            'telephone.regex' => 'Veuillez entrer un numéro de téléphone marocain valide (ex: 06... ou +212...).',
            'message.min' => 'Le message doit contenir au moins 10 caractères.'
        ]);

        $validated['statut'] = 'nouveau';

        $contact = Contact::create($validated);

        // Send notification email to site admin (uses MAIL_FROM_ADDRESS by default)
        try {
            Mail::to(config('mail.from.address'))->send(new ContactFormMail($contact));
        } catch (\Throwable $e) {
            // fail silently — mailer may be configured to log
        }

        return redirect('/#contact-form')->with('success', 'Votre message a bien été envoyé. Notre équipe vous contactera dans les plus brefs délais.');
    }

    public function update(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'statut' => 'required|in:nouveau,traité',
        ]);

        $contact->update($validated);

        return redirect()->route('admin.messages.index')->with('success', 'Statut du message mis à jour.');
    }
}
