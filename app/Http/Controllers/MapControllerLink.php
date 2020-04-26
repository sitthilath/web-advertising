<?php

namespace App\Http\Controllers;
use App\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MapControllerLink extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datafor = Map::
            orderBy('id_map','asc')->paginate(10);
       

        return view('/admin.mapmanage',['datafor'=>$datafor]);
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
        $map= new Map();
       
       
        $map->date_map= $request->input('date_map');
        $map->link_map= $request->input('link_map');
        
        
            
           
         

        $map->save();
        return redirect('/admin.mapmanage');
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
        $datafor = DB::select('SELECT * FROM maps WHERE id_map=?',[$id]);
        return view('admin.crudmap.edit',compact('datafor'));
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
        $link = $request->input('link_map');
       
        $date = $request->input('date_map');

       
        
        
     
        DB::update('UPDATE maps SET link_map=?,date_map=? WHERE id_map=?',[$link,$date,$id]);
        return redirect('/admin.mapmanage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('DELETE FROM maps WHERE id_map=?',[$id]);
        return redirect('/admin.mapmanage');
    }
}
