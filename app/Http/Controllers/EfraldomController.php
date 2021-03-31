<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class EfraldomController extends Controller
{
    
    public function login(){
        return view('login');
    }

    public function logout(){
        \Auth::logout();

        return redirect()->route('login');
    }

    public function postLogin(Request $request){
        $this->validate($request, [
            'email' => 'email|exists:users,email',
            'password' => 'required',
        ]);

        $attemps = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(\Auth::attempt($attemps, (bool) $request->remember)){
            return redirect()->route('home');
        }

        return redirect()->back();
    }

    public function home(){
        return view('index');
    }

    public function profile(){

        $email = \Auth::User()->email;

        $profile = DB::table('profile')->where('email',$email)->get();
 
    	return view('profile',['profile' => $profile]);
    }

    public function update_data(Request $request){
		DB::table('profile')->where('email',$request->email)->update([
			'nama' => $request->nama,
			'jenis_kelamin' => $request->jenis_kelamin,
			'umur' => $request->umur,
			'deskripsi' => $request->deskripsi
        ]);
        
        DB::table('users')->where('email',$request->email)->update([
			'name' => $request->nama
		]);

		return redirect('/profile');
    }
    
    public function hapus($email){
        \Auth::logout();

        DB::table('profile')->where('email',$email)->delete();
        
        DB::table('users')->where('email',$email)->delete();
			
		return redirect('/');
	}

    public function register(){
        return view('register');
    }

    public function goToPHS(){
        return view('phs');
    }

    public function makeregister(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        DB::table('profile')->insert([
			'nama' => $request->name,
			'email' => $request->email
		]);

        return redirect('/');

    }

    public function reset(){
        return view('resetpw');
    }

    public function resetPassword(Request $request){
        $this->validate($request, [
            'email' => 'email|exists:users,email',
        ]);

        $users = DB::table('users')->where('email',$request->email)->get();

        return view('verifypw',['users' => $users]);
    }

    public function updatePassword(Request $request){

        $this->validate($request, [
            'password' => 'required|min:6|confirmed'
        ]);

        DB::table('users')->where('email',$request->email)->update([
			'password' => bcrypt($request->password)
        ]);
        
		return redirect('/');
    }

    public function edit($email){
		$profile = DB::table('profile')->where('email',$email)->get();

		return view('edit',['profile' => $profile]);
	}

    public function goToGreen(){

        $greenzone = DB::table('greenzone')->paginate(10);
        return view('greenzone',['greenzone' => $greenzone]);
    }

    public function goToYellow(){

        $yellowzone = DB::table('yellowzone')->paginate(10);
        return view('yellowzone',['yellowzone' => $yellowzone]);
    }

    public function goToOrange(){

        $orangezone = DB::table('orangezone')->paginate(10);
        return view('orangezone',['orangezone' => $orangezone]);
    }

    public function goToRed(){

        $redzone = DB::table('redzone')->paginate(10);
        return view('redzone',['redzone' => $redzone]);
    }

    public function searchGreen(Request $request){

        $search = $request->search;

        $greenzone = DB::table('greenzone')
		->where('kabupaten','like',"%".$search."%")
		->paginate();

        return view('greenzone',['greenzone' => $greenzone]);
    }

    public function searchYellow(Request $request){

        $search = $request->search;

        $yellowzone = DB::table('yellowzone')
		->where('kabupaten','like',"%".$search."%")
		->paginate();

        return view('yellowzone',['yellowzone' => $yellowzone]);
    }

    public function searchOrange(Request $request){

        $search = $request->search;

        $orangezone = DB::table('orangezone')
		->where('kabupaten','like',"%".$search."%")
		->paginate();

        return view('orangezone',['orangezone' => $orangezone]);
    }

    public function searchRed(Request $request){

        $search = $request->search;

        $redzone = DB::table('redzone')
		->where('kabupaten','like',"%".$search."%")
		->paginate();

        return view('redzone',['redzone' => $redzone]);
    }
    
}
