<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Login;

class ApiLoginController extends Controller
{
    public function getlogin()
    {
        $user = DB::select('SELECT * FROM `rent4u` ORDER BY `id` ASC');
        return response()->json([
            'list_users' => $user
        ], 200);
    }

    public function recordlogin(Request $request)
    {
        $record = new Login();
        $record->name = $request->name;
        $record->email = $request->email;
        $record->password = Hash::make($request->password);
        $record->save();

        return response()->json([
            'msg' => 'User registered successfully.'
        ], 200);
    }
}
