<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use Symfony\Component\HttpFoundation\response;

use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    public function getList(){
        $listFeedBack = new FeedBack();
        $data = $listFeedBack -> getFeedBack();
        return response()->json(['feedback' => $data]);
    }
    public function insert(Request $res){
        $newFb = $res -> all();
        $feedBack = new FeedBack();
        $feedBack -> insert($newFb);
        return response()->json($newFb);
    }
    public function delete($id){
        $deleteFB = new FeedBack();
        $deleteFB -> deleteFb($id);
        return response()->json($deleteFB);
    }
}
