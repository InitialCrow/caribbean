@extends('layouts.master')

@section('content')
    @parent
    <section class="evenement">
        <div class="wrapper">
            <h1 class="center">Evenement</h1>
            <h2 class="center">blablablablablabla</h2>
            <section class="event-infos event">
                <h2>Presentation du service</h2>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                    Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                    Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
            </section>
            <section class="event-login event">
                <h2>Connection</h2>
                <form action="{{url('my_event/check')}}" method="post">
                    <div>
                        <label for="name">Identifiant:</label>
                        <input type="text" name="name" id="name" value="" tabindex="1" />
                    </div>
                    {{@csrf_field()}}
                </form>
            </section>
        </div>
    </section>
@stop
@section('content')
@stop