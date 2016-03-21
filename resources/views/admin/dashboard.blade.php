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