<?php

namespace App\Http\Controllers\Groups;

use App\Group;
use App\Http\Controllers\Controller;

class MeetingsController extends Controller
{
    public function index(Group $group)
    {
        return view('groups.wip', compact('group'));
    }
}
