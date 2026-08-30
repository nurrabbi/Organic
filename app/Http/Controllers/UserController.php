<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('userDetail')->get();
        // return ($users);
        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'dob' => 'required',
            'image' => 'required',
        ]);

        $user = UserDetail::create($request->all());
        $user->user_details()->create($request->all());
        return redirect()->route('user.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
        $user = User::with('userDetail')->findOrFail($user->id);
        return view('backend.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $user = User::with('userDetail')->findOrFail($id);
        return view('backend.users.edit', compact('user'));
        // return ($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {

        $request->validate([
            'role' => 'required|string|max:255' . $id,
            // 'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = User::findOrFail($id);
        if ($user->role != $request->role) {
            $user->role = $request->role;
            $user->updated_at = now();
            $user->save();
            return redirect()->route('admin.blog.index')->with('success', 'User role is updated successfully.');
        }
        return redirect()->route('admin.blog.index')->with('success', 'No update atempts.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User deleted successfully');
    }

    public function getImage(int $id)
    {
        $user = UserDetail::get()->where('user_id', $id)->first();

        // Extract the image path from the database
        $imagePath = public_path(parse_url($user->image, PHP_URL_PATH));

        if (!file_exists($imagePath)) {
            abort(404, 'Image not found');
        }

        // Return the image as a response
        return response()->file($imagePath);
    }
}
