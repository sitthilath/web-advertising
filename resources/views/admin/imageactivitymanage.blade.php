@extends('layouts.adminstructure')

@section('title')



@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header" >
           
                <h4 class="card-title">ຕາຕະລາງ ຮູບເຄື່ອນໄຫວວຽກ</h4>
                <a href="/insertimageactivity" class="btn btn-primary">ເພີ່ມ ຮູບເຄື່ອນໄຫວວຽກ</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead class=" text-primary thead-dark">
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
                        <td>{{$items->image_imageactivity}}</td>
                       
                        <td>{{$items->date_imageactivity}}</td>
                        
                        <td class="text-right">
                    <form action="{{url('/del.imageactivity/'.$items->id_imageactivity)}}" method="post">
                    {{method_field('DELETE')}}
                            {{csrf_field()}}
                   
                    <a href="{{url('/edit.imageactivity/'.$items->id_imageactivity)}}" class="btn btn-warning" >ແກ້ໄຂ</a>
                    <button type="submit" class="btn btn-danger" >ລົບ</button>
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




