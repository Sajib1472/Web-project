<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function create_customer() {
        return view('users.register');
    }
    // Create New customer
    public function store_customer(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('customers', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);

        $customer = Customer::create($formFields);

        auth()->guard('customer')->login($customer);

        return redirect('/')->with('message', 'Customer created and logged in');
    }

    // Logout customer
    public function logout_customer(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'You have been logged out!');

    }

    // Show Login Form
    public function login_customer() {
        return view('users.login');
    }

    // Authenticate customer
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->guard('customer')->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function customer(){
        $customer = Customer::orderBy('created_at', 'DESC')->get();
        return view('customer', compact('customer'));
    }

}
