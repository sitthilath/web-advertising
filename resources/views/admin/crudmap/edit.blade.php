@extends('layouts.adminstructure')
@section('content')




<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
             
                <h4 class="card-title"> ແກ້ໄຂ ແຜນທີ່</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                @foreach($datafor as $items)


                <div class="container">
                <form action="{{url('/update.map/'.$items->id_map)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                <label for="link_map">ລິ້ງ:</label>
               
                <textarea class="form-control border" name="link_map" placeholder="ໃສ່ລິ້ງແຜນທີ່">{{$items->link_map}}</textarea>
                <label for="date_map">ວັນທີລົງ:</label>
                <input type="date" value="{{$items->date_map}}" class="form-control" name="date_map" >
               
                <button type="submit" class="btn btn-success">ອັບເດດ</button>
                <a href="/admin.mapmanage" class="btn btn-danger">ຍົກເລີກ</a>
         
                                
                </form>
                </div>
                </div>
              </div>
            </div>
@endforeach
@endsection