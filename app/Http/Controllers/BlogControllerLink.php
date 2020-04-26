<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Blog;
class BlogControllerLink extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datafor = Blog::
            orderBy('id_blog','asc')->paginate(10);
       

        return view('/admin.blogmanage',['datafor'=>$datafor]);
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blog = new Blog();
       
        $blog->title_blog= $request->input('title_blog');
        $blog->content_blog= $request->input('content_blog');
        $blog->date_blog= $request->input('date_blog');
        
        if($request->hasFile('image_blog')){
            $image = $request->file('image_blog');
            $extension = $image->getClientOriginalName();
            $filename = $extension;
            $image->move('uploads/image_blog/',$filename);
            $blog->image_blog = $filename;
        }

      

         

        $blog->save();
        return redirect('/admin.blogmanage');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dataforslider = DB::select('SELECT * FROM sliders WHERE id_slider=?',[$id]);
     
        $dataforblog = DB::select('SELECT * FROM blogs WHERE id_blog=?',[$id]);
        return view('readmore',compact('dataforblog','dataforslider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datafor = DB::select('SELECT * FROM blogs WHERE id_blog=?',[$id]);
        return view('admin.crudblog.edit',compact('datafor'));
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
        $blog = new Blog();

        $image = $request->input('image_blog');
        $title = $request->input('title_blog');
        $content = $request->input('content_blog');
        $date = $request->input('date_blog');





        
        if($request->hasFile('image_blog')){
            $image = $request->file('image_blog');
            $extension = $image->getClientOriginalName();
            $filename = $extension;
            $image->move('uploads/image_blog/',$filename);
         $image_blog= $blog->image_blog = $filename;
           
         DB::update('UPDATE blogs SET image_blog=?,title_blog=?,content_blog=?,date_blog=? WHERE id_blog=?',[$image_blog,$title,$content,$date,$id]);
         
        }else{

            DB::update('UPDATE blogs SET title_blog=?,content_blog=?,date_blog=? WHERE id_blog=?',[$title,$content,$date,$id]);
         
        }
        
     
       
    

         


        return redirect('/admin.blogmanage');   

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('DELETE FROM blogs WHERE id_blog=?',[$id]);
        return redirect('/admin.blogmanage');
    }
}
