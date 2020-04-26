<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Blog;
use App\Brochure;
use App\Imageactivity;
use App\Map;
use App\Youtube;
use App\Slider;
class ShowIndexController extends Controller
{
   public function showblog(){
        $dataforblog = Blog::
            orderBy('id_blog','desc')->paginate(3);
           

            $dataforbrochure = Brochure::
                orderBy('id_brochure','desc')->get();


                $dataforimageactivity = Imageactivity::
                    orderBy('id_imageactivity','desc')->get();

                    $dataforyoutube = Youtube::
                        orderBy('id_youtube','desc')->get();

                        $dataformap = Map::orderBy('id_map', 'desc')->first();

                            $dataforslider = Slider::
                                orderBy('id_slider','asc')->get();
                return view('main',['dataforbrochure'=>$dataforbrochure,'dataforblog'=>$dataforblog,'dataforimageactivity'=>$dataforimageactivity,'dataforyoutube'=>$dataforyoutube,'dataformap'=>$dataformap,'dataforslider'=>$dataforslider]);
    } 


    public function showslider(){
        $dataforblog = Blog::
            orderBy('id_blog','asc')->paginate(3);

                            $dataforslider = Slider::
                                orderBy('id_slider','asc')->get();
                return view('readmore',['dataforslider'=>$dataforslider,'dataforblog'=>$dataforblog]);
    }   
    

  
}
