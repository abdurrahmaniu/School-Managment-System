<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\password_hash;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\session;
use App\Models\Teacher;

class accountController extends Controller
{
    // START ADMIN Account
    public function signUpFunction (Request $request) {

        $request->validate([
            'fullName'=>'required',
            'username'=>'required|unique:accounts',
            'email'=>'required|email|unique:accounts',
            'password'=>'required|min:8'
        ]);
        $account = new Account();
        $account->fullName = $request->fullName;
        $account->username = $request->username;
        $account->email = $request->email;
        $account->password = Hash::make($request->password);
        $account->save();
        return redirect('/');
    }

    public function loginFunction (Request $request) {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8'
        ]);
        $account = Account::where('email','=',$request->email)->first();
        if($account) {
            if(Hash::check($request->password,$account->password)) {
                $role = Account::where('role','=','ADMIN');
                if($role) {
                    $request->session()->put('loginName', $account->fullName);
                    return redirect('MainDashboard');
                }else{
                    return back()->with('fail','Your Account Only Have Access To VIEW !');
                } 
            }else {
                return back()->with('fail','Wrong Password Entered, Please Try Again!');
            }
        }else {
            return back()->with('fail','This Email Address Is NOT Registered!');
        }
    }
    public function logOutUser() {
        if(session()->has('loginName')) {
            session()->pull('loginName');
            return redirect('/');
        }
    }
    
    public function editSettings(Account $account) {
        return view('updateSettings',['account'=>$account]);
    }
    public function updateSettings(Request $request, Account $account) {
        $account->update($request->all());
        return redirect('MainDashboard');
    }
    public function deleteAccount(Account $account) {
        $account->delete();
        return redirect('MainDashboard');
    }
    // END ADMIN Account
}
