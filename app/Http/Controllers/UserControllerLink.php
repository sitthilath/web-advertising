<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
class UserControllerLink extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datafor = User::
            orderBy('id','asc')->paginate(10);
       

        return view('/admin.usermanage',['datafor'=>$datafor]);
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
        $datafor = DB::select('SELECT * FROM users WHERE id=?',[$id]);
        return view('admin.cruduser.edit',compact('datafor'));
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
        $name = $request->input('name');
        $surname = $request->input('surname');
        $address = $request->input('address');
        $tel = $request->input('tel');
        $email = $request->input('email');
        $password =Hash::make($request->input('password'));
        $usertype = $request->input('usertype');
        $dateofbirth = $request->input('dateofbirth');

       
        
        
     
        DB::update('UPDATE users SET name=?,surname=?,dateofbirth=?,address=?,tel=?,email=?,password=?,usertype=? WHERE id=?',[$name,$surname,$dateofbirth,$address,$tel,$email,$password,$usertype,$id]);
        return redirect('/admin.usermanage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete('DELETE FROM users WHERE id=?',[$id]);
        return redirect('/admin.usermanage');
    }
}
