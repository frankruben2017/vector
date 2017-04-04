<?php

namespace Vector\Http\Controllers;

use Illuminate\Http\Request;
use Vector\Cataloge;
use Vector\Solicitud;
use Session;
use Redirect;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class CatalogeController extends Controller
{
     
     /*
      Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cataloges = DB::table('cataloges')->paginate(5);
        return view('cataloge.index', compact('cataloges'));     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cataloge.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Cataloge::create([
            'product_code' => $request['product_code'],
            'product_name' => $request['product_name'],
            'description' => $request['description'],
            'created_by' => Auth::id(), 
            'monto' => $request ['monto'], 
            'plazo_to_pay' => $request ['plazo_to_pay'], 
        ]);

        Session::flash('message','Producto creado correctamente');
        return Redirect::to('/cataloge');//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $cataloge = Cataloge::find($id);
        return view('cataloge.show',['cataloge'=>$cataloge]);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cataloge = Cataloge::find($id);
        return view('cataloge.edit',['cataloge'=>$cataloge]); 
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
        $cataloge = Cataloge::find($id);
        $cataloge->fill($request->all());
        $cataloge->save();

        Session::flash('message','Producto editado correctamente');
        return Redirect::to('/cataloge');
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
        Cataloge::destroy($id);

        Session::flash('message','Producto eliminado correctamente');
        return Redirect::to('/cataloge');//
    }


    
}
