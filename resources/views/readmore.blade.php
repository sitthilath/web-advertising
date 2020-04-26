@extends('layouts.mainstructure')

@section('header')

<div id="navbar">
<nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-fixed-top " >
  
  <a class="navbar-brand " href="#" style="font-weight: bold;">ບໍລິສັດ ເອັສວີເອັກ</a>
 
  @if (auth()->check() && auth()->user()->usertype == 'admin' || auth()->check() && auth()->user()->usertype == 'user')
  <a  href="/admin.dashboard" class="btn btn-outline-secondary">Dashboard</a>
@endif
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNavDropdown">
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item  ">
        <a id="home" class="nav-link " href="/main"  aria-haspopup="true" aria-expanded="false" >ໜ້າຫຼັກ<span class="sr-only">(current)</span></a>
      </li>
      <div class="dropdown">
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ການບໍລິການ</a>
        <div class="dropdown-menu">
            <a href="#" class="dropdown-item">ການວາງແຜນຄູ້ມຄອງສິ່ງແວດລ້ອມ ແບບຮອບດ້ານ</a>
            <a href="#" class="dropdown-item">ບໍລິການ ຈັດຕັ້ງປະຕິບັດພັນທະໃນແຜນຄູ້ມຄອງສິ່ງແວດລ້ອມ ແລະສັງຄົມ ຂອງໂຄງການ</a>
            <a href="#" class="dropdown-item">ຕິດຕາມຄຸນນະພາບສິ່ງແວດລ້ອມ(ອາກາດ,ນໍ້າ,ສຽງ)</a>
            <a href="#" class="dropdown-item">ການບໍລິການ ISO14000</a>
            <a href="#" class="dropdown-item">ທີ່ປືກສາດ້ານກົດໝາຍກ່ຽວກັບວຽກງານສິ່ງແວດລ້ອມ</a>
            <a href="#" class="dropdown-item">ການຄວບຄຸມມົນລະຜິດ, ການຄຸ້ມຄອງສິ່ງເສດເຫຼືອທີ່ເປັນອັນຕະລາຍແລະ ເປັນພິດ</a>
            <a href="#" class="dropdown-item">ດ້ານເຕັກໂນໂລຊີທີ່ເປັນມິດຕໍ່ສິ່ງແວດລ້ອມ, ອາຄານເຄສະຖານ ເປັນມິດຕໍ່ສິ່ງແວດລ້ອມ</a>
  
        </div>
      </li>
      </div>

      <li class="nav-item">
        <a class="nav-link" href="download.php" aria-haspopup="true" aria-expanded="false"  >ດາວໂຫລດ</a>
      </li>
      <div class="dropdown">
      <li class="nav-item ">
      
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ກ່ຽວກັບບໍລິສັດເອັສວີເອັກ
        </a>
        
        <div class="dropdown-menu" >
          <a class="dropdown-item" href="/aboutlist1">ປະຫວັດຄວາມເປັນມາ</a>
          <a class="dropdown-item" href="/aboutlist2">ເປົ້າໝາຍ</a>
          <a class="dropdown-item" href="/aboutlist3">ສະຖານທີຕັງບໍລິສັດ</a>
        </div>
      </li>
      </div>
      <li class="nav-item">
          <a href="#" class="nav-link" aria-haspopup="true" aria-expanded="false">ໂຄງຮ່າງການຈັດຕັ້ງ</a>
      </li>

      <li class="nav-item">
          <a href="#" class="nav-link" aria-haspopup="true" aria-expanded="false">ຕິດຕໍ່ພວກເຮົາ</a>
      </li>
    </ul>
  </div>
 
</nav>

</div>

@endsection

@section('content')
<!--Slide picture----------------------------------------------------------------->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  
 @php $i=0 @endphp
  @foreach($dataforslider as $items)
  
  <li data-target="#carouselExampleIndicators" data-slide-to="{{$i++}}" class="@if($loop->first) active @endif" ></li>
 
  @endforeach
 </ol>
  <div class="carousel-inner">
  
  @foreach($dataforslider as $items) 
 
    <div class="carousel-item @if($loop->first) active @endif ">
      <img class="imageslider" src="..\uploads\image_slider\{{$items -> image_slider}}" alt="First ">
    </div>
   @endforeach
    
  </div>
  <a class="carousel-control-prev" " href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon"  aria-hidden="true"></span>
    <span class="sr-only" >Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-------------------------------------------------------------------------------->


<div class="container">
 

    <div class="row">
    
    @foreach($dataforblog as $items)
        <div class="col-sm" style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
       
            <a href="#" class="thumbnail">
            <img src="..\uploads\image_blog\{{$items->image_blog}}" alt="kak" width="100%; " height="300px;">
            </a>
            <h3>{{$items->title_blog}}</h3>
            <p>{!!$items->content_blog!!}
            </p>
           
          
            <h5 style="margin-bottom:0% ">{{$items->created_at}}</h5>
          
          
            <p>
    <!-- Go to www.addthis.com/dashboard to customize your tools --> 
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e9c07cc338d88a5"></script>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox_jfsw"></div>         
        </p>
        </div>
        
        @endforeach
        
    </div>


</div>



@endsection