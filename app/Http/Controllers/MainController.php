<?php

namespace App\Http\Controllers;

use App\Mail\mailSend;
use Illuminate\Http\Request;
use Mail;

class MainController extends Controller
{
    public function create(){
        return view('zayavka');
    }
    public function sendEmail(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'name' => 'required',
            'companyName' => 'required',
            'businessSphere' => 'required',
            'text' => 'required',
        ]);

        $data = [
            'companyName' => $request->companyName,
            'name' => $request->name,
            'phone' => $request->phone,
            'businessSphere' => $request->businessSphere,
            'text' => $request->text,
            'benefit' => $request->benefit
        ];
        $files = $request->file;

        Mail::send('mailSend', $data, function($message) use ($data,$files) {
            $message->to('wotacc0809@gmail.com')
                ->subject($data['companyName']);
            if($files != null){
                $message->attach($files->getRealPath(), [
                    'as' => $files->getClientOriginalName(),
                    'mime' => $files->getMimeType(),
                ]);
            }
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
}
