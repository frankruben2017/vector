<?php

namespace Vector\Http\Controllers;

use Illuminate\Http\Request;
use Vector\Solicitud;
use Session;
use Redirect;
use Vector\Cataloge;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use Illuminate\Support\Facades\Validator;

class SolicitudController extends Controller
{
    
      protected $cataloge_id;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    
     
    
    public function index()
    {
        
        $solicitud = DB::table('solicituds')->paginate(5);
        $cataloge = Cataloge::has('solicitud')->get();
        return view('solicitud.index',['solicituds'=>$solicitud,'cataloges'=>$cataloge]);  //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('solicitud.create');//
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request, [

            'name' => 'required|max:255',
            'lastnames' => 'required|max:255',
           'CIN' => 'required|unique:solicituds',
           'email' => 'required|email|max:255',
            'phone' => 'required|integer|max:255',
            'city' => 'required|max:255',

        ]);

       $cataloge = Cataloge::find($request['cat']);
        
             Solicitud::create([
            'name' => $request['name'],
            'lastnames' => $request['lastnames'],
            'CIN' => $request['CIN'],
            'phone' => $request ['phone'],
            'city' => $request['city'],
            'email' => $request['email'],
            'user_id'=> Auth::id(),
           ])->cataloge()->save($cataloge);
        


       /* Cataloge_Solicitud::create([
            'cataloge_id' => $request['cataloge_id'],
            'solicitud_id' => $request['solicitud_id'],
        ]);        */

        Session::flash('message','Solicitud creada correctamente');
        return Redirect::to('/solicitud');////
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $solicitud = Solicitud::find($id);
        return view('solicitud.show',['solicitud'=>$solicitud]);//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $solicitud = Solicitud::find($id);
        return view('solicitud.edit',['solicitud'=>$solicitud]); //
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
         $solicitud = Solicitud::find($id);
        $solicitud->fill($request->all());
        $solicitud->save();

        Session::flash('message','Solicitud editada correctamente');
        return Redirect::to('/solicitud');
        ////
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Solicitud::destroy($id);

        Session::flash('message','Solicitud eliminada correctamente');
        return Redirect::to('/solicitud');////
    }

    public function crear_solicitud($id)
    {
          $cataloge_id = $id;
          return view('solicitud.create',['id'=>$id]);
       
}
}