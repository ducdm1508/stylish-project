<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\VisitorCount;

class VisitorCountController extends Controller
{
    public function getVisitors()
    {
        $visitorCount = new VisitorCount();
        $visitors = $visitorCount->getCount();
        return response()->json(['count'=>$visitors]);
    }
    public function recordVisitor(Request $request){
        $ipAddress = $request->ip();
        $visitorCount = new VisitorCount();
        $rs = $visitorCount->recordVisit($ipAddress);
        return response()->json($rs);
    }
}