@extends('layouts.master')

@section('content')
    @parent
    <div class="wrapper">
        <h2> mariage de {{$admins[0]->name}}</h2>
        <section class="delay">compte à rebours</section>
        <section class="presentation">
            <h2>Présentation</h2>
            <p>{{$presentation['presentation_text']}}</p>
        </section>
        <section class="gallery">
            <h2>Gallery</h2>
            <ul>
                @forelse($gallery as $picture)
                <li><img src="{{url('uploads/admins_'.$admins[0]->name.'/gallery',$picture->image_uri)}}" alt=""></li>
                @empty
                    <p>There are no users yet!</p>
                @endforelse
            </ul>
        </section>
        <section class="planning">
            <h2>Déroulement</h2>
            <ul>
            @forelse($todoList as $todo)
                <li>{{$todo->todo}}</li>
            @empty
                <p>deroulement non planifé!</p>
            @endforelse
            </ul>
        </section>
        <section class="actu">
        <h2>Actualités : </h2>
           @forelse($contentBlogs as $contentBlog)
            <h3>{{$contentBlog->title_html}}</h3>
            <p>{{$contentBlog->text}}</p>
            @if ($contentBlog->image_uri !== null)
            <img src="{{url('uploads/admins_'.$admins[0]->name.'/content_blog_img', $contentBlog->image_uri)}}">
            @endif
            @empty
                <p>There are no users yet!</p>
            @endforelse
            
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