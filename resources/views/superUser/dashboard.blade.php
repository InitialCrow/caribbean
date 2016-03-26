@extends('layouts.master')

@section('content')
    @parent
    <section class="">
        <div class="wrapper">
            <h1 class="center">Panneau Clients</h1>
        <table class="table table-striped">
            <button  class="btn-default btn-lg add_admin_btn">Ajouter un admin</button>
            
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
             <tr class='hidden_add_admin add_admin_form'>
                        <form  action="{{url('superUser/add-admin')}}" method="post" enctype="multipart/form-data">
                            <td><input type="text" name="login" id="log" value="" tabindex="1" /></td>
                            <td><input type="text" name="name" id="name" value="" tabindex="1" /></td>
                            <td><input class="file" type="file" name="file"/></td>
                            <td><input type="submit" value="Enregistrer" /></td>
                            {{@csrf_field()}}
                        </form>
            </tr>
            @forelse($admins as $admin)
                <tr class="admin">
                        <td>{{$admin->login}}</td>
                        <td>{{$admin->name}}</td>
                        <td>
                            <p>http://mondomaine/my_event/{{$admin->url}}</p>
                        </td>
                            <td>
                                <button class="btn" data-clipboard-target>
                                    <img src="{{url('assets/images/clippy.svg')}}" class="copy-clip" alt="Copy to clipboard">
                                </button>
                            </td>
                        
                        <td>
                                <form class ="saveFile" action="{{url('superUser/save-file', $admin->id)}}" enctype="multipart/form-data" method="post">
                                    <input class="file" type="file" name="file"/>

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
                    <p>No users</p>
                @endforelse
                   
            </table>
        </div>
    </section>

@stop
