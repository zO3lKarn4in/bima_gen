<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use DB;

class M_bimagen extends Model
{
    // 
    protected $table = "kategori"; 
    protected $fillable = ['name', 'user_id', 'create_at']; 
 
    public static function insert($data){  
      
        // return $data;
        Mail::to($data['email'])->send(new SendMailable($data["email"]));
          $data = DB::table('tbl_register')->insert($data);
        // return array("ok"=>200);
        if ($data) {
            return json_encode(array("status"=>200, "data"=>true));
        }else {
            return json_encode(array("status"=>400, "data"=>false)); 
        }
    } 
}
