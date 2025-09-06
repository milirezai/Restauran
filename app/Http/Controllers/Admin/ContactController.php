<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Model\Contact;
use App\Http\Controllers\Admin\AdminController;

class ContactController extends AdminController
{
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index',compact('contacts'));
    }
    public function message($id)
    {
        $contact = Contact::find($id);
        return view('admin.contact.show',compact('contact'));
    }
    public function answer($id)
    {
        $answer = $_POST['answer'];
        if (empty($answer))
            return back();
        $contact = Contact::find($id);
        sendMail($contact->email,"تماس با ما",answerForMessageContact($answer));
        return redirect(route('admin.contact.index'));
    }
    public function destroy($id)
    {
        Contact::delete($id);
        return back();
    }
}