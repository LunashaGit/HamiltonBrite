<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show(Request $request)
    {
        $attributes = $request->session()->get('username');
        return view('profile', [
            'profile' => $attributes
        ]);
    }

    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();

        auth()->logout();

        return redirect('/')->with('success', 'Account deleted...');
    }

    public function redirect()
    {
        return redirect('/');
    }

    public function change(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $user->username = $request->username;
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->bio = $request->bio;
        $user->email = $request->email;

        if($request->password != $request->passwordconfirm){
            return "No";
        }

        $file = $request->file('image');
        $imageName = time().'.'.$request->image->extension();
        $user->profile_picture = $imageName;
        $file->storeAs('public/images', $imageName);

        $user->password = $request->password;

        bcrypt($user->password);
        $user->save();

        return $this->redirect('/')->with('Success', 'Profile has been changed !');
    }
}
