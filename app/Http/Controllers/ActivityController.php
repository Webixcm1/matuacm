<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function displayView(): View
    {
        $user_id = auth()->id();

        $activities = ActivityLog::where('user_id', $user_id)->paginate(6);

        return view('drive.setting', compact(['activities']));
    }


    public function store(Request $request)
    {
        // Enregistrement d'une nouvelle activité
        $activity = ActivityLog::create($request->all());
        return response()->json($activity, 201);
    }
}
