@extends('frontend/layouts/based')
@section('title')
    Gallery
@endsection


@section('content')
<section class="gallery-section">
    <div class="gallery-page">
        <div class="gallery-content">
           <div class="gallery-img">
            <img src="{{ asset("img/2014-06-25_AOF_12406_RGB.jpg") }}" alt="">
           </div>
           <div class="gallery-info">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nam commodi quia eveniet ducimus perspiciatis at consequatur doloribus qui hic aliquam fugiat quam soluta, obcaecati esse sint alias tempora architecto?</p>
           </div>
        </div>

        <div class="gallery-content">
            <div class="gallery-img">
             <img src="{{ asset("img/2014-06-25_AOF_12406_RGB.jpg") }}" alt="">
            </div>
            <div class="gallery-info">
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nam commodi quia eveniet ducimus perspiciatis at consequatur doloribus qui hic aliquam fugiat quam soluta, obcaecati esse sint alias tempora architecto?</p>
            </div>
         </div>

         <div class="gallery-content">
            <div class="gallery-img">
             <img src="{{ asset("img/2014-06-25_AOF_12406_RGB.jpg") }}" alt="">
            </div>
            <div class="gallery-info">
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nam commodi quia eveniet ducimus perspiciatis at consequatur doloribus qui hic aliquam fugiat quam soluta, obcaecati esse sint alias tempora architecto?</p>
            </div>
         </div>

         <div class="gallery-content">
            <div class="gallery-img">
             <img src="{{ asset("img/2014-06-25_AOF_12406_RGB.jpg") }}" alt="">
            </div>
            <div class="gallery-info">
             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque nam commodi quia eveniet ducimus perspiciatis at consequatur doloribus qui hic aliquam fugiat quam soluta, obcaecati esse sint alias tempora architecto?</p>
            </div>
         </div>
    </div>
</section>
@endsection
