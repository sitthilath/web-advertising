@extends('layouts.adminstructure')
@section('content')




<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
             
                <h4 class="card-title"> ແກ້ໄຂ ຜູ້ໃຊ້</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                @foreach($datafor as $items)


                <div class="container">
                <form action="{{url('/update.user/'.$items->id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="PUT">
                <label for="name">ຊື່:</label>
                <input type="text"  value="{{$items->name}}" name="name" class="form-control">
                <label for="surname">ນາມສະກຸນ:</label>
                <input type="text"  value="{{$items->surname}}" name="surname" class="form-control">
                <label for="dateofbirth">ດ/ວ/ປ ເກີດ:</label>
                <input type="date"  value="{{$items->dateofbirth}}" name="dateofbirth" class="form-control">
                <label for="address">ທີ່ຢູ່:</label>
                <input type="text"  value="{{$items->address}}" name="address" class="form-control">
                <label for="tel">ເບີໂທ:</label>
                <input type="tel"  value="{{$items->tel}}" name="tel" class="form-control">
                <label for="email">ອີເມວ:</label>
                <input type="email"  value="{{$items->email}}" name="email" class="form-control">
                <label for="password">ລະຫັດຜ່ານ:</label>
                <input type="password"  value="{{$items->password}}" name="password" class="form-control">
                <label for="usertype">ປະເພດ:</label>
                <select name="usertype" class="form-control">
                  @if($items->usertype=="admin")
                  <option value="admin">admin</option>
                  <option value="user">user</option>
                 
                  @else
                  <option value="user">user</option>
                  <option value="admin">admin</option>
                  @endif
                </select>
                <button type="submit" class="btn btn-success">ອັບເດດ</button>
                <a href="/admin.usermanage" class="btn btn-danger">ຍົກເລີກ</a>
                  
                                
                </form>
                </div>
                </div>
              </div>
            </div>
@endforeach
@endsection