@extends('layouts.adminstructure')

@section('title')



@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
         
                <h4 class="card-title" >ຕາຕະລາງ ແຜນທີ່</h4>
                <a href="/insertmap" class="btn btn-primary">ເພີ່ມ ແຜນທີ່</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead class=" text-primary thead-dark">
                      <th>
                        ລິ້ງ
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
                        <td>{{Illuminate\Support\Str::limit($items->link_map,20,'...')}}</td>
                    
                        <td>{{$items->date_map}}</td>
                        
                        <td class="text-right">
                    <form action="{{url('/del.map/'.$items->id_map)}}" method="post">
                    {{method_field('DELETE')}}
                            {{csrf_field()}}
                 
                    <a href="{{url('/edit.map/'.$items->id_map)}}" class="btn btn-warning" >ແກ້ໄຂ</a>
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




