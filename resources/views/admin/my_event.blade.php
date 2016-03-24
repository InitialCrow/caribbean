@extends('layouts.master')

@section('content')
    @parent
    <div class="wrapper">
        <h2 class="center"> {{$admins[0]->name}}</h2>
        <section class="delay center margin-bottom-50">
            <div id="getting-started"></div>
        </section>
        <section class="presentation col-md-6">
            <h2>Présentation</h2>
            <p>{{$presentation[0]->text}}</p>
        </section>
        <section class="gallery col-md-6">
            <h2>Gallery</h2>
            <ul>
                @forelse($gallery as $picture)
                <li>
                    <p><a href="{{url('uploads/admins_'.$admins[0]->name.'/gallery',$picture->image_uri)}}" data-lightbox="image"><img class="img-rounded" src="{{url('uploads/admins_'.$admins[0]->name.'/gallery',$picture->image_uri)}}" alt=""></a></p></li>
                @empty
                    <p>There are no users yet!</p>
                @endforelse
            </ul>
        </section>
        <section class="planning col-md-6">
            <h2>Déroulement</h2>
            <ul>
            @forelse($todoListConvert as $todo)

                <li>{{$todo['todo']}}</li>
            @empty
                <p>deroulement non planifé!</p>
            @endforelse
            </ul>
        </section>
        <section class="actu col-md-6">
        <h2>Actualités : </h2>
           @forelse($contentBlogs as $contentBlog)

            @if ($contentBlog->image_uri !== null)
                    <div class="col-lg-4">
                        <h3>{{$contentBlog->title_html}}</h3>
                        <p>
                        <img class="img-responsive img-rounded" src="{{url('uploads/admins_'.$admins[0]->name.'/content_blog_img', $contentBlog->image_uri)}}">
                    </p>
                        <p>{{$contentBlog->text}}</p>
                        <p><a class="btn btn-default" href="#" role="button">Comment</a></p>
                        <hr/>
                    </div>
                @endif

            @empty
            @endforelse
            
        </section>
        <section class="comment wrapper">
            <h2>Commentaires</h2>
            <ul>
                <li>
                    <h4>Name</h4>
                    <p>texte texte</p>
                </li>
            </ul>
            <div>
                <textarea name="comment" id="coment" cols="30" rows="10" class="form-control" placeholder="Ecriver votre commentaire..."></textarea>
                <br/>
                <input type="submit" value="envoyer" class="btn btn-default"/>
            </div>
        </section>
    </div>

@stop
@section('content')
@stop