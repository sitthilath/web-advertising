@extends('layouts.adminstructure')
@section('content')




<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
             
                <h4 class="card-title">ແກ້ໄຂ ຂ່າວ</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                @foreach($datafor as $items)


                <div class="container">
                <form action="{{url('/update.blog/'.$items->id_blog)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                <label for="image_blog">ຮູບ:</label>
                <input type="file"   name="image_blog" class="form-control">
                <label for="title_blog">ຫົວຂໍ້:</label>
                <input type="text " value="{{$items->title_blog}}" name="title_blog" class="form-control">
                <label for="content_blog">ເນື້ອໃນ:</label>
                <textarea id="summernote"   class="form-control border" name="content_blog" placeholder="enter content">{{$items->content_blog}}</textarea> 
                <label for="date_blog">ວັນທີລົງ</label>
                <input type="date" value="{{$items->date_blog}}" class="form-control" name="date_blog" >
               
                <button type="submit" class="btn btn-success">ອັບເດດ</button>
                <a href="/admin.blogmanage" class="btn btn-danger">ຍົກເລີກ</a>
                   
                                
                </form>
                </div>
                </div>
              </div>
            </div>

            
@endforeach


@endsection