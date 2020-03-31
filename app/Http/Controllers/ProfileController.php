<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the profile.
     *
     * @return \Illuminate\View\View
     */
    public function edit()
    {
        return view('profile.edit');
    }

    /**
     * Update the profile
     *
     * @param  \App\Http\Requests\ProfileRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        //auth()->user()->update($request->all());
        $data = [
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'phone_number_guardian' => $request->phone_number_guardian,
            'religion' => $request->religion,
            'address' => $request->address,
            'address_2' => $request->address_2,
            'tk' => $request->tk,
            'sd' => $request->sd,
            'smp' => $request->smp,
            'sma' => $request->sma,
            'organization' => $request->organization,
        ];
 
        // di bawah ini proses update tabel kendaraan, jika kolom id sama dengan $id yang dikirim dari form
 
        $user = User::where('id', auth()->user()->id) ->update(['email' => $request->get('email'),
        'phone_number' => $request->phone_number,
        'phone_number_guardians' => $request->phone_number_guardians,
        'religion' => $request->religion,
        'address' => $request->address,
        'address_2' => $request->address_2,
        'tk' => $request->get('tk'),
        'sd' => $request->sd,
        'smp' => $request->smp,
        'sma' => $request->sma,
        'organization' => $request->organization]);

        return back()->withStatus(__('Profile successfully updated.'));
    }

    /**
     * Change the password
     *
     * @param  \App\Http\Requests\PasswordRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function password(PasswordRequest $request)
    {
        auth()->user()->update(['password' => Hash::make($request->get('password'))]);

        return back()->withPasswordStatus(__('Password successfully updated.'));
    }

    public function hashpasswordallusers()
    {
        $users = User::all();
        foreach ($users as $s) {

            $s->update(['password' => bcrypt($s->password)]);
        }

        return view('adminhome');
    }
}
