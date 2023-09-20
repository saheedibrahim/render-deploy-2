<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rendertest;

class RendertestController extends Controller
{
    public function read(Request $request) {
        $getData = $request->fullUrlWithQuery(['slack_name' => $request->slack_name, 'track' => $request->track]);
        $setData = $request->fullUrlWithQuery(['slack_name' => 'saolabram', 'track' => 'frontend']);
        if ($getData == $setData) {
            $data = Rendertest::all();
            return response()->json([$data], 200);
        } else {
            return response()->json(["message" => "data not found!"]);
        }
    }

    public function store(Request $request) {
        $rendert = Rendertest::create([
            'slack_name' => $request->slack_name,
            'current_day' => date('l'),
            'utc_time' => date('Y-m-d\TH:i:sp'),
            'track' => $request->track,
            'github_file_url' => $request->github_file_url,
            'github_repo_url' => $request->github_repo_url,
            'status_code' => 200
        ]);
        if ($rendert) {
            return response()->json(["message" => "data stored successfully"], 200);
        } else {
            return response()->json(["message" => "data not stored successfilly"], 200);
        }
    }
}
