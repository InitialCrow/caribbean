@extends('layouts.master')

@section('content')
    @parent
    <section class="form-add-admin wrapper">
        <h1 class="center">Création d'un compte pour les mariés</h1>
        <form action="{{url('superUser/add-admin')}}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Identifiant</label>
                <p>Rentrer ici, l'identifiant que vous souhaitez donner aux mariés (N° de dossier)</p>
                <input type="text" name="login" id="log" class="form-control" placeholder="Identifiant">
            </div>
            <div class="form-group">
                <label for="">Nom des mariés</label>
                <p>Rentrer ici, le prénom des mariés (ex : Micheleline et Robert)</p>
                <input type="text" name="name" id="name" class="form-control" id="" placeholder="Noms des mariés ex : Micheleline et Robert">
            </div>
            <div class="form-group">
                <label for="">envoyée des fichiers aux mariées</label>     
                    <input  type="file" name="files[]" multiple/>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
                {{@csrf_field()}}
        </form>
    </section>
@stop

