<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Learning extends Model
{
    use HasFactory;
    public function getList()
    {
        $sql = "SELECT lr.resource_id, lr.content, lr.title, lr.description, 
                       lr.style_id, lr.url, lr.difficulty_level, 
                       cs.name as style_name, cs.origin as style_origin
                FROM learning_resources lr
                LEFT JOIN calligraphy_styles cs ON lr.style_id = cs.style_id";
        
        return DB::select($sql);
    }
    public function insert($resource){
        DB::table('learning_resources')->insert($resource);
    }
    public function updateRes($id, $resource){
        DB::table('learning_resources')->where('resource_id', $id)->update($resource);
    }
    public function deleteRes($id){
        DB::table('learning_resources')->where('resource_id', $id)->delete();
    }
}
