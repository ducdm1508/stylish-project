<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Gallery extends Model
{
    use HasFactory;

    public function getList()
    {
        $sql = "SELECT g.img_id, g.title, g.style_id, g.img_url, g.description,
                       cs.name as style_name, cs.origin as style_origin
                FROM gallery g
                LEFT JOIN calligraphy_styles cs ON g.style_id = cs.style_id";
        
        return DB::select($sql);
    }

    public function insert($gallery)
    {
        DB::table('gallery')->insert($gallery);
    }

    public function updateGallery($id, $gallery)
    {
        DB::table('gallery')->where('img_id', $id)->update($gallery);
    }

    public function deleteGallery($id)
    {
        DB::table('gallery')->where('img_id', $id)->delete();
    }
}
