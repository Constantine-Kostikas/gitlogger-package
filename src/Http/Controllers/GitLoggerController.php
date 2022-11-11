<?php

namespace Kostikas\GitLogger\Http\Controllers;

use App\Http\Controllers\Controller;
use Symfony\Component\Process\Process;

class GitLoggerController extends Controller
{
    public function index()
    {

        return view('GitLogger::dashboard');
    }



    public function loadData(){
        $proccess = new Process(['git', 'log']);
        return response()->json(['Status' => 'Done' ,'Message' => 'Test']);
    }
}
