@extends('layouts.adminstructure')

@section('title')



@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
             
                <h4 class="card-title"> ເພີ່ມ ໃບປິວ</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <div class="container">
                    <form action="{{url('/done.brochure')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <label for="image_brochure">ຮູບ:</label>
                    <input type="file" class="form-control" name="image_brochure" >
                    <label for="date_brochure">ວັນທີລົງ:</label>
                    <input type="date" class="form-control" name="date_brochure" >
                   
                    <button type="submit" class="btn btn-primary">ເພີ່ມ</button>
                    <a href="/admin.brochuremanage" class="btn btn-danger">ຍົກເລີກ</a>
                    <button type="reset" class="btn btn-secondary">ລ້າງ</button>

                    </form>
                    </div>
                </div>
              </div>
            </div>



@endsection()



