<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Requests\CreateNewsletterRequest;
use App\Newsletter;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(CreateNewsletterRequest $request)
    {
        if(Newsletter::where('email', $request->email)->count()){
            return redirect()->to(app('url')
                             ->previous()."#newsletter")
                             ->with('flash', 'El correo electrónico ya esta registrado');
        }
        $newsletter = new Newsletter();
        $newsletter->email = $request->email;
        $newsletter->token = str_random(25);
        $newsletter->verified = false;
        $newsletter->save();
        Mail::send('emails.validate_email', ['newsletter' => $newsletter],function($m) use ($newsletter){
            $m->to($newsletter->email, "Internauta")->subject('Valida tu correo');
        });
        return redirect()->to(app('url')
                         ->previous()."#newsletter")
                         ->with('flash', 'Hemos enviado un correo de validación');
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
    public function update(Request $request, $newsletter)
    {
        $verificar=Newsletter::where('token', $newsletter)->first();
        if($verificar->count()){
            if(!$verificar->verified){
                $verificar->verified = true;
                $verificar->save();
                return redirect()->to(app('url')
                         ->previous()."#newsletter")
                         ->with('flash', 'El correo electrónico ha sido verificado satisfactoriamente');
            }
            return redirect()->to(app('url')
                             ->previous()."#newsletter")
                             ->with('flash', 'El correo electrónico ya estaba verificado');
        }
        return redirect()->to(app('url')
                             ->previous()."#newsletter")
                             ->with('flash', 'token no encontrado');
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
