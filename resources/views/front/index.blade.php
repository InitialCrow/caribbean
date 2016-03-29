@extends('layouts.master')

@section('content')
    @parent
    <section class="wrapper col-md-6 home-mariage">
        <h2><span class="edwardianScriptITC votre">Votre</span> <span class="didotLTStd-Bold mariage">MARIAGE</span> <span class="guadeloupe edwardianScriptITC">de rêve en Guadeloupe</span></h2>
        <p class="futuraStd-Light">Vous souhaitez organiser votre mariage en Guadeloupe mais n’y résidez pas ?
            Faire votre réception dans une villa en bord de mer mais vous n’avez pas de contacts sur place ?
            Vous rêvez de déclarer vos vœux les pieds nus sur le sable lors d’une magnifique cérémonie ?</p>
        <button class="edwardianScriptITC">Découvrir</button>
    </section>
   <section class="col-md-12">
    <main>
        <section class="col-md-4 index-plus">
            <div><p><span class="edwardianScriptITC index-en">En</span> <span class="didotLTStd-Bold savoir-plus">savoir plus</span> <span class="guadeloupe edwardianScriptITC">sur la Guadeloupe</span></p></div>
            <button class="edwardianScriptITC">Découvrir</button>
        </section>
        <section class="col-md-4 date">
            <p class="center"><span class="edwardianScriptITC depuis">Depuis</span><span class="edwardianScriptITC date-2009">2009</span><span class="edwardianScriptITC nb-77">77</span><span class="didotLTStd-Bold event">évènements organisés</span></p>
            <span><a href="" class="edwardianScriptITC">Découvrir l'agence</a></span>
        </section>
        <section class="col-md-4 prestation">
            <div><p><span class="edwardianScriptITC index-en">Nos</span><span class="didotLTStd-Bold savoir-plus">Prestations</span></p>
                <button class="edwardianScriptITC">Découvrir</button></div>
        </section>

        <section class="qui-sommes-nous col-md-12">
            <h2 class="center"><span class="qui didotLTStd-Bold">Qui</span> <span class="sommes-nous edwardianScriptITC">sommes nous ?</span></h2>
            <p class="center futuraStd-Light col-md-6">Caribbean Planner est une agence connue et saluée par les partenaires
                dans le secteur de la planification d’évènements privées en Guadeloupe.
                L’agence organise des évènements remplis de bonheur, de joie et d’amour  ...
                <button class="edwardianScriptITC">Lire la suite</button>
            </p>
        </section>

        <section class="col-md-6 ceremonie">
            <div>
                <p class="center"><span class="edwardianScriptITC votre">Votre</span> <span class="didotLTStd-Bold ceremonie">cérémonie</span> <span class="edwardianScriptITC plage">sur la plage</span> <span class="distant-Stroke n-1">1</span></p>
            </div>
        </section>
        <section class="col-md-6 conciergerie">
            <div>
                <p class="center"><span class="edwardianScriptITC la">La</span> <span class="didotLTStd-Bold conciergerie">Conciergerie</span> <span class="edwardianScriptITC prestations">Nouvelles Prestations</span> <span class="distant-Stroke n-2">2</span></p>
            </div>
        </section>
        <section class="col-md-8 christina">
            <div>
                <h2 class="didotLTStd-Bold christina">Christina</h2>
                <h3> <span class="didotLTStd-Bold fondatrice">Fondatrice</span> <span class="wedding edwardianScriptITC">Wedding Planner</span></h3>
                <button class="edwardianScriptITC">En savoir +</button>
            </div>
        </section>
        <section class="col-md-4 equipe">
            <p><span class="didotLTStd-Bold equipe">L'Equipe</span> <span class="didotLTStd-Bold pour-vous">pour vous</span> <span class="edwardianScriptITC accompagner">accompagner</span> <span class="distant-Stroke n-3">3</span></p>
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
                            <h4 class="didotLTStd-Headline maries">Laure et Christophe</h4>
                            <p class="infos futuraStd-Light">Mariage et journée sur une île</p>
                            <p><span class="tarif didotLTStd-Italic">8390,00 €</span></p>
                        </section>
                    </div>
                </div>
                <div class="swiper-slide slide-03">
                    <div class="center">
                        <section class="infos-maries">
                            <h4 class="didotLTStd-Headline maries">Laure et Christophe</h4>
                            <p class="infos futuraStd-Light">Mariage et journée sur une île</p>
                            <p><span class="tarif didotLTStd-Italic">8390,00 €</span></p>
                        </section>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            {{--<div class="swiper-button-prev btn-slide"></div>--}}
            {{--<div class="swiper-button-next btn-slide"></div>--}}
        </section>
        <section class="col-md-5 creation">
            <h2 class="center"><span class="didotLTStd-Bold quelques">Quelques</span> <span class="didotLTStd-Bold unes">unes</span> <span class="creations edwardianScriptITC">de nos créations</span> <span class="distant-Stroke n-4">4</span></h2>
        </section>
    </main>

@stop
@section('content')
@stop