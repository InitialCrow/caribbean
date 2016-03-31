@extends('layouts.master')

@section('content')
    @parent
    <section class="">
        <div class="wrapper">
            <h1 class="center">Panneau Clients</h1>
        <table class="table table-striped">
            <a class="btn btn-default btn-lg" href="{{url('superUser','admin')}}">Ajouter un admin</a>

            
            <thead>
                <tr>
                        <th><label for="log">Identifiant</label></th>
                        <th><label for="name">nom des mariées</label></th>
                        <th><label for="token">Lien</label></th>
                        <th><label>Copy</label></th>
                        <th><label for="file">Fichier</label></th>
                </tr>
            </thead>
            <tbody>
            @forelse($admins as $admin)
                <tr class="admin">
                        <td>{{$admin->login}}</td>
                        <td>{{$admin->name}}</td>
                        <td>
                            <p>localhost:8000/my_event/{{$admin->url}}</p>
                        </td>
                            <td>
                                <button class="clip" data-clipboard-target>
                                    <img src="{{url('assets/images/clippy.svg')}}" class="copy-clip" alt="Copy to clipboard">
                                </button>
                            </td>
                        
                        <td>
                                <form class ="saveFile" action="{{url('superUser/save-file', $admin->id)}}" enctype="multipart/form-data" method="post">
                                    <input class="file" type="file" name="files[]" multiple/>

                                    {{csrf_field()}}
                                </form>
                        </td>
                        <td>
                                <form action="{{url('superUser/remove-admin', $admin->id)}}" method="get">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <td><input type="submit" value="supprimer"/></td>
                                </form>
                        </td>
                @empty
                    <p>pas de mariées</p>
                @endforelse
            </table>
        </div>
    </section>

@stop
