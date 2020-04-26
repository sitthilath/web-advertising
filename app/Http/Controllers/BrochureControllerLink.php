<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Brochure;
class BrochureControllerLink extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $datafor = Brochure::
            orderBy('id_brochure','asc')->paginate(10);
       

        return view('/admin.brochuremanage',['datafor'=>$datafor]);
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
        $brochure= new Brochure();
       
       
        $brochure->date_brochure= $request->input('date_brochure');
        
        
        if($request->hasFile('image_brochure')){
            $image = $request->file('image_brochure');
            $extension = $image->getClientOriginalName();
            $filename = $extension;
            $image->move('uploads/image_brochure/',$filename);
            $brochure->image_brochure = $filename;
        }
         

        $brochure->save();
        return redirect('/admin.brochuremanage');
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
        $datafor = DB::select('SELECT * FROM brochures WHERE id_brochure=?',[$id]);
        return view('admin.crudbrochure.edit',compact('datafor'));
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
        $image = $request->input('image_brochure');

        $date = $request->input('date_brochure');

       
        $brochure = new Brochure();
        if($request->hasFile('image_brochure')){
            $image = $request->file('image_brochure');
            $extension = $image->getClientOriginalName();
            $filename = $extension;
            $image->move('uploads/image_brochure/',$filename);
         $image_brochure= $brochure->image_brochure = $filename;
        
         DB::update('UPDATE brochures SET image_brochure=?,date_brochure=? WHERE id_brochure=?',[$image_brochure,$date,$id]);
     
        
        }else{

            DB::update('UPDATE brochures SET date_brochure=? WHERE id_brochure=?',[$date,$id]);
     
        }
        
     
          return redirect('/admin.brochuremanage');    
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('DELETE FROM brochures WHERE id_brochure=?',[$id]);
        return redirect('/admin.brochuremanage');
    }
}
