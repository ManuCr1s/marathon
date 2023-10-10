<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Person;
use App\Models\Level;
use Illuminate\Support\Facades\Storage;
use PDF;
class PersonController extends Controller
{
    public $token = 'apis-token-5761.59ZzjNAOFWADmBfvLbj8DvX98Yv1FDPH';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    public function file(Request $request)
    {
        $validator = Validator::make($request->all(),$this->rules,$this->message);
        if($validator->fails())return json_encode($validator->errors());
        $person = self::create(
            $request->input('numero'),
            $request->input('nombres'),
            $request->input('apellidos'),
            $request->input('genrs'),
            $request->input('tipo'),
            $request->input('fecha'),
            $request->input('pais'),
            $request->input('region'),
            $request->input('provincia'),
            $request->input('distrito'),
            $request->input('level')
        );
        $extension = $request->file('format01')->getClientOriginalExtension();
        $nombrePersonalizado = $person['codigo'].'_'.'formato01'.'-'.$request->input('numero').'.'.$extension;
        $request->file('format01')->storeAs('public', $nombrePersonalizado);
        $nombrePersonalizado2 = $person['codigo'].'_'.'formato02'.'-'.$request->input('numero').'.'.$extension;
        $request->file('format02')->storeAs('public', $nombrePersonalizado2);
        $nombrePersonalizado3 = $person['codigo'].'_'.'formato03'.'-'.$request->input('numero').'.'.$extension;
        $request->file('format03')->storeAs('public', $nombrePersonalizado3);
        $nombrePersonalizado4 = $person['codigo'].'_'.'formato04'.'-'.$request->input('numero').'.'.$extension;
        $request->file('format04')->storeAs('public', $nombrePersonalizado4);
        $pdf = self::generarPdf($person['codigo']);
        $pdf['status']=true;
        $pdf['message'] = 'Ud. se ha registrado Satifactoriamente, por favor haga click en el boton para desgar su codigo';
        return json_encode($pdf);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($numero,$name,$lastanme,$genders,$type,$fecha,$pais,$region,$provincia,$distrito,$level)
    {
        try {
            $codigo = self::show_number($level);
            $user = new Person;
            $user->number_doc  = $numero;
            $user->name  = $name;
            $user->lastname  = $lastanme;
            $user->genders  = ($genders == 2);
            $user->number_ins = $codigo;
            $user->type_doc = $type;
            $user->born = $fecha;
            $user->id_country  = $pais;
            $user->id_region  = $region;
            $user->id_province = $provincia;
            $user->id_district = $distrito;
            $user->id_level = $level;
            $user->save();
            return array("success" => true ,"codigo" => $codigo);
        } catch (\Throwable $th) {
            echo $th->getMessage();
            return array("success" => false ,"message" => "No se puede ingresar al usuario en la tabla");
        }
    }
    private $rules = [
        'pais'=>'not_in:0',
        'tipo'=>'not_in:0',
        'numero' => 'required|min:8|max:20',
        'format01' => 'file|max:5000|mimes:pdf',
        'format02' => 'file|max:5000|mimes:pdf',
        'format03' => 'required|file|max:5000|mimes:pdf',        
        'format04' => 'required|file|max:5000|mimes:pdf',
    ];
    private $message =[
        'pais.not_in' =>'Por favor seleccione Pais de Procedencia',
        'tipo.not_in' =>'Por favor seleccione Tipo de documento',
        'numero.required' => 'Por favor ingrese numero de documento',
        'numero.min' => 'Por favor ingrese numero de documento valido',
        'numero.max' => 'Por favor ingrese numero de documento valido',
        'format01.file' => 'El archivo debe ser un archivo válido.',
        'format01.max' => 'El archivo debe ser un archivo válido.',
        'format01.mimes' => 'El archivo debe ser un archivo válido.',
        'format02.file' => 'El archivo debe ser un archivo válido.',
        'format02.max' => 'El archivo no debe superar los 5 MB.',
        'format02.mimes' => 'El archivo debe ser de tipo PDF',
        'format03.required' => 'El documento del FORMATO 03 es obligatorio',
        'format03.file' => 'El archivo debe ser un archivo válido.',
        'format03.max' => 'El archivo no debe superar los 5 MB.',
        'format03.mimes' => 'El archivo debe ser de tipo PDF',
        'format04.required' => 'El documento del FORMATO 04 es obligatorio',
        'format04.file' => 'El archivo debe ser un archivo válido.',
        'format04.max' => 'El archivo no debe superar los 5 MB.',
        'format04.mimes' => 'El archivo debe ser de tipo PDF',
    ];
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

/*        $validator = Validator::make($request->all(),$this->rules,$this->message);
        if($validator->fails())return json_encode($validator->errors());*/
        $old = self::show($request->input('number_doc'));
        if($old){
            return json_encode(array('status'=>false,'message' =>'El usuario ya se encuentra registrado'));
        }else{
            if($request->input('tipo') == 1){
                $response = self::store_dni($request->input('numero'),$this->token);
                return  json_encode($response);
            }
        }
    }
    public function store_dni($id,$tok)
    {
        $curl = curl_init();
        // Buscar dni
        curl_setopt_array($curl, array(
        // para user api versión 2
        CURLOPT_URL => 'https://api.apis.net.pe/v2/reniec/dni?numero=' . $id,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 2,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Referer: https://apis.net.pe/consulta-dni-api',
            'Authorization: Bearer ' . $tok
        ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        // Datos listos para usar
        $persona = json_decode($response);
        if (property_exists($persona,'nombres')) {
            $persona->status = true;
        } else {
            $persona->message = 'Por favor ingrese un DNI valido';
            $persona->status = false;
        }
        return $persona;
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $persona = new Person;
        $persona =Person::where('number_doc', $id)->exists(); 
        return $persona;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_number($level){
        $persona = new Person;
        $persona = Person::where('id_level', $level)->count(); 
        return self::show_level($level).'-'.$persona;
    }
    public function show_level($level){
        $cat = new Level;
        $cat = Level::select('cod')->where('id_level', $level)->first(); 
        return $cat->cod;
    }
    public function generarPdf($id)
    {
        $data = $id; // Puedes pasar datos a tu vista si es necesari
        $pdf = PDF::loadView('pdf.numero', compact('data')); // Nombre de la vista y datos
        $nombre = $data.'.pdf';
        $pdf->save(public_path('pdfs/' . $nombre));
        return ['url' => asset('pdfs/' . $nombre)];
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
