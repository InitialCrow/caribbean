@extends('layouts.master')

@section('content')
@parent
<div class="wrapper">

    <h2 class="center"> {{$admin->name}}</h2>
    <section class="delay center margin-bottom-50">


        <div id="getting-started"></div>
    </section>
    <section class="presentation col-md-6">
        <h2>Présentation</h2>
        <p>{{$presentation->text}}</p>
    </section>
    <section class="gallery col-md-6">
        <h2>Gallerie</h2>
        <ul>
            @forelse($gallery as $picture)
            <li>
            <p><a href="{{url('uploads/admins_'.$admin->name.'/gallery',$picture->image_uri)}}" data-lightbox="image"><img class="img-rounded" src="{{url('uploads/admins_'.$admin->name.'/gallery',$picture->image_uri)}}" alt=""></a></p></li>
            @empty
            <p>Il n'y a pas encore de gallerie</p>
            @endforelse
        </ul>
    </section>
    <section class="planning col-md-6">
        <h2>Déroulement</h2>
        <ul>
            @forelse($todoListConvert as $todo)

            <li>{{$todo['todo']}}</li>
            @empty
            <p>Il n'y a pas encore de déroulement planifié</p>
            @endforelse
        </ul>
    </section>
    <section class="actu col-md-6">
        <h2>Actualités : </h2>
        @forelse($contentBlogs as $contentBlog)

        
        <div class="col-lg-4">
            <h3>{{$contentBlog->title_html}}</h3>
            @if ($contentBlog->image_uri !== null)
            <p>
                <img class="img-responsive img-rounded" src="{{url('uploads/admins_'.$admin->name.'/content_blog_img', $contentBlog->image_uri)}}">
            </p>
            @endif
            
            <p>{{$contentBlog->text}}</p>
            <p><a class="btn btn-default" href="#" role="button">Commenter</a></p>
            <hr/>
        </div>
        
        @empty
        <p>Il n'y a pas encore d'actualités</p>
        @endforelse
    </section>
    <section class="comment actu col-md-12">
        <h2>Commentaires</h2>
        <ul>

            @forelse($comments as $comment)
            <li>
                <h3>{{$comment->name}}</h3>
                <p>{{$comment->text}}</p>
                @if (!empty($comment->image_uri))
                <p>
                    <img src="{{url('uploads/admins_'.$admin->name.'/comments', $comment->image_uri)}}">
                </p>
                @endif
                @empty
                <p>Il n'y a pas encore de commentaires</p>
            </li>
            @endforelse
        </ul>
        <form action="{{url('my_event/'.$admin->url.'/guest/'.$guest->token.'/comment')}}" method="post" enctype="multipart/form-data" >
            <div>
                <textarea name="comment" id="coment" cols="30" rows="10" class="form-control" placeholder="Ecriver votre commentaire..."></textarea>
                <br/>
                <input type="file" name="comment_image">
                <input type="submit" value="Envoyer" class="btn btn-default"/>
            </div>
            {{@csrf_field()}}
        </form>
    </section>
</div>

@stop
@section('content')
@stop