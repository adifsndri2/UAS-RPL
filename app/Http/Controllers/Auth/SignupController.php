<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\Auth\SignupRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Auth;

class SignupController extends Controller
{
    public function show()
    {
        return view('pages.auth.sign-up');
    }

    public function signup(SignUpRequest $request)
    {
        //dapatkan dulu request dari form request
        //tambahkan pass dengan methode bcryp / has pass
        //tambahkan picture dummy sesuai dengan usernamenya
        //create user berdasarkan request yang sudah tervalidasi dan yg sudah kita proses
        //jika create berhasil maka loginkan user dan redirect ke list discussion
        //jika tidak berhasil maka return 500

        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);
        $validated['picture'] = config('app.avatar_generator_url').$validated['username'];

        $create = User::create($validated);

        if ($create) {
            Auth::login($create);
            return redirect()->route('discussions.index');
        }

        return abort(500);
    }
}
