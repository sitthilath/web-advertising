<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Youtube;
class YoutubeControllerLink extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datafor = Youtube::
            orderBy('id_youtube','asc')->paginate(10);
       

        return view('/admin.youtubemanage',['datafor'=>$datafor]);
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
        $youtube= new Youtube();
       
        $youtube->link_youtube= $request->input('link_youtube');
        $youtube->date_youtube= $request->input('date_youtube');
   
        
        
            
           
         

        $youtube->save();
        return redirect('/admin.youtubemanage');
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
        $datafor = DB::select('SELECT * FROM youtubes WHERE id_youtube=?',[$id]);
        return view('admin.crudyoutube.edit',compact('datafor'));
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
       
        $link = $request->input('link_youtube');
       
        $date = $request->input('date_youtube');

       
        
        
     
        DB::update('UPDATE youtubes SET link_youtube=?,date_youtube=? WHERE id_youtube=?',[$link,$date,$id]);
        return redirect('/admin.youtubemanage');    
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        DB::delete('DELETE FROM youtubes WHERE id_youtube=?',[$id]);
        return redirect('/admin.youtubemanage');
    }
}
