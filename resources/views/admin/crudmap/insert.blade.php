@extends('layouts.adminstructure')

@section('title')



@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
             
                <h4 class="card-title"> ເພີ່ມ ແຜນທີ່</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <div class="container">
                    <form action="{{url('/done.map')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <label for="link_map">ລິ້ງ:</label>
                   
                    <textarea class="form-control border" name="link_map" placeholder="ໃສ່ລິ້ງແຜນທີ່"></textarea>
                   
                    <label for="date_map">ວັນທີລົງ:</label>
                    <input type="date" class="form-control" name="date_map" >
                   
                    <button type="submit" class="btn btn-primary">ເພີ່ມ</button>
                    <a href="/admin.mapmanage" class="btn btn-danger">ຍົກເລີກ</a>
                    <button type="reset" class="btn btn-secondary">ລ້າງ</button>

                    </form>
                    </div>
                </div>
              </div>
            </div>



@endsection()



