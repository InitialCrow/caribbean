@extends('layouts.master')

@section('content')
    @parent
    <section id="formule">
        <section class="formule wrapper">
            <h2 class="title"><span class="edwardianScriptITC nos">Nos</span> <span class="didotLTStd-Bold prestations">prestations</span></h2>
            <section class="margin-top-50">

                <div class="col-md-6">
                    <div class="pack formule-01">
                        <div>
                            <h3><span class="formule edwardianScriptITC">Formule</span> <span class="name didotLTStd-Bold">ANTHURIUM</span></h3>
                            <p class="futuraStd-Light">Nos forfaits de consulting/conseil</p>
                            <a href="#anthurium" class="popup-modal"><button class="didotLTStd-Light ">Découvrir</button></a>
                        </div>
                    </div>
                </div>

                <section class="popin popin-anthurium white-popup-block mfp-hide wrapper-popin info-formule" id="anthurium">
                    <div class="border-formule-anthurium"></div>
                    <span class="close popup-modal-dismiss"></span>
                    <h2 class="title center"><span class="edwardianScriptITC formule under">Formule</span> <span class="didotLTStd-Bold anthurium under">Anthurium</span></h2>
                    <h4 class="sous-titre-pop center didotLTStd-Bold">Nos Forfaits de consulting / conseil</h4>
                    <div class="forfait">
                        <h3 class="center didotLTStd-Bold">Forfait : CP 0</h3>
                        <p><span class="accroche didotLTStd-Bold">Rendez-vous préparatoire à domicile</span></p>
                        <ul class="futuraStd-Light">
                            <li>Le déplacement d’une Wedding Planner chez vous en Guadeloupe,<br/>Martinique ou en Ile de France.</li>
                            <li> La création de votre Budget Planner</li>
                            <li>Des conseils dans l’organisation de votre réception</li>
                            <li>Tarif déduit de la prestation supérieure que vous prendrez</li>
                        </ul>
                    </div>
                    <div class="forfait">
                        <h3 class="center didotLTStd-Bold">Forfait : CP 1</h3>
                        <p><span class="accroche didotLTStd-Bold">Recherche de mail</span></p>
                        <ul class="futuraStd-Light">
                            <li>Rdv préparatoire (par téléphone ou en face à face)</li>
                            <li>Proposition d’une liste de 5 salles selon vos souhaits dans la limite du possible)</li>
                            <li>Visite possible de 3 lieux avec une personne présente en Guadeloupe</li>
                        </ul>
                    </div>
                    <div class="forfait">
                        <h3 class="center didotLTStd-Bold">Forfait : CP 2</h3>
                        <p><span class="accroche didotLTStd-Bold">Liste des prestataires</span></p>
                        <ul class="futuraStd-Light">
                            <li>Rdv préparatoire (par téléphone ou en face à face)</li>
                            <li>Conception d’une liste de partenaires avec coordonnées selon vos besoins</li>
                        </ul>
                    </div>
                    <div class="forfait">
                        <h3 class="center didotLTStd-Bold">Forfait : CP 3</h3>
                        <p><span class="accroche didotLTStd-Bold">Mise en relation avec remise professionnelle</span></p>
                        <ul class="futuraStd-Light">
                            <li>Rdv préparatoire (par téléphone ou en face à face)</li>
                            <li>Conseil dans l’organisation de votre mariage</li>
                            <li>Transmission de documents de gestion</li>
                            <li>Définition de votre budget de mariage</li>
                            <li>Mise en relation avec des partenaires de mariage selon vos besoins</li>
                            <li>ccès aux tarifs Caribbean Planner des partenaires
                                <br/>(prix remisés qui vous permet de rembourser l’investissement)</li>
                            <li>Assistance pour les relations avec les partenaires</li>
                        </ul>
                    </div>
                </section>
                <!-- ALPINIA -->
                <div class="col-md-6">
                    <div class="pack formule-02">
                        <div>
                            <h3><span class="formule edwardianScriptITC">Formule</span> <span class="name didotLTStd-Bold">ALPINIA</span></h3>
                            <p class="futuraStd-Light">Nos forfaits de cérémonie</p>
                            <a href="#alpinia" class="popup-modal"><button class="didotLTStd-Light">Découvrir</button></a>
                        </div>
                    </div>
                </div>
                <section class="popin popin-alpinia white-popup-block mfp-hide wrapper-popin info-formule" id="alpinia">
                    <div class="border-formule-alpinia"></div>
                    <span class="close popup-modal-dismiss"></span>
                    <h2 class="title center"><span class="edwardianScriptITC formule under">Formule</span> <span class="didotLTStd-Bold alpnia under">Alpinia</span></h2>
                    <h4 class="sous-titre-pop center didotLTStd-Bold">Nos Forfaits de consulting / conseil</h4>
                    <div class="forfait">
                        <h3 class="center didotLTStd-Bold">Forfait : CP 0</h3>
                        <p><span class="accroche didotLTStd-Bold">Rendez-vous préparatoire à domicile</span></p>
                        <ul class="futuraStd-Light">
                            <li>Le déplacement d’une Wedding Planner chez vous en Guadeloupe,<br/>Martinique ou en Ile de France.</li>
                            <li> La création de votre Budget Planner</li>
                            <li>Des conseils dans l’organisation de votre réception</li>
                            <li>Tarif déduit de la prestation supérieure que vous prendrez</li>
                        </ul>
                    </div>
                    <div class="forfait">
                        <h3 class="center didotLTStd-Bold">Forfait : CP 1</h3>
                        <p><span class="accroche didotLTStd-Bold">Recherche de mail</span></p>
                        <ul class="futuraStd-Light">
                            <li>Rdv préparatoire (par téléphone ou en face à face)</li>
                            <li>Proposition d’une liste de 5 salles selon vos souhaits dans la limite du possible)</li>
                            <li>Visite possible de 3 lieux avec une personne présente en Guadeloupe</li>
                        </ul>
                    </div>
                    <div class="forfait">
                        <h3 class="center didotLTStd-Bold">Forfait : CP 2</h3>
                        <p><span class="accroche didotLTStd-Bold">Liste des prestataires</span></p>
                        <ul class="futuraStd-Light">
                            <li>Rdv préparatoire (par téléphone ou en face à face)</li>
                            <li>Conception d’une liste de partenaires avec coordonnées selon vos besoins</li>
                        </ul>
                    </div>
                    <div class="forfait">
                        <h3 class="center didotLTStd-Bold">Forfait : CP 3</h3>
                        <p><span class="accroche didotLTStd-Bold">Mise en relation avec remise professionnelle</span></p>
                        <ul class="futuraStd-Light">
                            <li>Rdv préparatoire (par téléphone ou en face à face)</li>
                            <li>Conseil dans l’organisation de votre mariage</li>
                            <li>Transmission de documents de gestion</li>
                            <li>Définition de votre budget de mariage</li>
                            <li>Mise en relation avec des partenaires de mariage selon vos besoins</li>
                            <li>ccès aux tarifs Caribbean Planner des partenaires
                                <br/>(prix remisés qui vous permet de rembourser l’investissement)</li>
                            <li>Assistance pour les relations avec les partenaires</li>
                        </ul>
                    </div>
                </section>

                <div class="col-md-6">
                    <div class="pack formule-03">
                        <div>
                            <h3><span class="formule edwardianScriptITC">Formule</span> <span class="name didotLTStd-Bold">HIBISCUS</span></h3>
                            <p class="futuraStd-Light">Conciergerie privée pour vous et vos convives</p>
                            <a href="#hibiscus" class="popup-modal"><button class="didotLTStd-Light">Découvrir</button></a>
                        </div>
                    </div>
                </div>
                <section class="popin popin-hibiscus white-popup-block mfp-hide wrapper-popin info-formule" id="hibiscus">
                    <div class="border-formule-hibiscus"></div>
                    <span class="close popup-modal-dismiss"></span>
                    <h2 class="title center"><span class="edwardianScriptITC formule under">Formule</span> <span class="didotLTStd-Bold hibiscus under">Hibiscus</span></h2>
                    <h4 class="sous-titre-pop center didotLTStd-Bold">Nos Forfaits de consulting / conseil</h4>
                    <div class="forfait">
                        <h3 class="center didotLTStd-Bold">Forfait : CP 0</h3>
                        <p><span class="accroche didotLTStd-Bold">Rendez-vous préparatoire à domicile</span></p>
                        <ul class="futuraStd-Light">
                            <li>Le déplacement d’une Wedding Planner chez vous en Guadeloupe,<br/>Martinique ou en Ile de France.</li>
                            <li> La création de votre Budget Planner</li>
                            <li>Des conseils dans l’organisation de votre réception</li>
                            <li>Tarif déduit de la prestation supérieure que vous prendrez</li>
                        </ul>
                    </div>
                    <div class="forfait">
                        <h3 class="center didotLTStd-Bold">Forfait : CP 1</h3>
                        <p><span class="accroche didotLTStd-Bold">Recherche de mail</span></p>
                        <ul class="futuraStd-Light">
                            <li>Rdv préparatoire (par téléphone ou en face à face)</li>
                            <li>Proposition d’une liste de 5 salles selon vos souhaits dans la limite du possible)</li>
                            <li>Visite possible de 3 lieux avec une personne présente en Guadeloupe</li>
                        </ul>
                    </div>
                    <div class="forfait">
                        <h3 class="center didotLTStd-Bold">Forfait : CP 2</h3>
                        <p><span class="accroche didotLTStd-Bold">Liste des prestataires</span></p>
                        <ul class="futuraStd-Light">
                            <li>Rdv préparatoire (par téléphone ou en face à face)</li>
                            <li>Conception d’une liste de partenaires avec coordonnées selon vos besoins</li>
                        </ul>
                    </div>
                    <div class="forfait">
                        <h3 class="center didotLTStd-Bold">Forfait : CP 3</h3>
                        <p><span class="accroche didotLTStd-Bold">Mise en relation avec remise professionnelle</span></p>
                        <ul class="futuraStd-Light">
                            <li>Rdv préparatoire (par téléphone ou en face à face)</li>
                            <li>Conseil dans l’organisation de votre mariage</li>
                            <li>Transmission de documents de gestion</li>
                            <li>Définition de votre budget de mariage</li>
                            <li>Mise en relation avec des partenaires de mariage selon vos besoins</li>
                            <li>ccès aux tarifs Caribbean Planner des partenaires
                                <br/>(prix remisés qui vous permet de rembourser l’investissement)</li>
                            <li>Assistance pour les relations avec les partenaires</li>
                        </ul>
                    </div>
                </section>

                <div class="col-md-6">
                    <div class="pack formule-04">
                        <div>
                            <h3><span class="formule edwardianScriptITC">Formule</span> <span class="name didotLTStd-Bold">ALLAMANDA</span></h3>
                            <p class="futuraStd-Light">Nos forfaits d’organisation</p>
                            <a href="#allamanda" class="popup-modal"><button class="didotLTStd-Light" id="">Découvrir</button></a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="popin popin-allamanda white-popup-block mfp-hide wrapper-popin info-formule" id="allamanda">
                <div class="border-formule-allamanda"></div>
                <span class="close popup-modal-dismiss"></span>
                <h2 class="title center"><span class="edwardianScriptITC formule under">Formule</span> <span class="didotLTStd-Bold allamanda under">Allamanda</span></h2>
                <h4 class="sous-titre-pop center didotLTStd-Bold">Nos Forfaits de consulting / conseil</h4>
                <div class="forfait">
                    <h3 class="center didotLTStd-Bold">Forfait : CP 0</h3>
                    <p><span class="accroche didotLTStd-Bold">Rendez-vous préparatoire à domicile</span></p>
                    <ul class="futuraStd-Light">
                        <li>Le déplacement d’une Wedding Planner chez vous en Guadeloupe,<br/>Martinique ou en Ile de France.</li>
                        <li> La création de votre Budget Planner</li>
                        <li>Des conseils dans l’organisation de votre réception</li>
                        <li>Tarif déduit de la prestation supérieure que vous prendrez</li>
                    </ul>
                </div>
                <div class="forfait">
                    <h3 class="center didotLTStd-Bold">Forfait : CP 1</h3>
                    <p><span class="accroche didotLTStd-Bold">Recherche de mail</span></p>
                    <ul class="futuraStd-Light">
                        <li>Rdv préparatoire (par téléphone ou en face à face)</li>
                        <li>Proposition d’une liste de 5 salles selon vos souhaits dans la limite du possible)</li>
                        <li>Visite possible de 3 lieux avec une personne présente en Guadeloupe</li>
                    </ul>
                </div>
                <div class="forfait">
                    <h3 class="center didotLTStd-Bold">Forfait : CP 2</h3>
                    <p><span class="accroche didotLTStd-Bold">Liste des prestataires</span></p>
                    <ul class="futuraStd-Light">
                        <li>Rdv préparatoire (par téléphone ou en face à face)</li>
                        <li>Conception d’une liste de partenaires avec coordonnées selon vos besoins</li>
                    </ul>
                </div>
                <div class="forfait">
                    <h3 class="center didotLTStd-Bold">Forfait : CP 3</h3>
                    <p><span class="accroche didotLTStd-Bold">Mise en relation avec remise professionnelle</span></p>
                    <ul class="futuraStd-Light">
                        <li>Rdv préparatoire (par téléphone ou en face à face)</li>
                        <li>Conseil dans l’organisation de votre mariage</li>
                        <li>Transmission de documents de gestion</li>
                        <li>Définition de votre budget de mariage</li>
                        <li>Mise en relation avec des partenaires de mariage selon vos besoins</li>
                        <li>ccès aux tarifs Caribbean Planner des partenaires
                            <br/>(prix remisés qui vous permet de rembourser l’investissement)</li>
                        <li>Assistance pour les relations avec les partenaires</li>
                    </ul>
                </div>
            </section>

            <section class="engagement">
                <h3><span class="edwardianScriptITC notre">Notre</span> <span class="didotLTStd-Bold engagement">ENGAGEMENT</span></h3>
                <p class="futuraStd-Light">Une équipe de professionnels qui organise pour vous et avec vous votre événement.
                    Nous mettons à votre disposition notre savoir faire, nos valeurs basées sur le service
                    de qualité lié à la convivialité.
                </p>
                <div class="clearfix"></div>
                <span class="border"></span>
            </section>
            <section class="fonctionnement">
                <div class="txt-right">
                    <h3><span class="edwardianScriptITC notre">Notre</span> <span class="didotLTStd-Bold fonctionnement">FONCTIONNEMENT</span></h3>
                    <p class="futuraStd-Light"><span class="pink">Nous sommes au cœur de la relation entre vous et les prestataires</span>
                        En fonction du niveau de prestation que vous souhaitez, nous vous proposons des fournisseurs adaptés
                        Nous vous soumettons un devis global en portant à votre connaissance les montants par pôle d’activité
                        Après modification de la proposition, nous procédons à la signature entre Caribbean Planner et Vous</p>
                    <br/>
                    <p class="futuraStd-Light">
                        Nous vous établissons une facture totalisant votre demande initiale puis vous transmettons des factures à mesure de vos besoins supplémentaires
                        <br/></p>
                        <p class="formule-hidden-txt futuraStd-Light">
                        Nous concluons les contrats directement avec les fournisseurs
                        Nous procédons directement aux paiements des fournisseurs
                        Nous vous envoyons régulièrement des relevés de compte indiquant les sommes versés (virement, chèque ou espèces) et le montant restant à payer
                        Chaque demande de modifications à la hausse ou à la baisse entrainera une facturation ou un avoir
                        <br/>
                        Ce n’est pas évident de confier l’organisation d’une telle journée à un organisme à distance :
                        <br/>
                        Confiez-nous vos souhaits, vos doutes et vos craintes et nous les transformerons en confiance et satisfaction.
                        Nos procédures éprouvées, nos échanges réguliers ainsi que notre expertise dans l’organisation d’évènements à distance pour les non résidents, vous assurera de profiter pleinement de votre événement et d’avoir un service de qualité à la hauteur de votre investissement.
                    </p>
                    <div class="clearfix"></div>
                    <button class="didotLTStd-Light formule-reveal-txt">Lire la suite</button>
                    <div class="clearfix"></div>
                    <span class="border"></span>
                </div>
            </section>
        </section>
    </section>
@stop
@section('content')
@stop