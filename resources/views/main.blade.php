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

<script>

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
  
  } else {
    document.getElementById("navbar").style.padding = "80px 10px";
 
  }
}
</script>
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
      <img class="imageslider" src="uploads\image_slider\{{$items -> image_slider}}" alt="First ">
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



<!---Blog--Section--------------------------------------------------------------------------->

   


<div class="container" role="main" style=" margin-top: 10px;" >

      <div class="row "  >
   
          <div class="col-sm-12">
          <h2 style="background-color: #96deda;">ລາຍການຂ່າວຫຼ້າສຸດ</h2>

          <div class="row">
                
                @foreach($dataforblog as $items)
                <div class="col-sm-4" style="  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    
                    <a href="#" class="thumbnail">
                        <img src="uploads\image_blog\{{$items->image_blog}}" width="100%;" height="300px;">
                    </a>
                   
                    <h4 style="color:green;"><strong>{{$items->title_blog}}</strong></h4>
                    <p>{{Illuminate\Support\Str::limit($items->content_blog,250,'...') }}
                    </p>
                    <h5 style="margin-bottom: 0;position: absolute; left: 5px; bottom:5px;   ">{{$items->date_blog}}</h5>
                  
                    <div class="row" style="padding:10px;  " >
                         <p>&nbsp;</p>
                         
                          <a href="{{url('/readmore?id='.$items->id_blog)}}" id="btnreadmore"  style="margin-bottom: 0;position: absolute; right: 5px; bottom:5px;   " class="btn btn-outline-primary " >ອ່ານເພີ່ມເຕີມ</a>
                         
                        </div>
              
                </div>
                
                @endforeach
                
            </div>
            

           </div>
      </div>


  <!--Pagination---->
      <div>{{$dataforblog->links()}} </div> 

             

</div>
<!-------------------------------------------------------------------------------->




<!--Brochure-------------------------------------------------------------------->


<div class="container" role="main" style=" margin-top: 10px;">

      <div class="row" >
     
          <div class="col-sm-12" align="center">
           <h2 style="background-color: #96deda;">ໃບປິວ</h2>
              <div class="row" id="rowbrochure" style="background-color: #ebedee" >

              @foreach($dataforbrochure as $items)
                  <div class="col-sm-4" style="padding: 20px;">
                    <img src="uploads\image_brochure\{{$items->image_brochure}}" alt="ez" class="imgbrochure" >
                    <center> <h4 style="background-color:  #c2e9fb">ສະບັບວັນທີ {{$items->date_brochure }} </h4></center>
                   </div>

              @endforeach
              </div> 

           </div>
      </div>
</div>


<!---------------------------------------------------------------------->

<!--Video------------------------------------------------------------------------------>

<div class="container"  id="video" >
<h2 style="background-color: #96deda;">ວິດີໂອ</h2>
<div class="row">
  <div class="col-sm">
  <input type="checkbox" onclick="change1()" id="chk2" style="display: none;">
  <label for="chk2">show All</label>
  </div>
</div>


  <div id ="youtube1" align="center">
    <div class="row" id="row" >

    @foreach($dataforyoutube as $items)
      <div class="col-sm" id="column">
    <iframe id="fyoutube" width="100%" height="400px" src="{{$items->link_youtube}}" frameborder="0" allowfullscreen></iframe>  
    </div>
    @endforeach
    </div>

  </div>


 
   <div id ="youtube2" align="center" style="display: none;">
    <div class="row" id="row2" >
    @foreach($dataforyoutube as $items)
      <div class="col-sm-4" id="column">
    <iframe id="fyoutube" width="100%" height="400px" src="{{$items->link_youtube}}" frameborder="0" allowfullscreen></iframe>  
    </div>
    @endforeach
    </div>

  </div>
</div>


<!--JavaScript for Change Slide to gallery------------------------------------------>
<script>
  window.onload = function() {change()};
function change() {
 var check = document.getElementById("chk2");
  var row = document.getElementById("row");
  var nodelist = row.getElementsByTagName("DIV");
  var column = document.getElementById("row").querySelectorAll(".col-sm");
 

  if (nodelist.length > 3) {
    for (var i = 0; i < nodelist.length; i++) {
    column[i].className = "col-sm-4";
    if(i>=3){

   column[i].style.display = "none";
   check.style.display = "block";
      }else{
        column[i].style.display = "block";
   check.style.display = "none";
      }

    }
    
    
   
  } else {
    check.style.display = "none";
    column.className = "col-sm";
  } 

}

</script>



<script>

function change1(){
  
var check = document.getElementById("chk2");
  var row = document.getElementById("row2");
  var nodelist = row.getElementsByTagName("DIV");
  var column = document.getElementById("row2").querySelectorAll(".col-sm");
  var youtube1 = document.getElementById("youtube1");
var youtube2 = document.getElementById("youtube2");
if(check.checked){
  youtube1.style.display = "none";
  youtube2.style.display = "block";
  
  }else{
    youtube1.style.display = "block";
  youtube2.style.display = "none";
  }
}

</script>

  <!-------------------------------------------------------------------------------->

 




<!--Picture Activity------------------------------------------------------------------------------>
<div class="container">
  <h2 style="background-color: #96deda;">ຮູບພາບການເຄື່ອນໄຫວວຽກງານຕ່າງໆ</h2>
 

  <input type="checkbox" id="chk" onclick="showhide()">
    <section>
      
        <div class="row">
          <div class="col-md-12">

          <marquee behavior="ALTERNATE" scrolldelay="200" id="marqueeimage">
           @foreach($dataforimageactivity as $items)
            <img src="uploads\image_imageactivity\{{$items->image_imageactivity}}" id="imgmarquee">
            @endforeach
        </marquee>

                    <div class="galleryimage" id="galleryimage">
                  @foreach($dataforimageactivity as $items)
                  <img src="uploads\image_imageactivity\{{$items->image_imageactivity}}" id="imgmarquees">
                  @endforeach
        
                  </div>

          </div>
        </div>

    </section>

</div>

<!--JavaScript for Change Slide to gallery------------------------------------------>
<script>
function showhide() {
  var checkbox = document.getElementById("chk");
  var galleryimage = document.getElementById("galleryimage");
  var marqueeimage = document.getElementById("marqueeimage");
  
  if (checkbox.checked) {
    galleryimage.style.display = "block";
    galleryimage.style.overflow = "scroll";
    galleryimage.style.height = "400px";
    marqueeimage.style.display = "none";
  } else {
    galleryimage.style.display = "none";
  
    marqueeimage.style.display = "block";
  }
}
</script>


<!-------------------------------------------------------------------------------->

<!---Map----------------------------------------------------------------------------->
<div class="container">
  <h2 style="background-color: #96deda;">ແຜນທີ່</h2>
	<div class="row-fluid">
        <div class="span8">

        
        
          
          <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" 
          marginwidth="0" src="{{$dataformap->link_map}}">
        </iframe>
      
      
    	</div>
    </div>
</div>
<!-------------------------------------------------------------------------------->

@endsection