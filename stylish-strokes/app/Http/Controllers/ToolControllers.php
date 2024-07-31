<?php

namespace App\Http\Controllers;

use App\Models\TooL;
use Illuminate\Http\Request;

class ToolControllers extends Controller
{
    public function tool(){
        $listtools = new TooL();
        $tools = $listtools->getTools();
        return response() -> json(['tool'=> $tools]);
    }
    public function insert(Request $res){
        $newTool = $res -> all();
        $insertTools = new TooL();
        $insertTools -> insert($newTool);
        return response() -> json($newTool);
    }
    public function delete($id){
        $deleteTool = new TooL();
        $deleteTool -> deleteTool($id);
        return response() -> json($deleteTool);
    }
    public function update(Request $res, $id){
        $updateTool = $res -> all();
        $updateTools = new TooL();
        $updateTools -> updateTool($id, $updateTool);
        return response() -> json($updateTool);
    }
}
