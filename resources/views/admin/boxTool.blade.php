@extends('layouts.master')

@section('content')
    @parent
            <section class="boxTool wrapper">
                <h1>Fichiers</h1>
                <table class="table">
                    <tr>
                        @forelse($paths as $index => $path)
                            <td><p>Voir le fichier :<a href="{{url('uploads/'.$path)}}" >{{$names[$index]}}</a></p></td>
                            <td><a href="{{url('uploads/'.$path)}}" download="{{$names[$index]}}">Télécharger</a></td>
                    </tr>
                @empty
                        <p>Il n'y a pas encore de fichier partagés</p>
                    @endforelse
                </table>
            </section>

@stop