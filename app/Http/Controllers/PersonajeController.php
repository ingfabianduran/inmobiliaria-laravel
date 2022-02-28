<?php

namespace App\Http\Controllers;

use App\Models\Frase;
use App\Models\Personaje;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class PersonajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personajes = Personaje::paginate(10);
        return $personajes;
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
    public function store(Request $request)
    {
        $request->merge([
            'frases' => json_decode($request->all()['frases'])
        ]);
        $request->validate([
            'nombreCompleto' => 'required|max:60|min:6',
            'foto' => 'image',
            'frases' => 'array'
        ]);
        $dataRequest = $request->request->all();
        $nombreCompleto = $dataRequest['nombreCompleto'];
        $listaFrases = $dataRequest['frases'];
        // Registrar personaje:
        $personaje = new Personaje();
        $personaje->nombreCompleto = $nombreCompleto;
        // Si se envia foto:
        if ($request->file()) {
            $response = Cloudinary::upload($request->file('foto')->getRealPath());
            $urlFoto = $response->getSecurePath();
            $personaje->foto = $urlFoto;
        }
        $personaje->save();
        foreach ($listaFrases as $item) {
            $dataFrase = $item->frase;
            $dataCalificacion = $item->calificacion;
            $frase = new Frase();
            $frase->frase = $dataFrase;
            $frase->calificacion = $dataCalificacion;
            $frase->personaje_id = $personaje->id;
            $frase->save();
        }
        return response()->json([
            'message' => 'Personaje agregado correctamente'
        ]);
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
