@extends('layouts.app')
@section('content')

 <!--==============================content================================-->
 <section id="content">
    <div class="container_12">
      <div class="grid_12">
        <div class="slider">
          <ul class="items">
            <li><img src="{{asset('/static/images/slider-1.jpg')}}" alt="">
              <div class="banner">
                <p class="font-1">Special<span>Program</span></p>
                <p class="font-2">Become a Member and get trained by the best fitness trainers. Also, there is a promo going on.</p>
                <a href="#">Register</a> </div>
            </li>
            <li><img src="{{asset('/static/images/slider-2.jpg')}}" alt="">
              <div class="banner">
                <p class="font-1">Get Free<span>Training</span></p>
                <p class="font-2">Become a Member and get trained by the best fitness trainers. Also, there is a promo going on.</p>
                <a href="#">Register</a> </div>
            </li>
            <li><img src="{{asset('/static/images/slider-3.jpg')}}" alt="">
              <div class="banner">
                <p class="font-1">Join<span>our team</span></p>
                <p class="font-2">Become a Member and get trained by the best fitness trainers. Also, there is a promo going on.</p>
                <a href="#">Register</a> </div>
            </li>
          </ul>
          <div class="pagination">
            <ul>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
            </ul>
          </div>
        </div>
      </div>

@endsection