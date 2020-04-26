@extends('layouts.adminstructure')

@section('title')



@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
         
                <h4 class="card-title"> ເພີ່ມ ຮູບເຄື່ອນໄຫວວຽກ</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <div class="container">
                    <form action="{{url('/done.imageactivity')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <label for="image_imageactivity">ຮູບ:</label>
                    <input type="file" class="form-control" name="image_imageactivity" >
                    <label for="image_imageactivity">ວັນທີລົງ:</label>
                    <input type="date" class="form-control" name="date_imageactivity" >
                   
                    <button type="submit" class="btn btn-primary" >ເພີ່ມ</button>
                    <a href="/admin.imageactivitymanage" class="btn btn-danger">ຍົກເລີກ</a>
                    <button type="reset" class="btn btn-secondary">ລ້າງ</button>

                    </form>
                    </div>
                </div>
              </div>
            </div>



@endsection()



