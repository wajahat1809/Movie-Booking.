<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactus extends Controller
{
    //
    public function insert_register(Request $data){
        $reg = new contact ();
        $reg->name = $data->name;
        $reg->last = $data->lastname ;
        $reg->number = $data->number;
        $reg->email = $data->email;
        $reg->message= $data->message;
        $reg->save();
        return redirect('/contact');
        
    }


}



