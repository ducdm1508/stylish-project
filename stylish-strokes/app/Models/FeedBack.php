<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class FeedBack extends Model
{
    use HasFactory;
    public function getFeedBack(){
        $sql = "SELECT feedback_id, name, email, content, created_at  FROM feedback WHERE 1=1 ";
        $rs = DB::select($sql);
        return $rs;
    }
    public function insert($arrFb){
        DB::table("feedback") -> insert($arrFb);
    }
    public function deleteFb($id){
        DB::table("feedback") -> where("feedback_id", $id) -> delete();
    }
}
