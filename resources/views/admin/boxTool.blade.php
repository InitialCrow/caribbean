@extends('layouts.master')

@section('content')
    @parent
            <section class="boxTool">
            <h1>BoxTool</h1>
            @forelse($paths as $index => $path)
	

                <p>voir le fichier :<a href="{{url('uploads/'.$path)}}" >{{$names[$index]}}</a></p>
                <a href="{{url('uploads/'.$path)}}" download="{{$names[$index]}}">telecharger</a>
            
               @empty
               <p>pas encore de fichier partager</p>
               @endforelse
            </section>
        </div>
    </section>
@stop