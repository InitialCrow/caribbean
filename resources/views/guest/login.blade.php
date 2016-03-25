@extends('layouts.master')

@section('content')
    @parent
            <section class="event-login">
            <h1>Bienvenue {{$guest->email}}</h1>
            <p>pour participer flux social de {{$admin->name}} merci de repondre à quelques questions</p> 
                <form action="{{url('my_event/'.$admin->url.'/guest/'.$guest->token.'/subcribe')}}" method="post">
                    <div>
                        <label for="name">choisir votre pseudo:</label>
                        <input type="text" name="name" id="name" value="" tabindex="1" />
                        <label for="name">seriez vous sur place:</label>
                        <input type="radio" name="presence" value="1"> oui
                        <input type="radio" name="presence" value="0"> non

                    </div>
                    {{@csrf_field()}}
                </form>
            </section>
        </div>
    </section>
@stop

