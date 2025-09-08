<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Request\OurTeamRequest;
use App\Model\OurTeam;

class OurTeamController extends AdminController
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
        with('swal-success','تغییر وضعیت انجام شد!');
        return back();
    }
    public function create()
    {
        return view('admin.team.create');
    }
    public function store()
    {
        $request = new OurTeamRequest();
        $inputs = $request->all();
        $file = $request->file('avatar');
        $path = 'image/our-team/avatar/'.date('Y/M/d/');
        $image=date('Y_m_d_H_i_s_').rand(10,99);
        $inputs['avatar']= move($file, $path, $image, 800 , 532);
        $inputs['status'] = 0;
        $inputs['is_active'] = 0;
        OurTeam::create($inputs);
        with('swal-success','عضو جدید با موفقیت به تیم اضافه شد');
        return redirect(route('admin.ourTeam.index'));
    }

    public function edit($id)
    {
        $user = OurTeam::find($id);
        return view('admin.team.edit',compact('user'));
    }
    public function update($id)
    {
        $request = new OurTeamRequest();
        $inputs = $request->all();
        $file = $request->file('avatar');
        if (!empty($file['name']))
        {
            $path = 'image/our-team/avatar/'.date('Y/M/d/');
            $image=date('Y_m_d_H_i_s_').rand(10,99);
            $inputs['avatar']= move($file, $path, $image, 800 , 532);
        }
        $inputs['id'] = $id;
        OurTeam::update($inputs);
        with('swal-success','عضو با موفقیت ویرایش شد');
        return redirect(route('admin.ourTeam.index'));
    }
    public function destroy($id)
    {
        OurTeam::delete($id);
        with('swal-error','عضو تیم  با حذف شد! ');
        return back();
    }
}