<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ProductDetail;
use App\Models\UserDetail;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function adminDashboard()
    {
        return view('dashboard');
    }

    public function index()
    {
        $user = User::with('userDetail')->where('id', Auth::user()->id)->first();
        return view('frontend.my_account', compact('user'));
    }

    public function update(Request $request, int $id)
    {
        // return ($request);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric',
            'dob' => 'required|date',
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
            'address' => 'required'
        ]);
        
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        $userDetail = UserDetail::where('user_id', $id)->first();
        if ($request->hasFile('image')) {
            $directory = 'images\users';
            $file = $request->file('image');
            $userDetail->image = imageUpload($file, 800, 600, $directory);
        }
        $userDetail->dob = $request->dob;
        $userDetail->address = $request->address;
        $userDetail->save();
        return redirect()->route('home.index')->with('success', 'Details Updated successfully.');
    }
}
