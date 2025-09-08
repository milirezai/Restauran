<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\NewsLetter;
use App\Http\Controllers\Admin\AdminController;
class NewsLetterController extends Controller
{
    public function index()
    {
        $newsLetters = NewsLetter::all();
        return view('admin.newsLetter.index',compact('newsLetters'));
    }
    public function message($id)
    {
        $newsLetter = NewsLetter::find($id);
        return view('admin.newsLetter.show',compact('newsLetter'));
    }
    public function answer($id)
    {
        $answer = $_POST['answer'];
        if (empty($answer))
            return back();
        $newsLetter = NewsLetter::find($id);
        sendMail($newsLetter->email,"خبرنامه",messageNewsLetter($answer));
        with('swal-success','پیام خبر نامه با موفقیت ارسال شد');
        return redirect(route('admin.newsLetter.index'));
    }
}