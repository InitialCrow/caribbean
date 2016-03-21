@extends('layouts.master')

@section('content')
    @parent
   <section class="slider">
       <div class="swiper-container">
           <!-- Additional required wrapper -->
           <div class="swiper-wrapper">
               <!-- Slides -->
               <div class="swiper-slide">Slide 1</div>
               <div class="swiper-slide">Slide 2</div>
               <div class="swiper-slide">Slide 3</div>
               ...
           </div>
           <!-- If we need pagination -->
           <div class="swiper-pagination"></div>

           <!-- If we need navigation buttons -->
           <div class="swiper-button-prev"></div>
           <div class="swiper-button-next"></div>

           <!-- If we need scrollbar -->
           <div class="swiper-scrollbar"></div>
       </div>
   </section>

    <main>
        <article>
            <section class="wrapper">
                <h2>Nous organisons le mariage de vos rêves en Guadeloupe</h2>
                <p>Vous souhaitez organiser votre mariage en Guadeloupe mais n’y résidez pas ?
                    Faire votre réception dans une villa en bord de mer mais vous n’avez pas de contacts sur place ?
                    Vous rêvez de déclarer vos vœux les pieds nus sur le sable lors d’une magnifique cérémonie ?
                    A moindre coût, Caribbean Planner vous aide à réaliser votre rêve.
                    Forte de 4 ans d’expérience réussi dans l’organisation de mariage en Guadeloupe, l’agence Caribbean Planner mets aujourd’hui à votre disposition une consultante en Ile de France afin de vous aider dans la gestion de votre réception.
                    Elle vous guidera, vous donnera des conseils avisés et surtout vous ouvrira son carnet d’adresse avec des professionnels de confiances et de qualités afin de discuter et de planifier l’un de vos plus beaux jour.

                    Authenticité, passion et professionnalisme sont les mots d’ordres de votre consultante.</p>
            </section>
            <section class="wrapper">
                <h2>Pourqoui choisir Caribbean Planner?</h2>
                <p>Première agence dʼorganisation dʼévénement privée en Guadeloupe
                    destinée aux personnes vivantes ailleurs.
                    Une wedding planner pour vous servir sur Paris
                    Des conférences téléphoniques avec vos différents partenaires de mariage en Guadeloupe
                    Des planches de décoration afin de valider vos choix dʼambiance
                    La coordination de votre jour J</p>
            </section>
        </article>
    </main>
    <section class="actualites wrapper">
        <h2>Actualités</h2>
    </section>
    <section class="gallery wrapper">
        <h2>Quelques unes de nos créations en images</h2>
        <ul>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </section>
@stop
@section('content')
@stop