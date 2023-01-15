<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Message;
use PDF;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.adminHome');
    }
    public function profile()
    {
        return view('admin.profile');
    }
    public function users()
    {
        $users = User::latest()->paginate(5);
      
        return view('admin.users',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function messages()
    {
        $messages = Message::latest()->paginate(5);
      
        return view('admin.messages',compact('messages'))
            ->with('i', (request()->input('page', 1) - 1) * 5);  
    }
    public function createPDF() {
        // retreive all records from db
        $data = User::all();
        // share data to view
        view()->share('users',$data);
        $pdf = PDF::loadView('admin.pdf', compact('data'));
        // download PDF file with download method
        return $pdf->download('pdf_file.pdf');
      }
      public function userDelete(user $user)
      {
        $user->delete();
    
        return redirect()->back();
      }
      public function userEdit(user $user)
      {
        return view('admin.userEdit',compact('user'));
      }
      public function userUpdate(Request $request, user $user)
    {
        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'type' => ['required'],
        ]);
    
        $user->update($request->all());
    
        $users = User::latest()->paginate(5);
        return view('admin.users',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
