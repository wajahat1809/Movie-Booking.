<?php

namespace App\Http\Controllers;

use App\Models\register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Customlogin extends Controller
{
    //
    public function insert_register(Request $data){
        $reg = new register();
        $reg->Name = $data->name;
        $reg->Email = $data->email;
        $reg->Password = Hash::make($data->password);
        $reg->save();
        return redirect('/login');
        
    }

    public function loginmatch(Request $data){
        $user = DB::table('registers')->where('Email', $data->email)->first();
        if($user && Hash::check($data->password,$user->Password))
        {
            return redirect('/myaccount');
        }
        else
        {
            return redirect()->back();
        }
}

}
