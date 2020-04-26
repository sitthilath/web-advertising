<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Imageactivity;
class ImageactivityControllerLink extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datafor = Imageactivity::
            orderBy('id_imageactivity','asc')->paginate(10);
       

        return view('/admin.imageactivitymanage',['datafor'=>$datafor]);
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
        $Imageactivity= new Imageactivity();
       
       
        $Imageactivity->date_imageactivity= $request->input('date_imageactivity');
        
        
        if($request->hasFile('image_imageactivity')){
            $image = $request->file('image_imageactivity');
            $extension = $image->getClientOriginalName();
            $filename = $extension;
            $image->move('uploads/image_imageactivity/',$filename);
            $Imageactivity->image_imageactivity = $filename;
        }

           


        $Imageactivity->save();
        return redirect('/admin.imageactivitymanage');
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
        $datafor = DB::select('SELECT * FROM imageactivities WHERE id_imageactivity=?',[$id]);
        return view('admin.crudimageactivity.edit',compact('datafor'));
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
        $image = $request->input('image_imageactivity');

        $date = $request->input('date_imageactivity');

       
        $Imageactivity = new Imageactivity();
        if($request->hasFile('image_imageactivity')){
            $image = $request->file('image_imageactivity');
            $extension = $image->getClientOriginalName();
            $filename = $extension;
            $image->move('uploads/image_imageactivity/',$filename);
         $image_imageactivity= $Imageactivity->image_imageactivity = $filename;
        
         DB::update('UPDATE imageactivities SET image_imageactivity=?,date_imageactivity=? WHERE id_imageactivity=?',[$image_imageactivity,$date,$id]);
       
        
        }else{

            DB::update('UPDATE imageactivities SET date_imageactivity=? WHERE id_imageactivity=?',[$date,$id]);
       
        }
        
     
         return redirect('/admin.imageactivitymanage');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('DELETE FROM imageactivities WHERE id_imageactivity=?',[$id]);
        return redirect('/admin.imageactivitymanage');
    }
}
