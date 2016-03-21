@extends('layouts.master')

@section('content')
    @parent
            <section class="event-login wrapper">
            <h1 class="center">Connexion au panneau d'administration</h1>
                <form action="{{url('superUser/check')}}" method="post" class="center">
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
                    {{@csrf_field()}}
                </form>
            </section>
        </div>
    </section>
@stop

