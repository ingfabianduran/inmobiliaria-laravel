<?php

namespace App\Http\Controllers;

use App\Models\Foto;
use App\Models\Inmueble;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class FotoController extends Controller
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
    public function store(Request $request)
    {
        $response = Cloudinary::upload($request->file('imagenes')->getRealPath());
        $url = $response->getSecurePath();
        $publicId = $response->getPublicId();
        $foto = new Foto();
        $foto->url = $url;
        $foto->publicId = $publicId;
        $foto->inmueble_id = $request->inmueble_id;
        $foto->save();
        $inmueble = Inmueble::find($request->inmueble_id);
        return response()->json([
            'inmueble' => $inmueble,
            'message' => 'Imagen almacenada correctamente'
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
        $foto = Foto::find($id);
        return response()->json([
            'foto' => $foto
        ]);
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
        $foto = Foto::find($id);
        $deleteFileCloudinary = Cloudinary::destroy($foto->publicId);
        $foto->delete();
        $inmueble = Inmueble::find($foto->inmueble_id);
        return response()->json([
            'message' => 'Imagen eliminada correctamente',
            'inmueble' => $inmueble
        ]);
    }
}
