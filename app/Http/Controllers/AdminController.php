<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Show the admin login form.
     */
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login');
    }

    /**
     * Authenticate admin user.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'Les identifiants fournis sont incorrects.',
        ])->onlyInput('email');
    }

    /**
     * Show admin dashboard with statistics.
     */
    public function dashboard()
    {
        $totalMessages = Contact::count();
        $newMessages = Contact::where('statut', 'nouveau')->count();
        $treatedMessages = Contact::where('statut', 'traité')->count();
        $visitorCount = DB::table('site_counters')->where('key', 'visitors')->value('value') ?? 0;
        $recentMessages = Contact::latest()->take(5)->get();

        return view('admin.dashboard', compact(
            'totalMessages',
            'newMessages',
            'treatedMessages',
            'visitorCount',
            'recentMessages'
        ));
    }

    /**
     * Log out the admin.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
