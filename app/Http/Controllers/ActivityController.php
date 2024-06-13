<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function store(Request $request)
    {
        // Enregistrement d'une nouvelle activité
        $activity = ActivityLog::create($request->all());
        return response()->json($activity, 201);
    }
}
