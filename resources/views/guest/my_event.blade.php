@extends('layouts.master')

@section('content')
@parent
<div class="wrapper">

    <h2 class="center"> {{$admin->name}}</h2>
    <section class="delay center margin-bottom-50">


        @if($admin->timer !== null)
        <div id="getting-started" data-time="{{$admin->timer}}"></div>
        @else
        <p>la date de mariage n'est pas planifié</p>
        @endif
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
    <section class="presence col-md-6">
        <h2>Liste des invités</h2>
        <ul>
            <h3> Présent :</h3>
            @forelse($guests as $guest)
                @if($guest->status === 1)
                <li>{{$guest->name}}</li>
                @endif
            @empty
            <p>il n'y a encore personne de present au mariage</p>
            @endforelse

        </ul>
        <ul>
            <h3> Pas Présent :</h3>
            @forelse($guests as $guest)
                @if($guest->status === 0)
                <li>{{$guest->name}}</li>
                @endif
            @empty
            <p>il n'y a personne qui manquera votre mariage</p>
            @endforelse
        </ul>
    </section>
    <section class="actu col-md-12">
        <h2>Actualités : </h2>
        @forelse($contentBlogs as $index => $contentBlog)

        
        <div class="col-md-12 ">
                <h3>{{$contentBlogs[$index]->title_html}}</h3>
                <p>{{$contentBlogs[$index]->text}}</p>
                @if ($contentBlogs[$index]->image_uri !== null)
                <p>
                    <img class="img-responsive img-rounded" src="{{url('uploads/admins_'.$admin->name.'/content_blog_img', $contentBlogs[$index]->image_uri)}}">
                </p>
                @endif
                <section class="comment actu col-md-12">
                @if(!empty($comments[$index]))
                    <ul>
                    @foreach($comments as $comment)
                    
                        @if($comment->content_blog_id === $contentBlogs[$index]->id)
                    
                        
                        
                        <li>
                            <h3>{{$comment->name}} : </h3>
                            <p>{{$comment->text}}</p>
                            @if (!empty($comment->image_uri))
                            <p>
                                <img src="{{url('uploads/admins_'.$admin->name.'/comments', $comment->image_uri)}}">
                            </p>
                            @endif
                        
                        </li>
                    
                    
                        @endif
                    @endforeach
                    @else
                    </ul>
                @endif
                <form action="{{url('my_event/'.$admin->url.'/guest/'.$guest->token.'/comment/'.$contentBlogs[$index]->id)}}" method="post" enctype="multipart/form-data" >
                        <div>
                            <textarea name="comment" id="coment" cols="10" rows="5" class="form-control col-xs-6" placeholder="Ecriver votre commentaire..."></textarea>
                            <br/>
                            <input type="file" name="comment_image"></input>
                            <input type="submit" value="envoyer" class="btn btn-default"/>
                        </div>
                        {{@csrf_field()}}
                </form>
                
                </section>
        </div>
        
            
        <hr/>
        

        @empty
        <p>Il n'y a pas encore d'actualités</p>
        @endforelse
        
    </section>
    <section class="addActu  col-md-12">
            <h2>Ajouter une Actu : </h2>
            <form action="{{url('my_event/'.$admin->url.'/guest/'.$guest->token.'/add_actu')}}" method="post" enctype="multipart/form-data" >
                <input type="text" name="titre_actu" placeholder="titre de votre actualité" class="form-control">
                <br/>
                <textarea name="text_actu" id="text_actu" cols="30" class="form-control" rows="10" placeholder="Ecriver vos actualités..."></textarea>
                <input type="file" name="actu_image" size="40">
                <button type="submit" class="btn btn-lg btn-primary">Envoyer</button>
                {{@csrf_field()}}
            </form>
        </section>
</div>

@stop
@section('content')
@stop