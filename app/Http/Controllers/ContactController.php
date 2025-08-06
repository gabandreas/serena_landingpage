<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{

    public function index()
    {
        return view('contact_us');
    }
    public function sendEmail(Request $request)
    {
        // Validasi input form
        $request->validate([
            'nama'    => 'required|string|max:100',
            'email'   => 'required|email',
            'subject' => 'required|string|max:150',
            'question'=> 'required|string',
            'setuju'  => 'accepted', // Checkbox harus dicentang
        ]);
    
        try {
            // Kirim email dalam bentuk teks biasa
            Mail::raw(
                "Pesan dari: {$request->nama} ({$request->email})\n\n" .
                "Isi Pesan:\n{$request->question}",
                function ($message) use ($request) {
                    $message->to('boen981@yahoo.com')
                            ->subject($request->subject)
                            ->replyTo($request->email)
                            ->from('no-reply@yourdomain.com', 'Website Printer Kamu');
                }
            );
    
            return response()->json(['success' => true,'message' => 'Pesan Anda berhasil dikirim!']);
        } catch (\Exception $e) {return response()->json(['success' => false,'message' => 'Gagal mengirim pesan. Silakan coba lagi.'], 500);}
    }
}
