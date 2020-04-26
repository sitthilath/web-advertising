@extends('layouts.adminstructure')

@section('title')



@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
         
                <h4 class="card-title">ຕາຕະລາງ ຜູ້ໃຊ້</h4>
                <a href="{{ route('register') }}" class="btn btn-primary">ເພີ່ມ ຜູ້ໃຊ້</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead class=" text-primary thead-dark">
                      <th>
                        ຊື່
                      </th>
                      
                      <th>
                        ນາມສະກຸນ
                      </th>
                      <th>
                        ດ/ວ/ປ ເກີດ
                      </th>
                      
                      <th>
                        ທີ່ຢູ່
                      </th>
                      <th>
                        ເບີໂທ
                      </th>
                      
                      <th>
                        ອີເມວ
                      </th>
                      <th>
                        ລະຫັດຜ່ານ
                      </th>
                      
                      <th>
                        ປະເພດຜູ້ໃຊ້
                      </th>
                     
                      <th class="text-right">
                        ຈັດການ
                      </th>
                    </thead>

                  
                    @foreach($datafor as $items)
                    <tbody>
                    
                    <tr>
                        <td>{{$items->name}}</td>
                    
                        <td>{{$items->surname}}</td>
                        
                        <td>{{$items->dateofbirth}}</td>
                    
                        <td>{{$items->address}}</td>
                        
                        <td>{{$items->tel}}</td>
                    
                        <td>{{$items->email}}</td>
                     
                        <td>{{Illuminate\Support\Str::limit($items->password,20,'...')}}</td>
                    
                        <td>{{$items->usertype}}</td>
                        
                        <td class="text-right">
                    <form action="{{url('/del.user/'.$items->id)}}" method="post">
                    {{method_field('DELETE')}}
                            {{csrf_field()}}

                    <a href="{{url('/edit.user/'.$items->id)}}" class="btn btn-warning" >ແກ້ໄຂ</a>
                    <button type="submit" class="btn btn-danger">ລົບ</button>
                    </form>

                        </td>
                    </tr>

                    </tbody>

                    @endforeach


                  </table>

                         <div class="pagination">{{$datafor->links()}}</div>
                </div>
              </div>
            </div>
@endsection()




