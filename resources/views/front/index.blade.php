@extends('layouts.master')

@section('content')
    @parent
    <section id="index">
        <section class="wrapper col-md-6 home-mariage">
            <h2><span class="edwardianScriptITC votre under">Votre</span> <span class="didotLTStd-Bold mariage under">MARIAGE</span> <span class="guadeloupe edwardianScriptITC under">de rêve en Guadeloupe</span></h2>
            <p class="futuraStd-Light">Vous souhaitez organiser votre mariage en Guadeloupe mais n’y résidez pas ?
                Faire votre réception dans une villa en bord de mer mais vous n’avez pas de contacts sur place ?
                Vous rêvez de déclarer vos vœux les pieds nus sur le sable lors d’une magnifique cérémonie ?</p>

            <p class="futuraStd-Light hidden-txt text-plus">A moindre coût, Caribbean Planner vous aide à réaliser votre rêve.Forte de 4 ans d’expérience réussi
                dans l’organisation de mariage en Guadeloupe, l’agence Caribbean Planner mets aujourd’hui à votre disposition
                une consultante en Ile de France afin de vous aider dans la gestion de votre réception.
                Elle vous guidera, vous donnera des conseils avisés et surtout vous ouvrira son carnet d’adresse avec des
                professionnels de confiances et de qualités afin de discuter et de planifier l’un de vos plus beaux jour.
                Authenticité, passion et professionnalisme sont les mots d’ordres de votre consultante.</p>

            <button class="didotLTStd-Light reveal-txt">Découvrir</button>
        </section>

       <section class="col-md-12 margin-top-50">
            <section class="col-md-4 index-plus ">
                <div class="savoir-plus test"><p><span class="edwardianScriptITC index-en">En</span> <span class="didotLTStd-Bold savoir-plus">savoir plus</span> <span class="guadeloupe edwardianScriptITC">sur la Guadeloupe</span></p>
                    <button class="didotLTStd-Light dec-guadeloupe">Découvrir</button></div>
                <div class="info-guadeloupe">
                    <span class="didotLTStd-Light close dec-guadeloupe">X</span>
                    <p class="futuraStd-Book">
                        Situé à plus de 7000 km de la métropole, l'archipel de la Guadeloupe est une destination prisée des métropolitains lorsque l'hiver envahit l'Hexagone. Lové entre l'équateur et le tropique du Cancer, il ravit à la fois les amateurs de détente et les plus sportifs.
                    </p>
                </div>
            </section>
            <section class="col-md-4 date">
                <p class="center"><span class="edwardianScriptITC depuis">Depuis</span><span class="edwardianScriptITC date-2009">2009</span><span class="edwardianScriptITC nb-77">77</span><span class="didotLTStd-Bold event">évènements organisés</span></p>
                <span><a href="#" class="edwardianScriptITC switchNumb">Quelques chiffres</a></span>
            </section>
            <section class="col-md-4 prestation">
                <div><p><span class="edwardianScriptITC index-en">Nos</span><span class="didotLTStd-Bold savoir-plus">Prestations</span></p>
                    <a href="{{url('/formule')}}"> <button class="didotLTStd-Light">Découvrir</button></a>
                </div>
            </section>
       </section>

        <section class="qui-sommes-nous col-md-12">
            <h2 class="center"><span class="qui didotLTStd-Bold under">Qui</span> <span class="sommes-nous edwardianScriptITC under">sommes nous ?</span></h2>
            <p class="center futuraStd-Light col-md-6">Caribbean Planner est une agence connue et saluée par les partenaires
                dans le secteur de la planification d’évènements privées en Guadeloupe.
                L’agence organise des évènements remplis de bonheur, de joie et d’amour  ...
                <a href="{{url('/agence')}}"><button class="didotLTStd-Light">Lire la suite</button></a>
            </p>
        </section>

        <section class="col-md-6 ceremonie margin-top-50">
            <div>
                <p class="center"><span class="edwardianScriptITC votre">Votre</span> <span class="didotLTStd-Bold ceremonie">cérémonie</span> <span class="edwardianScriptITC plage">sur la plage</span> <span class="distant-Stroke n-1">1</span></p>
            </div>
        </section>
        <section class="col-md-6 conciergerie margin-top-50">
            <div>
                <p class="center"><span class="edwardianScriptITC la">La</span> <span class="didotLTStd-Bold conciergerie">Conciergerie</span> <span class="edwardianScriptITC prestations">Nouvelles Prestations</span> <span class="distant-Stroke n-2">2</span></p>
            </div>
        </section>
        <section class="col-md-8 christina margin-top-50">
            <div>
                <h2 class="didotLTStd-Bold christina">Christina</h2>
                <h3> <span class="didotLTStd-Bold fondatrice">Fondatrice</span> <span class="wedding edwardianScriptITC">Wedding Planner</span></h3>
                <a href="{{url('/agence')}}"><button class="didotLTStd-Light">En savoir +</button></a>
            </div>
        </section>
        <section class="col-md-4 equipe margin-top-50">
            <p class="center"><span class="didotLTStd-Bold equipe">L'Equipe</span> <span class="didotLTStd-Bold pour-vous">pour vous</span> <span class="edwardianScriptITC accompagner">accompagner</span> <span class="distant-Stroke n-3">3</span></p>
        </section>

        <section class="col-md-7 swiper-container realisation">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide-01">
                    <div class="center">
                        <section class="infos-maries">
                            <h4 class="didotLTStd-Headline maries">Laure et Christophe</h4>
                            <p class="infos futuraStd-Light">Mariage et journée sur une île</p>
                            <p><span class="tarif didotLTStd-Italic">8390,00 €</span></p>
                        </section>
                    </div>
                </div>
                <div class="swiper-slide slide-02">
                    <div class="center">
                        <section class="infos-maries">
                            <h4 class="didotLTStd-Headline maries">Elisa et Jean victor</h4>
                            <p class="infos futuraStd-Light">Décoration</p>
                            <p><span class="tarif didotLTStd-Italic">1290,00 €</span></p>
                        </section>
                    </div>
                </div>
                <div class="swiper-slide slide-03">
                    <div class="center">
                        <section class="infos-maries">
                            <h4 class="didotLTStd-Headline maries">Markus et Anna</h4>
                            <p class="infos futuraStd-Light">Cérémonie sur la plage</p>
                            <p><span class="tarif didotLTStd-Italic">559,00 €</span></p>
                        </section>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            {{--<div class="swiper-button-prev btn-slide"></div>--}}
            {{--<div class="swiper-button-next btn-slide"></div>--}}
        </section>
        <section class="col-md-5 creation margin-top-50">
            <h2 class="center"><span class="didotLTStd-Bold quelques under">Quelques</span> <span class="didotLTStd-Bold unes under">unes</span> <span class="creations edwardianScriptITC under">de nos créations</span> <span class="distant-Stroke n-4 under">4</span></h2>
        </section>
    </section>

@stop
@section('content')
@stop