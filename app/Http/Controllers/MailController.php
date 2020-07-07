<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class MailController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $user=$request->input('Nombres');
        $emailFrom=$request->input('Correo');
        $subject="Project M Contacto";
        $content="Mensaje: " . $request->input('Mensaje') ."\r\n Nombre: " .$request->input('Nombres') ."\r\n Contacto: " .$request->input('Celular');
        $data = array('name'=>$user,
                       'emailFrom'=>$emailFrom,
                       'subject'=>$subject,
                       'content'=>$content
                     );
        //$data=array('content'=>$content);
        /**
         * 
         */
        Mail::send('email.email1', $data, function($message) use ($user,$emailFrom,$subject) {
            $message->to('cristian@projectm.pro', 'Projectm')
                    ->subject($subject);
            $message->from($emailFrom,$user);
        });
        return redirect("contacto")->with('success','Correo enviado con exito');
    }
}
