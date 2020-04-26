@extends('layouts.adminstructure')
@section('content')




<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
             
                <h4 class="card-title">ແກ້ໄຂ ວິດີໂອ</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                @foreach($datafor as $items)


                <div class="container">
                <form action="{{url('/update.youtube/'.$items->id_youtube)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                <label for="link_youtube">ລິ້ງ:</label>
             
                <textarea class="form-control border" name="link_youtube" placeholder="ໃສ່ລິ້ງວິດີໂອ(youtube)">{{$items->link_youtube}}</textarea>  
                <label for="date_youtube">ວັນທີລົງ:</label>
                <input type="date" value="{{$items->date_youtube}}" class="form-control" name="date_youtube" >
               
                <button type="submit" class="btn btn-success">ອັບເດດ</button>
                <a href="/admin.youtubemanage" class="btn btn-danger">ຍົກເລີກ</a>
                   
                                
                </form>
                </div>
                </div>
              </div>
            </div>
@endforeach
@endsection