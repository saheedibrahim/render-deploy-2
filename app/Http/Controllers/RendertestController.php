<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Rendertest;

class RendertestController extends Controller
{
    public function read(Request $request) {
        $getData = $request->fullUrlWithQuery(['slack_name' => $request->slack_name, 'track' => $request->track]);
        $setData = $request->fullUrlWithQuery(['slack_name' => 'saolabram', 'track' => 'backend']);
        if ($getData == $setData) {
            $data = Rendertest::all();
            return response()->json([$data], 200);
        } else {
            return response()->json(["message" => "data not found!"]);
        }
    }

    public function store(Request $request) {
        Rendertest::create([
            'slack_name' => $request->slack_name,
            'current_day' => date('l'),
            'utc_time' => date('Y-m-d\TH:i:sp'),
            'track' => $request->track,
            'github_file_url' => $request->github_file_url,
            'github_repo_url' => $request->github_repo_url,
            'status_code' => 200
        ]);

        return response()->json(["message" => "data stored successfully"], 200);
    }
    
}
