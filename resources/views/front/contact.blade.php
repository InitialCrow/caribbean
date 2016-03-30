@extends('layouts.master')

@section('content')
    @parent
    <section class="contact">
        <div class="wrapper">
            <h1 class="edwardianScriptITC"> <span class="mon">Nous</span><span class="didotLTStd-Bold under event">Contacter</span></h1>
            <section class="col-md-6 margin-top-50 info">

                <h4 class="didotLTStd-Headline margin-top-50">Guadeloupe</h4>
                <p>06 90 72 86 86</p>

                <h4 class="didotLTStd-Headline margin-top-50">France Métropolitaine</h4>
                <p>06 67 54 73 88</p>

                <h4 class="didotLTStd-Headline margin-top-50">Email</h4>
                <p>contact@caribbean-planner.com</p>
            </section>
            <section class="col-md-6 event-login event margin-top-50">
                <form action="{{url('my_event/check')}}" method="post">
                    <div class="connect">
                        <h4 class="didotLTStd-Headline">Présentez-vous</h4>

                        <input type="text" class="under" name="name" id="name" value="" tabindex="1" placeholder="Nom Prénom"/>
                        <input type="text" class="under" name="name" id="name" value="" tabindex="1" placeholder="Mail" />
                        <input type="text" class="under" name="name" id="name" value="" tabindex="1" placeholder="Téléphone"/>

                        <h4 class="didotLTStd-Headline">En savoir plus</h4>
                        <textarea name="" id="" cols="30" rows="10" placeholder="Votre message"></textarea>
                        <button class="didotLTStd-Light under connect" type="submit">Envoyer</button>
                    </div>
                    {{@csrf_field()}}
                </form>
            </section>
        </div>
    </section>
@stop
@section('content')
@stop