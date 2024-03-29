<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => [ 'show']]);
    }
    
    public function show($username){
        $user=\App\Models\User::whereUsername($username)->first();

        if($user){
            return view('profile')->withUser($user);
        }else{
            return redirect()->back();
        }
    }

    public function edit(){
        if(Auth::user()){
            $user = User::find(Auth::user()->id);

            if($user){
                return view('editProfile')->withUser($user);
            }
            else{
                return redirect()->back();
            }
        }
    }

    public function update(Request $request){
        $user = User::find(Auth::user()->id);
        if($user){
            $validate = null;

            if(Auth::user()->email === $request['email']){ //

                $validate = $request->validate([
                    'username' => 'required|min:2',
                    'email' =>'required|email',
                    'avatar'=>'required',
                    'bio' => 'required|min:5',
                    'name'=> 'required|min:2'
                ]);
            }else {
                $validate = $request->validate([
                    'username' => 'required|min:2',
                    'email' =>'required|email|unique:users'
    
                ]);
            }
            if($validate){
                $user->name = $request['name'];
                $user->username = $request['username'];
                $user->email = $request['email'];
                $user->bio = $request['bio'];
                
                if(request()->hasFile('avatar')){
                    $avatar = request()->file('avatar')->getClientOriginalName();
                    request()->file('avatar')->storeAs('avatars',$user->id .'/' . $avatar,'');
                    $user->update(['avatar'=>$avatar]);
                }

                $user->save();
                $request->session()->flash('success', 'Your details have been updated !');
                return view('profile')->withUser($user);
        }else {
            return redirect()->back();
        }
        }
        
    }

    public function hasAvatar(){
        $user = User::find(Auth::user()->id);

        if($user->avatar !== null){
            return true;
        }else return false;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $username = User::find($username);
        return view('profile');
    }
}
