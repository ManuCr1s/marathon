<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){return view('welcome');}
    public function form(){return view('pages.form');}
    public function login(){return view('pages.login');}
    public function dashboard(){return view('pages.dashboard');}
    public function register(){return view('pages.register');}
    public function inscription(){return view('pages.inscription');}
    public function download($nombreArchivo){
        $rutaArchivo = public_path('assets/documents/'.$nombreArchivo);
        if (file_exists($rutaArchivo)) {
            return response()->download($rutaArchivo, $nombreArchivo);
        } else {
            abort(404);
        }
    }
    private $rules = [
        'dni'=>'required',
        'password'=>'required'
    ];
    private $message = [
        'dni.required'=> ['message'=>'Ingrese usuario','status'=>false],
        'password.required'=> ['message'=>'Ingrese contraseña','status'=>false]
    ];
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
    public function store(Request $request)
    {    
        $credentials = $request->validate([
            'dni' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('tablero');
        }
        return back()->withErrors([
            'auth' => 'El usuario o la contraseña no son correctas',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
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
