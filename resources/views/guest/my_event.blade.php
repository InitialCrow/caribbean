@extends('layouts.master')

@section('content')
    @parent
    <div class="wrapper">
        <p>bienvenue {{$guest->name}}</p>
        <h2> mariage de {{$admin->name}}</h2>
        <section class="delay">
            <div id="getting-started"></div>
        </section>
        <section class="presentation">
            <h2>Présentation</h2>
            <p>{{$presentation->text}}</p>
        </section>
        <section class="gallery">
            <h2>Gallery</h2>
            <ul>
                @forelse($gallery as $picture)
                <li>
                    <p><a href="{{url('uploads/admins_'.$admin->name.'/gallery',$picture->image_uri)}}" data-lightbox="image"><img src="{{url('uploads/admins_'.$admin->name.'/gallery',$picture->image_uri)}}" alt=""></a></p></li>
                @empty
                    <p>There are no users yet!</p>
                @endforelse
            </ul>
        </section>
        <section class="planning">
            <h2>Déroulement</h2>
            <ul>
            @forelse($todoListConvert as $todo)

                <li>{{$todo['todo']}}</li>
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
                <p>
                    <img src="{{url('uploads/admins_'.$admin->name.'/content_blog_img', $contentBlog->image_uri)}}">
                </p>
            @endif
            @empty
                <p>There are no users yet!</p>
            @endforelse
            
        </section>
        <section class="comment">
            <h2>Commentaires</h2>
            <ul>
               
                       @forelse($comments as $comment)
                            <li>
                        <h3>name : {{$comment->name}}</h3>
                        <p>{{$comment->text}}</p>
                        @if (!empty($comment->image_uri))
                            <p>
                                <img src="{{url('uploads/admins_'.$admin->name.'/comments', $comment->image_uri)}}">
                            </p>
                        @endif
                        @empty
                            <p>pas encore de commentaire</p>
                            </li>
                        @endforelse
                
            </ul>
             <form action="{{url('my_event/'.$admin->url.'/guest/'.$guest->token.'/comment')}}" method="post" enctype="multipart/form-data" >
            <div>
                <textarea name="comment" id="coment" cols="30" rows="10"></textarea>
                <input type="file" name="comment_image"></input>
                <input type="submit" value="envoyer"/>
            </div>
            {{@csrf_field()}}
            </form>
        </section>
    </div>

@stop
@section('content')
@stop