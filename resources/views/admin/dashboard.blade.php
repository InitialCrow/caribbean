@extends('layouts.master')
@include('partials.adminNav')
@section('content')
    @parent
        <div class="wrapper">
            <h2>bienvenue {{$admin->name}} vous pouvez modifié votre page ici</h2>
        </div>
          <div class="wrapper">
        <h2> mariage de {{$admin->name}}</h2>
        <section class="delay">compte à rebours</section>
        <form action="{{url('my_event/'.$adminToken,'change')}}" method="post" enctype="multipart/form-data" >
        
            <section class="presentation">
                <h2>Présentation</h2>
                @if(!empty($presentation))
                <textarea name="presentation" id="presentation" cols="30" rows="10">{{$presentation->text}}</textarea>

                
                @else
                <textarea name="presentation" id="presentation" cols="30" rows="10" placeholder="entrez une bref présentation"></textarea>
               
                @endif
            </section>
            <section class="gallery">
                <h2>Gallery</h2>
                <ul>
                @forelse($gallery as $picture)
                <li><img src="{{url('uploads/admins_'.$admin->name.'/gallery',$picture->image_uri)}}" alt=""></li><input class="delete" type="submit" value="x" data="{{$picture->id}}" data-type="gallery" name="delete">
 
                @empty
                    <p>pas encore d'image dans la gallerie!</p>
                @endforelse
                <input type="file" name="gallery_image" size="40">
                </ul>
            </section>
            <section class="planning">
                <h2>Déroulement</h2>
                <ul>
                    @forelse($todoListConvert as $todo)

                    <li>{{$todo['todo']}}</li><input class="delete" type="submit" value="x" data="{{$todo['id']}}" data-type="todoList" name="delete">
                    @empty
                        <p>deroulement non planifé!</p>
                    @endforelse
                    <input class ="todo" type="text" name="todolist[1]list" placeholder="liste des chose à faire">
                </ul>
                <input class="addButton" type="button" value="+">
            </section>
            <section class="actu">
                <h2>Actualités : </h2>
                @if($contentBlogs !== null)
                    @foreach($contentBlogs as $contentBlog)
                        <h3>{{$contentBlog->title_html}}</h3><input class="delete" type="submit" value="x" data="{{$contentBlog->id}}" data-type="contentBlog" name="delete">
                        <p>{{$contentBlog->text}}</p>
                        @if ($contentBlog->image_uri !== null)
                        <img src="{{url('uploads/admins_'.$admin->name.'/content_blog_img', $contentBlog->image_uri)}}">
                        @else
                        <p>There are no image yet!</p>
                        @endif
                    @endforeach
                    @else
                    <p>There are no content!</p>
                @endif
                <input type="text" name="titre_actu" placeholder="titre de votre actualité">
                <textarea name="text_actu" id="text_actu" cols="30" rows="10" placeholder="text de votre actualité"></textarea>
                <input type="file" name="actu_image" size="40">
                <input type="submit" value="envoyer"/>
            </section>
            {{@csrf_field()}}
        </form>
         <section class="comment">
            <h2>Commentaires</h2>
            <ul>
               
                       @forelse($comments as $comment)
                       <input class="delete" type="submit" value="x" data="{{$comment->id}}" data-type="comment" name="delete">
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
        </section>
        <section class="guest">
        <h2>invité des personnes à l'evenement</h2>
            <form action="{{url('my_event/'.$admin->url.'/send')}}" method ="post">
                <label for="email">email:</label>
                <input type="email" name="email">
                <input type="submit">
                {{@csrf_field()}}
            </form>
            
        </section>

@stop
@section('content')
@stop