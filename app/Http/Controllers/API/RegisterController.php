<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use App\Models\Register;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|email',
            'name' => 'required',
            'dob' => 'required',
            'phone_number' => 'required',
            'describe_yourself' => 'required',
            'gender' => 'nullable',
            'parent_guardian_contact' => 'required',
            'pastor_name_contact' => 'required',
            'residency' => 'required',
            'family_info' => 'required',
        ]);

         // some additional logic or checking
         $request->request->add(['user_id' => Auth::id()]);
         $register = Register::create($request->all());

        return response()->json([
            'data' => $register,
            'message' => 'Application sent successfully',
        ]);
    }

    public function getApplications()
    {
        if (Auth::check()) {
           $applications = Register::where('user_id', Auth::id())
            ->orderBy('id', 'desc')
            ->get();

            if (Auth::user()->role_id == User::ADMIN) {
                return response()->json([
                   'applications' =>   $applications
            ]);
            } else {
                return response()->json([
                    'applications' =>  array_filter($applications->toArray(), function ($var) {
                                   return $var['user_id'] == Auth::id();
                })
                ]);
            }
        }
    }
}
