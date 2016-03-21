@extends('layouts.master')

@section('content')
    @parent
    <section class="">
        <div class="wrapper">
            <h1 class="center">Panneau Clients</h1>
        <table>
            <thead>
                <tr>
                        <th><label for="log">Identifiant</label></th>
                        <th><label for="name">nom des mariées</label></th>
                        <th><label for="token">Lien</label></th>
                        <th>Fichier</th>
                </tr>
            </thead>
            <tbody>
            @forelse($admins as $admin)
                <tr>

                        <td>{{$admin->login}}</td>
                        <td>{{$admin->name}}</td>
                        <td> http://mondomaine/my_event/{{$admin->url}} </td>
                        <td><input type="file"/></td>
                        <form action="{{url('superUser/remove-admin', $admin->id)}}" method="get">
                                {{method_field('DELETE')}}
                                {{csrf_field()}}
                                <td><input type="submit" value="supprimer"/></td>
                        </form>
                </tr>
            @empty
                <p>No users</p>
            @endforelse
                <form action="{{url('superUser/add-admin')}}" method="post">

                    
                    <tr>
                        <td><input type="text" name="login" id="log" value="" tabindex="1" /></td>
                        <td><input type="text" name="name" id="name" value="" tabindex="1" /></td>
                        <td><input type="file"/></td>
                        <td><input type="submit" value="Enregistrer" /></td>
                        
                    </tr>
                    {{@csrf_field()}}
                </form>

             </tbody>
        </table>
        </div>
    </section>

@stop
@section('content')
@stop