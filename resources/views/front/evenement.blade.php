@extends('layouts.master')

@section('content')
    @parent
    <section class="evenement">
        <div class="wrapper">
            <h1 class="edwardianScriptITC"> <span class="mon">Mon</span><span class="didotLTStd-Bold under event">évènement</span></h1>
            <section class="col-md-6 margin-top-50 info">
                <div class="col-md-11">
                    <h2><span class="under edwardianScriptITC nouvelle">Nouvelle Prestation</span> <span class="under didotLTStd-Bold votre-page">Votre page évènement</span></h2>
                    <p class="futuraStd-Light"><span class="pink">Caribbean Planner</span> vous proposes un nouveau dispositif
                        de communication, votre propre page personnalisée qui
                        vous parmettras déchanger vos documents et également
                        de faire partager vos meilleurs moments et plus beaux
                        souvenirs avec vos proches.</p>
                </div>
                <div class="col-md-11">
                    <h2><span class="under edwardianScriptITC nouvelle">Comment</span> <span class="under didotLTStd-Bold votre-page">ça marche ?</span></h2>
                    <p class="futuraStd-Light">
                        Pendant l’organisation de votre évènement, Caribbean Planner
                        vous communiqueras vos indentifiant personnel ainsi que ce
                        de vos invités et proches. Ce qui vous permettras d’échanger
                        <span class="pink">tout types de documents</span> avec votre agence et <span class="pink">partager votre
                        expérience avec l’ensemble de vos proches.</span>
                    </p>
                </div>
            </section>
            <section class="col-md-6 event-login event margin-top-50">
                <div class="img-couple margin-bottom-50"></div>
                <form action="{{url('my_event/check')}}" method="post">
                    <div class="connect">
                        <label for="name" class="under futuraStd-Light center id">Identifiant</label>
                        <input type="text" name="name" id="name" value="" tabindex="1" />
                        <button class="didotLTStd-Light under connect" type="submit">Connection</button>
                        <a href="" class="under margin-top-50 edwardianScriptITC forget">Identifiant oublié</a>
                    </div>
                    {{@csrf_field()}}
                </form>
            </section>
        </div>
    </section>
@stop
@section('content')
@stop