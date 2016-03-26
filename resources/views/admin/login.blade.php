@extends('layouts.master')

@section('content')
    @parent
            <section class="event-login">
            <h1>Connexion à mon évenement</h1>
                <form action="{{url('my_event/check')}}" method="post">
                    <div>
                        <label for="name">Identifiant:</label>
                        <input type="text" name="name" id="name" value="" tabindex="1" />
                    </div>
                    {{@csrf_field()}}
                </form>
            </section>
@stop

