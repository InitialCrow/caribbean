@extends('layouts.master')

@section('content')
    @parent
    <div class="wrapper">
        <section class="delay">compte à rebours</section>
        <section class="presentation">
            <h2>Présentation</h2>
            <p>Zone de présentation</p>
        </section>
        <section class="gallery">
            <h2>Gallery</h2>
            <ul>
            </ul>
        </section>
        <section class="planning">
            <h2>Déroulement</h2>
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </section>
        <section class="actu">
            <h2>Actualités : </h2>
            <h3>{{$contentBlogs[0]->title_html}}</h3>
            <p>{{$contentBlogs[0]->text}}</p>
            <img src="{{url('uploads/admins_'.$admins[0]->name.'/content_blog_img', $contentBlogs[0]->image_uri)}}">
        </section>
        <section class="comment">
            <h2>Commentaires</h2>
            <ul>
                <li>
                    <h4>Name</h4>
                    <p>texte texte</p>
                </li>
            </ul>
            <div>
                <textarea name="comment" id="coment" cols="30" rows="10"></textarea>
                <input type="submit" value="envoyer"/>
            </div>
        </section>
    </div>
@stop
@section('content')
@stop