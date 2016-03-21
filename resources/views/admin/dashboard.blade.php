@extends('layouts.master')

@section('content')
    @parent
        <div class="wrapper">
            <h2>bienvenue {{$admins[0]->name}} vous pouvez modifié votre page ici</h2>
        </div>
          <div class="wrapper">
        <h2> mariage de {{$admins[0]->name}}</h2>
        <section class="delay">compte à rebours</section>
        <form action="{{url('my_event/'.$adminToken,'change')}}" method="post" enctype="multipart/form-data" >
<<<<<<< HEAD

                            <section class="presentation">
                                <h2>Présentation</h2>
                                <textarea name="presentation" id="presentation" cols="30" rows="10" placeholder="entrer une bref prhase d'acceuil"></textarea>
                            </section>
                            <section class="gallery">
                                <h2>Gallery</h2>
                                <ul>
                                <input type="file" name="gallery_image" size="40">
                                </ul>
                            </section>
                            <section class="planning">
                                <h2>Déroulement</h2>
                                <ul>
                                    <input class ="todo" type="text" name="todolist[1]list" placeholder="liste des chose à faire">
                                </ul>
                                <input class="addButton" type="button" value="+">
                            </section>
                            <section class="actu">
                                <h2>Actualités : </h2>
                                <input type="text" name="titre_actu" placeholder="titre de votre actualité">
                                <textarea name="text_actu" id="text_actu" cols="30" rows="10" placeholder="text de votre actualité"></textarea>
                                <input type="file" name="actu_image" size="40">
                                <input type="submit" value="envoyer"/>
                            </section>
                            {{@csrf_field()}}
=======
        
            <section class="presentation">
                <h2>Présentation</h2>
                @if(!empty($presentation))
                <textarea name="presentation" id="presentation" cols="30" rows="10">{{$presentation['presentation_text']}}</textarea>

                
                @else
                <textarea name="presentation" id="presentation" cols="30" rows="10" placeholder="entrez une bref présentation"></textarea>
               
                @endif
            </section>
            <section class="gallery">
                <h2>Gallery</h2>
                <ul>
                @forelse($gallery as $picture)
                <li><img src="{{url('uploads/admins_'.$admins[0]->name.'/gallery',$picture->image_uri)}}" alt=""></li><input class="delete" type="submit" value="x" data="{{$picture->id}}" data-type="gallery" name="delete">
 
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
                        <img src="{{url('uploads/admins_'.$admins[0]->name.'/content_blog_img', $contentBlog->image_uri)}}">
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
>>>>>>> 0439867a6ac7a110d1807cc5659b6dcf05a82b55
        </form>
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
    </section>

@stop
@section('content')
@stop