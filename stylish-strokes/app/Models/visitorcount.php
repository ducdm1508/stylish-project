<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class visitorcount extends Model
{
    use HasFactory;
    public function getCount()
    {
        $sql = "SELECT COUNT(*) as count FROM visitor_count";
        $rs = DB::select($sql);
        return $rs[0]->count;
    }
    public function recordVisit($ipAddress){
        $today = now()->toDateString();

        $existingRecord = DB::select('SELECT visit_id, visit_date, count, ip_address FROM visitor_count where visit_date = ? AND ip_address = ?', [$today, $ipAddress]);
        if(empty($existingRecord)){
            DB::insert('INSERT INTO visitor_count (visit_date, ip_address) VALUES (?, ?)', [$today, $ipAddress]);
            return ['message' => 'New visit recorded'];
        }else{
            
            return ['message' => 'Incremented visit count'];
        }

    }
}
