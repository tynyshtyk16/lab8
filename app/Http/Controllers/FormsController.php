<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Response;
use Mail;
 
use Image;

class FormsController extends Controller{

    public function createForm(){
        return view('form.create');
      }
    
    public function index(){
        $forms = Form::all();

        return view('form.index') -> with(['forms' => $forms]);
    }
    public function indexx(){
         
        return view('form.createtwo');
    }

    // public function store(Request $request){
    //     Form::create([
    //         'name'=>$request->name,
    //         'surname'=>$request->surname,
    //         'email'=>$request->email,
    //         'file'=>$request->file
    //     ]);
    //     return back();        
    // } 

    public function storee(Request $request){
        $fileModel = new Form;

        $fileModel->name = $request->input('name');
        $fileModel->surname = $request->input('surname');
        $fileModel->email = $request->input('email');
        // $fileModel->file = $request->image_path;
        if($request->has('file')){
            $file=$request->file('file');
            $extension = $file ->getClientOriginalExtension();
            $filename=time() . '.' . $extension;
            $file->move('uploads/forms/' ,$filename);
            $fileModel -> file =$filename;
        }
        else{
            return $request;
            $fileModel->file='';
        }
        $fileModel->save();
        return back();
      
        
    }
    public function formSubmit(Request $request){
        // $request->validate([
        //     'name' => 'required|name',
        //     'surname' => 'required',
        //     'email' => 'required',
        //     'file' => 'required',
        //   ]);
        //   $data = [
        //     'name' => $request->name,
        //     'surname' => $request -> surname,
        //     'email' => $request -> email,
        //     'file' => $request -> file
        //   ];

        //   Mail::send('email-template', $data, function($message) use ($data) {
        //     $message->to($data['email'])
        //     ->name($data['name']);
        //   });
  
        //   return back()->with(['message' => 'Email successfully sent!']);

        Mail::send('emails.contactemail', [
            'name' => $request -> name,
            'surname' => $request -> surname,
            'email' => $request -> email,
            'file' => $request -> file
        ],function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS',$request->name));
            $mail->to("suindikova.is06@gmail.com")->subject('Form message');
        });
        return "message has been sent successfully";
    }

    public function contactSubmit(Request $request){

        Mail::send('emails.contactemail', [
            'name' => $request -> name,
            'surname' => $request -> surname,
            'email' => $request -> email,
            'file' => $request -> file
        ],function($mail) use($request){
            $mail->from(env('MAIL_FROM_ADDRESS',$request->name));
            $mail->to('suindikova.is06@gmail.com')->subject('Form message');
        });
        return "message has been sent successfully";
    }
}
