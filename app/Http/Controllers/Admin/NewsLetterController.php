<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\NewsLetter;

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
        return redirect(route('admin.newsLetter.index'));
    }
}