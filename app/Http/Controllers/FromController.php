<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserInputRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class FromController extends OsnovniController
{

    public function loginhome(){
         return view('pages.main.login', $this->data);
    }
    public function registerhome(){
        return view('pages.main.register', $this->data);

    }
    public function logout(Request $request) {
        $request->session()->remove("user");
        $request->session()->remove("cart");
        return redirect()->route("home");
    }

    public function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        $pass = md5($password);

        try {
            $user = DB::table("users")
                ->join('user_role','users.id','=','user_role.id_user')
                ->join('roles','user_role.id_role','=','roles.id')
                ->where("email", "=", $email)
                ->where("password", "=", $pass)
                ->first();

                if($user){

                    if($user->role_name =='admin'){
                        $user->adminrole = true;
                    }else{
                        $user->adminrole = false;
                    }
                     $request->session()->put("user", $user);
                    return redirect()->route("store");

                }if($user = "null"){
                            return redirect()->route("loginhome")
                            ->with('errorMessage', 'User information are not alright!');
                }
            } catch (\Exception $e) {
                    dd($e->getMessage());
                    return redirect()->route("error")->with('errorMessage', 'An error occurred!');
                }
    }

    public function register(UserInputRequest $request){

        $pass = md5($request->password);
        DB::beginTransaction();
        try{
            $userid = DB::table('users')->insertGetId([
                "firstname" => $request->fname,
                "lastname" => $request->lname,
                "email" => $request->email,
                "address" => $request->address,
                "password" => $pass
            ]);
            DB::table('user_role')->insert([
                "id_user"=> $userid,
                "id_role"=> 1,
            ]);
            DB::commit();
                //login_after_register
               $logedin_user = DB::table("users")
                ->join('user_role','users.id','=','user_role.id_user')
                ->join('roles','user_role.id_role','=','roles.id')
                ->where("users.id", "=", $userid)
                ->first();
                if($logedin_user->role_name =='admin'){
                    $logedin_user->adminrole = true;
                }else{
                    $logedin_user->adminrole = false;
                }

               if($logedin_user){
                $request->session()->put("user", $logedin_user);
                return redirect()->route("store");
            }if($logedin_user ="null"){
                return redirect()->route("loginhome")
                ->with('errorMessage', 'User information are not alright!');
             }

        } catch (Exception $th) {
            DB::rollBack();
            dd($th->getMessage());
            return redirect()->route('error')->with('errorMessage', 'An error occurred!');
        }

    }

    public function error(){
        return view('deoproduct.error',$this->data);
    }
}
