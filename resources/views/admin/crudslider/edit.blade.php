@extends('layouts.adminstructure')
@section('content')




<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
             
                <h4 class="card-title">ແກ້ໄຂ ຮູບ Banner</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                @foreach($datafor as $items)


                <div class="container">
                <form action="{{url('/update.slider/'.$items->id_slider)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                <label for="image_slider">ຮູບ:</label>
                <input type="file"   name="image_slider" class="form-control">
                <label for="date_slider">ວັນທີລົງ:</label>
                <input type="date" value="{{$items->date_slider}}" class="form-control" name="date_slider" >
               
                <button type="submit" class="btn btn-success">ອັບເດດ</button>
                <a href="/admin.slidermanage" class="btn btn-danger">ຍົກເລີກ</a>
               
                                
                </form>
                </div>
                </div>
              </div>
            </div>
@endforeach
@endsection