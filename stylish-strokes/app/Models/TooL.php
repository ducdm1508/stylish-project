<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TooL extends Model
{
    use HasFactory;
    public function getTools()
    {
        $sql = "SELECT tool_id, tool_name, description, url FROM tools_and_software where 1=1 ";
        $rs = DB::select($sql);
        return $rs;
    }
    public function insert($tool)
    {
        DB::table('tools_and_software')->insert($tool);
    }
    public function updateTool($id, $tool)
    {
        DB::table('tools_and_software')->where('tool_id', $id)->update($tool);
    }
    public function deleteTool($id)
    {
        DB::table('tools_and_software')->where('tool_id', $id)->delete();
    }
}
