@extends('layouts.master')

@section('content')
    @parent
            <section class="event-login wrapper container">
            <h1 class="center">Connexion au panneau d'administration</h1>
                <form action="{{url('superUser/check')}}" method="post" class="col-md-6">
                    <div class="form-group">
                        <label for="name">Identifiant : </label>
                        <input type="text" name="name" tabindex="1" class="form-control" id="name" placeholder="Identifiant">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe : </label>
                        <input type="password" name="password" tabindex="1" class="form-control" id="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                    {{@csrf_field()}}
                    </form>
            </section>
@stop

