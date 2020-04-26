@extends('layouts.adminstructure')

@section('title')



@section('content')
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
              
                <h4 class="card-title"> ຕາຕະລາງ ຂ່າວ</h4>
                <a href="/insertblog" class="btn btn-primary">ເພີ່ມ ຂ່າວ</a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered">
                    <thead class=" text-primary thead-dark " >
                      <th>
                        ຮູບ
                      </th>
                      <th>
                        ຫົວຂໍ້
                      </th>
                      <th>
                        ເນື້ອໃນ
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
                        <td>{{$items->image_blog}}</td>
                        <td>{{$items->title_blog}}</td>
                        <td>{{Illuminate\Support\Str::limit($items->content_blog,20,'...')}}</td>
                        <td>{{$items->date_blog}}</td>
                        
                       
                            <td class="text-right">
                        <a href="{{url('/edit.blog/'.$items->id_blog)}}" class="btn btn-warning">ແກ້ໄຂ</a>
                        
                    <form action="{{url('/del.blog/'.$items->id_blog)}}" method="post">
                    {{method_field('DELETE')}}
                            {{csrf_field()}}
                            
                           
                   
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




