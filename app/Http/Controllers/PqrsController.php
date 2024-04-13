<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoSolicitud;
use App\Models\Pqrs;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class PqrsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Realizamos la consulta para obtener todos los tipos de solicitud
        $tiposSolicitud = TipoSolicitud::all();

        return view('solicitud', ['tiposSolicitud' => $tiposSolicitud]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valida y guarda los datos en la tabla 'solicitudes'
        $solicitud = new Pqrs();
        $solicitud->tipo_id = $request->input('tipo');
        $solicitud->descripcion = $request->input('descripcion');
        if ($request->hasFile('archivo')){
            // Obtiene el archivo cargado
            $archivo = $request->file('archivo');

            // Genera un nombre único para el archivo
            $nombreArchivo = uniqid() . '.' . $archivo->getClientOriginalExtension();
            // Guarda el archivo en la carpeta de almacenamiento 'public/storage'
            $archivo->storeAs('public/archivos', $nombreArchivo);
            // $ruta = $archivo->store('public/archivos');
            $solicitud->archivo = $nombreArchivo;
        }
        // Verifica si hay un usuario autenticado y lo asocia con la solicitud
        if (auth()->check()) {
            $solicitud->id_usuario = auth()->user()->id;
        }
        $solicitud->estado = 'P';
        $solicitud->radicado = 'RAD'.Str::random(3);          // Genera y guarda el radicado unico
        $solicitud->fecha_creacion = Carbon::now();
        $solicitud->save();
        return view('/dashboard', ['radicado' => $solicitud->radicado] ) ;
    }

    // Funcion para listar las solicitudes por cliente
    public function listadoSolicitudes (){

        
        $solicitudes = Pqrs::join('tipo_solicitud', 'solicitudes.tipo_id', '=', 'tipo_solicitud.id')
            ->select('solicitudes.*', 'tipo_solicitud.nombre as tipo')
            ->where('solicitudes.id_usuario', auth()->user()->id)
            ->get();
        // $solicitudes = Pqrs::find(auth()->user()->id)->get();


        
        return view('listar_solicitud', ['solicitudes' => $solicitudes]);
    }

    // Funcion para listar todas las solicitudes
    public function listadoAdmin (){

        $solicitudes = Pqrs::join('tipo_solicitud', 'solicitudes.tipo_id', '=', 'tipo_solicitud.id')
            ->select('solicitudes.*', 'tipo_solicitud.nombre as tipo_solicitud')
            ->get();
        // $solicitudes = Pqrs::all();

        return view('solicitudes_admin', ['solicitudes' => $solicitudes]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
