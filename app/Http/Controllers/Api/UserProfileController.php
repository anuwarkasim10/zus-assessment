<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $user )
    {
        try {
            $profile = User::where('username', $user)->first();

            if($profile != null){
                $file = $request->file('profile_photo');
                $profile_file = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('storage/profile'), $profile_file);
                $profile->photo = $profile_file ? $profile_file : $profile->photo;

                $file = $request->file('identity_card');
                $identity_file = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('storage/identity-card'), $identity_file);
                $profile->identity_card = $identity_file ? $identity_file : $profile->identity_card;
            }
            return response()->json([$profile], 201);
        } catch (\Throwable $th) {
            throw $th;
            return response()->json('Failed to update user profile!', 401);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
