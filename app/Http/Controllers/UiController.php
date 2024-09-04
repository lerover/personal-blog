<?php

namespace App\Http\Controllers;


//skill model
use App\Models\Skill;
use App\Models\Project;

use Illuminate\Http\Request;

class UiController extends Controller
{
    public function index(){
        return view("ui-panel.index");
    }
}
