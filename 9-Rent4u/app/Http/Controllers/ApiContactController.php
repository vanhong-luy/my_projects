<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ApiContactController extends Controller {
    public function getcontact() {
        return response()->json([
            'contacts' => Contact::all()
        ], 200);
    }

    public function recordcontact(Request $request) {
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        return response()->json([
            'msg' => 'Contact data recorded successfully.'
        ], 200);
    }
}
