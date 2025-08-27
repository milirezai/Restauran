<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\OurTeam;

class OurTeamController extends Controller
{
    public function index()
    {
        $users = OurTeam::all();
        return view('admin.team.index',compact('users'));
    }
    public function status($id)
    {
        $user = OurTeam::find($id);
        $status = $user->status == 0 ? 1 : 0 ;
        $user->status = $status;
        $user->save();
        return back();
    }
}