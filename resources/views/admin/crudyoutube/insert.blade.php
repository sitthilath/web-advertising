@extends('layouts.adminstructure')

@section('title')



@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
            
                <h4 class="card-title">ເພີ່ມ ວິດີໂອ</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <div class="container">
                    <form action="{{url('/done.youtube')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <label for="link_youtube">ລິ້ງ:</label>
                    <textarea class="form-control border" name="link_youtube" placeholder="ໃສ່ລິ້ງວິດີໂອ(youtube)"></textarea>
                    <label for="date_youtube">ວັນທີລົງ:</label>
                    <input type="date" class="form-control" name="date_youtube" >
                   
                    <button type="submit" class="btn btn-primary">ເພີ່ມ</button>
                    <a href="/admin.youtubemanage" class="btn btn-danger">ຍົກເລີກ</a>
                    <button type="reset" class="btn btn-secondary">ລ້າງ</button>

                    </form>
                    </div>
                </div>
              </div>
            </div>



@endsection()



