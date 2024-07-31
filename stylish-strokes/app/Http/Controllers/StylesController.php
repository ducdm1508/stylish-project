<?php

namespace App\Http\Controllers;

use App\Models\Styles;
use Illuminate\Http\Request;

class StylesController extends Controller
{
    //
    public function getList(){
        $listStyles = new Styles();
        $styles = $listStyles->getStyles();
        return response()->json(['styles' => $styles]);
    }
    public function insert(Request $res){
        $newStyles = $res -> all();
        $insertStyles = new Styles();
        $insertStyles->insert($newStyles);
        return response()->json($newStyles);
    }
    public function update(Request $request, $id)
    {
        $updateStyles = $request->all();
        $updateStylesModel = new Styles();
        $updateStylesModel->updateStyles($updateStyles, $id);
        return response()->json($updateStyles);
    }
    public function delete($id){
        $deleteStylesModel = new Styles();
        $deleteStylesModel->deleteStyle($id);
        return response()->json(['message' => 'Style deleted successfully']);
    }
}
