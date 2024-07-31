<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Styles extends Model
{
    use HasFactory;
    public function getStyles(){
        $sql = "SELECT style_id , name, description,img_url, origin FROM calligraphy_styles WHERE 1=1";
        $rs = DB::select($sql);
        return $rs;
    }
    public function insert($styles){
        DB::table("calligraphy_styles") -> insert($styles);
    }
    public function updateStyles($styles, $id)
    {
        DB::table("calligraphy_styles")
            ->where("style_id", $id)
            ->update($styles);
    }
    public function deleteStyle($id){
        DB::table("calligraphy_styles")->where("style_id", $id)->delete();
    }
}
