<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Masterclass;
use App\Models\User;
use App\Notifications\MasterclassRegistationNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class MasterclassApi extends Controller
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
        $request->validate([
            'email' => ['required', 'email'],
        ]);

        $user = User::firstWhere(['email' => $request->email]);

        $checked = User::where('email', $request['email'])->first();

        try {
            if (!$checked) {
                $validator = Validator::make($request->all(), [
                    'email' => 'required|email|unique:users,email',
                ]);

                if ($validator->fails()) {
                    return response()->json($validator->errors(), 400);
                }

                $input = [
                    'email' => $request->email,
                    'name' => 'customer',
                    'password' => Hash::make('qwer1234'),
                    'roles' => 'customer',
                ];
                $user = User::create($input);
                $user->assignRole($request->input('roles'));
                // dd($user->id);
                // $user->notify(new MasterclassRegistationNotification($user));
                $input =[
                    'user_id'       => $user->id,
                    'name'          => $request->name,
                    'masterclass_1' => $request->masterclass_1 ?? false,
                    'masterclass_2' => $request->masterclass_2 ?? false,
                    'masterclass_3' => $request->masterclass_3 ?? false,
                    'masterclass_4' => $request->masterclass_4 ?? false,
                    'masterclass_5' => $request->masterclass_5 ?? false,
                    'masterclass_6' => $request->masterclass_6 ?? false,
                    'masterclass_7' => $request->masterclass_7 ?? false,
                    'masterclass_8' => $request->masterclass_8 ?? false,
                    'masterclass_9' => $request->masterclass_9 ?? false,
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ];

               $masterclass = DB::table('masterclass')->insert($input);


            }else{


                $masterclass = DB::table('masterclass')->where('user_id',  $checked->id)->first();

                if($masterclass){
                    // dd( $request->masterclass_5);
                    if($masterclass->masterclass_1 == false) DB::table('masterclass')->where('user_id',  $user->id)->update(['masterclass_1' =>  $request->masterclass_1]);
                    if($masterclass->masterclass_2 == false) DB::table('masterclass')->where('user_id',  $user->id)->update(['masterclass_2' =>  $request->masterclass_2]);
                    if($masterclass->masterclass_3 == false) DB::table('masterclass')->where('user_id',  $user->id)->update(['masterclass_3' =>  $request->masterclass_3]);
                    if($masterclass->masterclass_4 == false) DB::table('masterclass')->where('user_id',  $user->id)->update(['masterclass_4' =>  $request->masterclass_4]);
                    if($masterclass->masterclass_5 == false) DB::table('masterclass')->where('user_id',  $user->id)->update(['masterclass_5' =>  $request->masterclass_5]);
                    if($masterclass->masterclass_6 == false) DB::table('masterclass')->where('user_id',  $user->id)->update(['masterclass_6' =>  $request->masterclass_6]);
                    if($masterclass->masterclass_7 == false) DB::table('masterclass')->where('user_id',  $user->id)->update(['masterclass_7' =>  $request->masterclass_7]);
                    if($masterclass->masterclass_8 == false) DB::table('masterclass')->where('user_id',  $user->id)->update(['masterclass_8' =>  $request->masterclass_8]);
                    if($masterclass->masterclass_9 == false) DB::table('masterclass')->where('user_id',  $user->id)->update(['masterclass_9' =>  $request->masterclass_9]);
                    DB::table('masterclass')->where('user_id',  $checked->id)->update(['updated_at' =>  now()]);

                    $user = User::find($checked->id);
                    // $user->notify(new MasterclassRegistationNotification($user));
                }else{
                    $input =[
                        'user_id'       => $user->id,
                        'name'          => $request->name,
                        'masterclass_1' => $request->masterclass_1 ?? false,
                        'masterclass_2' => $request->masterclass_2 ?? false,
                        'masterclass_3' => $request->masterclass_3 ?? false,
                        'masterclass_4' => $request->masterclass_4 ?? false,
                        'masterclass_5' => $request->masterclass_5 ?? false,
                        'masterclass_6' => $request->masterclass_6 ?? false,
                        'masterclass_7' => $request->masterclass_7 ?? false,
                        'masterclass_8' => $request->masterclass_8 ?? false,
                        'masterclass_9' => $request->masterclass_9 ?? false,
                        'created_at'    => now(),
                        'updated_at'    => now(),
                    ];

                    DB::table('masterclass')->insert($input);
                    $user = User::find($checked->id);
                    // $user->notify(new MasterclassRegistationNotification($user));
                }

            }

        } catch (\Throwable $th) {
            dd($th);
            return response()->json(['Login Failed'], 429);
        }

        $tokenName = $user->email . '-' . $request->header('User-Agent');

        $tokenObject = $user->createToken($tokenName);

        return response()->json(['token' => $tokenObject->plainTextToken] + $user->toArray());
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
    public function update(Request $request, $id)
    {
        //
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
