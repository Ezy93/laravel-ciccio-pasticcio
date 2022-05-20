<?php

namespace App\Http\Controllers\Admin;
use App\Pasticcio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PasticcioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasticcios = Pasticcio::all();
        return view('admin.pasticci.index', compact('pasticcios'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  Pasticcio $pasticcio
     * @return \Illuminate\Http\Response
     */
    public function show(Pasticcio $pasticcio)
    {
        $availablePasticcios = Pasticcio::count();
        return view('admin.pasticci.show', ['pasticcio'=> $pasticcio, 'pasticciosCount'=>$availablePasticcios]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Pasticcio $pasticcio
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasticcio $pasticcio)
    {
        return view('admin.pasticci.edit',compact('pasticcio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasticcio $pasticcio)
    {
        $data = $request->all();
        $pasticcio->name = $data['name'];
        $pasticcio->ingredients = $data['ingredients'];
        $pasticcio->price = $data['price'];
        $pasticcio->save();

        return redirect()->route('admin.pasticcios.show',$pasticcio)->with('message', "$pasticcio->name è stato modificato correttamente");
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
