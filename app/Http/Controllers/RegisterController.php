<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\M_bimagen;

class RegisterController extends Controller
{
    // public function __construct(){}
    public function register(){ 
        return view('register');
    } 
    public function saveregister(Request $request){ 
        $mesin_dimiliki=$request->input("mesin_dimiliki");
        $t_mesin_dimiliki = "";
        foreach ($mesin_dimiliki as $key => $value) {
            $t_mesin_dimiliki.="".$value;
        }
        $data = [
            "nama_printing"=>$request->input("nama_printing"),
            "nama_kota"=>$request->input("nama_kota"),
            "no_hp"=>$request->input("no_hp"),
            "email"=>$request->input("email"),
            "mesin_dimiliki"=>$t_mesin_dimiliki,
            "jumlah_karyawan"=>$request->input("jumlah_karyawan"),  
        ];
        M_bimagen::insert($data);
        return redirect("/");
    } 
    public function verify($verify){ 
        return "test";
    }
}
