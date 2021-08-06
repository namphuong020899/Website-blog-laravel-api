<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Mail;

class LienheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.contract');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //
        //send mail lien he
        $to_email =  "npn020899@gmail.com";

        $now = Carbon::now('Asia/Ho_Chi_Minh');
        $tile_mail = "Liên Hệ từ Blog Music".' '.$now;
        $data['email'] = $req->email;

        $name_mail = $req->name;
        $email_mail = $req->email;
        $content_mail = $req->content;


        Mail::send('pages.email_contact',
            [
                'name_mail' => $name_mail,
                'email_mail' => $email_mail,
                'content_mail' => $content_mail,
            ],
            function($message) use ($tile_mail, $name_mail, $data, $content_mail, $email_mail, $to_email){
                    $message->to($to_email)->subject($tile_mail);
                    $message->from($data['email'],$tile_mail);
                });
        return redirect()->back()->with('thongbao','Blog sẽ liên hệ sớm nhất có thể !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
