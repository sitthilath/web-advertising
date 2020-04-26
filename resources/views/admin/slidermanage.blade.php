@extends('layouts.adminstructure')

@section('title')



@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
       
                <h4 class="card-title">ຕາຕະລາງ Banner</h4>
                <a href="/insertslider" class="btn btn-primary">ເພີ່ມ Banner</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead class=" text-primary thead-dark" >
                      <th>
                        ຮູບ
                      </th>
            
                      <th>
                        ວັນທີລົງ
                      </th>
                     
                      <th class="text-right">
                        ຈັດການ
                      </th>
                    </thead>

                  
                    @foreach($datafor as $items)
                    <tbody>
                    
                    <tr>
                        <td>{{$items->image_slider}}</td>
                       
                        <td>{{$items->date_slider}}</td>
                        
                        <td class="text-right">
                    <form action="{{url('/del.slider/'.$items->id_slider)}}" method="post">
                    {{method_field('DELETE')}}
                            {{csrf_field()}}

                    <a href="{{url('/edit.slider/'.$items->id_slider)}}" class="btn btn-warning">ແກ້ໄຂ</a>
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




