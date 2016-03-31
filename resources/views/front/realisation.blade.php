@extends('layouts.master')

@section('content')
    @parent
    <section class="realisation wrapper">
        <div class="col-md-6 photo">
            <div class="hover"><h3 class="edwardianScriptITC">Cérémonie</h3></div>
                <a href="{{url('../assets/images/big-gallery-img-01.jpg')}}" data-lightbox="image">
                    <img class="" src="{{url('../assets/images/gallery-img-01.jpg')}}" alt="">
                </a>
        </div>

        <div class="col-md-6 photo">
            <div class="hover"><h3 class="edwardianScriptITC">Cérémonie</h3></div>
            <p><a href="{{url('../assets/images/big-gallery-img-02.jpg')}}" data-lightbox="image">
                    <img class="" src="{{url('../assets/images/gallery-img-02.jpg')}}" alt=""></a></p>
        </div>

        <div class="col-md-6 photo">
            <div class="hover"><h3 class="edwardianScriptITC">Cérémonie</h3></div>
            <p><a href="{{url('../assets/images/big-gallery-img-03.jpg')}}" data-lightbox="image">
                    <img class="" src="{{url('../assets/images/gallery-img-03.jpg')}}" alt=""></a></p>
        </div>

        <div class="col-md-6 photo">
            <div class="hover"><h3 class="edwardianScriptITC">Cérémonie</h3></div>
            <p><a href="{{url('../assets/images/big-gallery-img-04.jpg')}}" data-lightbox="image">
                    <img class="" src="{{url('../assets/images/gallery-img-04.jpg')}}" alt=""></a></p>
        </div>

        <div class="col-md-6 photo">
            <div class="hover"><h3 class="edwardianScriptITC">Cérémonie</h3></div>
            <p><a href="{{url('../assets/images/big-gallery-img-05.jpg')}}" data-lightbox="image">
                    <img class="" src="{{url('../assets/images/gallery-img-05.jpg')}}" alt=""></a></p>
        </div>

        <div class="col-md-6 photo">
            <div class="hover"><h3 class="edwardianScriptITC">Cérémonie</h3></div>
            <p><a href="{{url('../assets/images/big-gallery-img-06.jpg')}}" data-lightbox="image">
                    <img class="" src="{{url('../assets/images/gallery-img-06.jpg')}}" alt=""></a></p>
        </div>
    </section>
@stop
@section('content')
@stop