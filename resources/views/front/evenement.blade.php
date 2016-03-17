@extends('layouts.master')

@section('content')
    @parent
    <section class="event">
        <div class="wrapper">
            <h1>Evenement</h1>
            <h2>blablablablablabla</h2>
            <section class="event-infos">

            </section>
            <section class="event-login">
                <form action="#" method="post">
                    <div>
                        <label for="name">Identifiant:</label>
                        <input type="text" name="name" id="name" value="" tabindex="1" />
                    </div>
                    <div>
                        <label for="name">Mot de passe:</label>
                        <input type="password" name="password" id="password" value="" tabindex="1" />
                    </div>
                    <div>
                        <input type="submit" value="Submit" />
                    </div>
                </form>
            </section>
        </div>
    </section>
@stop
@section('content')
@stop