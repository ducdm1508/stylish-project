<?php

namespace App\Http\Controllers;

use App\Models\Learning;
use Illuminate\Http\Request;

class LearningController extends Controller
{
    //
    public function getResourse(){
        $resourese = new Learning();
        $listRes = $resourese->getList();
        return response()->json(['resourese' => $listRes]);
    }
    public function insert(Request $res){
        $newRes = $res -> all();
        $insertRes = new Learning();
        $insertRes->insert($newRes);
        return response()->json($newRes);
    }
    public function update($id, Request $res){
        $update = $res -> all();
        $updateRes = new Learning();
        $updateRes->updateRes($id, $update);
        return response()->json($update);
    }
    public function delete($id){
        $deleteRes = new Learning();
        $deleteRes->deleteRes($id);
        return response()->json(['message' => 'Deleted Successfully']);
    }
}
