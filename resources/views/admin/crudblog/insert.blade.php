@extends('layouts.adminstructure')

@section('title')



@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              
                <h4 class="card-title"> ເພີ່ມຂ່າວ</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <div class="container">
                    <form action="{{url('/done.blog')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                  

                    <label for="image_blog">ຮູບ:</label>
                    <input type="file" class="form-control" name="image_blog" >
                    <label for="title_blog">ຫົວຂໍ້:</label>
                    <input type="text" class="form-control" name="title_blog" placeholder="ໃສ່ຫົວຂໍ້">
                    <label for="content_blog">ເນື້ອໃນ:</label>
                    <textarea id="summernote"   class="form-control border" name="content_blog" placeholder="ໃສ່ເນື້ອໃນ"></textarea> 
                    <label for="date_blog">ວັນທີລົງ:</label>
                    <input type="date" class="form-control" name="date_blog" >
                    
                    <button type="submit" class="btn btn-primary">ເພີ່ມ</button>
                    <a href="/admin.blogmanage" class="btn btn-danger">ຍົກເລີກ</a>
                    <button type="reset" class="btn btn-secondary">ລ້າງ</button>


                    </form>
                    </div>
                </div>
              </div>
            </div>

         

@endsection()



