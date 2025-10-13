<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

        // Tâches réçemment ajoutées
        $recentAddedTasks = Task::orderBy("created_at","desc")
            -> limit(4)
            ->get();

        // Tâches en attentes desc
        $waitingTask = Task::where('status', '=', 'not_started')
            ->orderBy('created_at','asc')
            ->limit(3)
            ->get();

        // Tâches en cours
        $ongoingTasks = Task::where('status', '=','started')
            ->orderBy('created_at','asc')
            ->limit(3)
            ->get();

        return view('auth.dashboard', [
            'recentAddedTasks' => $recentAddedTasks,
            'waitingTask' => $waitingTask,
            'ongoingTask' => $ongoingTasks
        ]);
    }
}
