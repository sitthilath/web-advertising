<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Slider;
class SliderControllerLink extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datafor = Slider::
            orderBy('id_slider','asc')->paginate(10);
       

        return view('/admin.slidermanage',['datafor'=>$datafor]);
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
        $slider= new Slider();
       
       
        $slider->date_slider= $request->input('date_slider');
        
        
        if($request->hasFile('image_slider')){
            $image = $request->file('image_slider');
            $extension = $image->getClientOriginalName();
            $filename = $extension;
            $image->move('uploads/image_slider/',$filename);
            $slider->image_slider = $filename;
        }

           


        $slider->save();
        return redirect('/admin.slidermanage');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datafor = DB::select('SELECT * FROM sliders WHERE id_slider=?',[$id]);
        return view('admin.crudslider.edit',compact('datafor'));
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
        $image = $request->input('image_slider');

        $date = $request->input('date_slider');

       
        $slider = new Slider();
        if($request->hasFile('image_slider')){
            $image = $request->file('image_slider');
            $extension = $image->getClientOriginalName();
            $filename = $extension;
            $image->move('uploads/image_slider/',$filename);
         $image_slider= $slider->image_slider = $filename;
        
         DB::update('UPDATE sliders SET image_slider=?,date_slider=? WHERE id_slider=?',[$image_slider,$date,$id]);
       
        
        }else{

            DB::update('UPDATE sliders SET date_slider=? WHERE id_slider=?',[$date,$id]);
       
        }
        
     
         return redirect('/admin.slidermanage'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('DELETE FROM sliders WHERE id_slider=?',[$id]);
        return redirect('/admin.slidermanage');
    }
}
