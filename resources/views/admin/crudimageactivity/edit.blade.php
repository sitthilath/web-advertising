@extends('layouts.adminstructure')
@section('content')




<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
             
                <h4 class="card-title"> ແກ້ໄຂ ຮູບເຄື່ອນໄຫວວຽກ</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                @foreach($datafor as $items)


                <div class="container">
                <form action="{{url('/update.imageactivity/'.$items->id_imageactivity)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                <label for="image_imageactivity">ຮູບ:</label>
                <input type="file"   name="image_imageactivity" class="form-control">
                <label for="date_imageactivity">ວັນທີລົງ:</label>
                <input type="date" value="{{$items->date_imageactivity}}" class="form-control" name="date_imageactivity" >
               
                <button type="submit" class="btn btn-success" >ອັບເດດ</button>
                <a href="/admin.imageactivitymanage" class="btn btn-danger">ຍົກເລີກ</a>
            
                                
                </form>
                </div>
                </div>
              </div>
            </div>
@endforeach
@endsection