<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Login;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Show the form
    public function showForm() {

        return view('/rent4u/form/login-form'); // Blade view file for the form
    }

    // Insert the form data
    public function submitForm(Request $request) {
        $record = new Login();

        $record->name = $request->input('name');
        $record->email = $request->input('email');
        $record->password = Hash::make($request->input('password')); // hash password
        $record->save();

        return redirect('/index')->with('success', 'User registered!');
    }

    // Show all users
    public function listLogin() {
        $users = Login::all(); // cleaner than raw SQL
        return view('rent4u/form/login-list', ['logins' => $users]);
    }
}
