<?php

namespace App\Http\Controllers;

use App\Models\Locales;
use Illuminate\Http\Request;

class LocalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['Locales']=Locales::paginate(10);
        return view('Locales.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Locales.createLocal');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosLocales=request()->except('_token');
        if($request->hasFile('Logo')){
            $datosLocales['Logo']=$request->file('Logo')->store('uploads','public');
        }
        Locales::insert($datosLocales);
        return response()->json($datosLocales);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Locales  $locales
     * @return \Illuminate\Http\Response
     */
    public function show(Locales $locales)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Locales  $locales
     * @return \Illuminate\Http\Response
     */
    public function edit(Locales $locales)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Locales  $locales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Locales $locales)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Locales  $locales
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Locales::destroy($id);
        return redirect('locales');
    }
}
