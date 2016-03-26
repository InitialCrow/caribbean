@extends('layouts.master')

@section('content')
    @parent
    <section class="form-add-admin wrapper">
        <h1 class="center">Création d'un compte pour les mariés</h1>
        <form>
            <div class="form-group">
                <label for="">Identifiant</label>
                <p>Rentrer ici, l'identifiant que vous souhaitez donner aux mariés (N° de dossier)</p>
                <input type="text" class="form-control" id="" placeholder="Identifiant">
            </div>
            <div class="form-group">
                <label for="">Nom des mariés</label>
                <p>Rentrer ici, le nom et prénom des mariés</p>
                <input type="text" class="form-control" id="" placeholder="Noms des mariés">
            </div>
            <div class="form-group">
                <label for="">Lien du site des mariés</label>
                <p>http://mondomaine/my_event/</p>
                    <button class="btn" data-clipboard-target>
                        <img src="{{url('assets/images/clippy.svg')}}" class="copy-clip" alt="Copy to clipboard">
            </div>
            <div class="form-group">
                <form class ="saveFile" action="" enctype="multipart/form-data" method="post">
                    <input class="file" type="file" name="file"/>
                    {{csrf_field()}}
                </form>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
                {{@csrf_field()}}
        </form>
    </section>
@stop

