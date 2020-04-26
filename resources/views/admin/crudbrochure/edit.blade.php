@extends('layouts.adminstructure')
@section('content')




<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
             
                <h4 class="card-title"> ແກ້ໄຂ ໃບປິວ</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                @foreach($datafor as $items)


                <div class="container">
                <form action="{{url('/update.brochure/'.$items->id_brochure)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                <label for="image_brochure">ຮູບ:</label>
                <input type="file"   name="image_brochure" class="form-control">
                <label for="date_brochure">ວັນທີລົງ:</label>
                <input type="date" value="{{$items->date_brochure}}" class="form-control" name="date_brochure" >
               
                <button type="submit" class="btn btn-success" >ອັບເດດ</button>
                <a href="/admin.brochuremanage" class="btn btn-danger">ຍົກເລີກ</a>
                   
                                
                </form>
                </div>
                </div>
              </div>
            </div>
@endforeach
@endsection