<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use Illuminate\Support\Facades\DB;


class ContactController extends OsnovniController
{
    public function index(){
        return view('pages.main.contact',$this->data);

    }
    public function contact(MessageRequest $request){

        DB::beginTransaction();
        try {
            DB::table('contacts')->insert([
                'email'=>$request->email,
                'subject'=>$request->subject,
                'message'=>$request->message
            ]);
            DB::commit();
            return redirect()->route("contacthome")->with('message','Your message has been sent.');


        } catch (\Throwable $th) {

            DB::rollBack();
            dd($th->getMessage());
            return redirect()->route('error')->with('errorMessage', 'An error occurred!');
        }
        return view('pages.main.contact',$this->data);


    }

}
