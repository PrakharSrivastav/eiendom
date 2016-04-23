@extends('layout.public')
@section('css')
<style>
    #map {
        height: 300px; border:solid white 5px;
    }
</style>

@stop
@section('content')

<div class="col-xs-12" id="om_oss">
    <h1 class="text-center text-capitalize">Om Oss</h1>
    <div class="text-center">
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        </p>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute consecteturin voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
        <p>
            <strong>Lorem ipsum</strong> dolor sit amet, <strong>consectetur</strong> adipisicing elit,
            <a href=""> nostrud exercitation ullamco</a>
        </p>
    </div>
</div>
<div class="col-xs-12 padding-15 margin-bottom-15" id="kontakt_oss">
    <h1 class="text-center text-capitalize">Kontakt Oss</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div id="map"></div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <h3 class="text-center text-capitalize">Name of the company</h3>
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
            <h4>Kontact details</h4>
            <div><i class="fa fa-envelope-square"></i> Email : test@test.net</div>
            <div><i class="fa fa-mobile-phone"></i> Phone : 1234 5678</div>
            <hr>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. D
            </p>
        </div>
    </div>
</div>
<div class="col-xs-12" id="ansatte" style="background:#fff">
    <h1 class="text-center text-capitalize">Ansatte</h1>
    <div class="row margin-top-15">
        <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
                <img src="{{url('image/team_member_1.jpg')}}" alt="..." class="img-responsive" height="100" style="width:100%">
                <div class="caption">
                    <h3>Team Member 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div><i class="fa fa-envelope-square"></i> Email : team_member_1@compnay.com</div>
                    <div><i class="fa fa-mobile-phone"></i> Phone : 1234 6789</div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
                <img src="{{url('image/team_member_2.jpg')}}" alt="..."  class="img-responsive" height="100" style="width:100%;">
                <div class="caption">
                    <h3>Team Member 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.</p>
                    <div><i class="fa fa-envelope-square"></i> Email : team_member_2@compnay.com</div>
                    <div><i class="fa fa-mobile-phone"></i> Phone : 1234 5678</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xs-12" id="verdier">
    <h1 class="text-center text-capitalize">Verdier</h1>
    <div class="text-center">
        <div id="verdier_tabs">
            <!-- Nav tabs -->
            <ul class="nav nav-pills nav-justified" role="tablist" class="text-center">
                <li role="presentation" class="active"><a href="#eiendom" aria-controls="home" role="tab" data-toggle="tab">Eiendomsbransjen</a></li>
                <li role="presentation"><a href="#historie" aria-controls="profile" role="tab" data-toggle="tab">Historie</a></li>
                <li role="presentation"><a href="#mal" aria-controls="messages" role="tab" data-toggle="tab">Mål</a></li>
                <li role="presentation"><a href="#visjon" aria-controls="settings" role="tab" data-toggle="tab">Visjon</a></li>
                <li role="presentation"><a href="#verdigrunnlag" aria-controls="settings" role="tab" data-toggle="tab">Verdigrunnlag</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="eiendom">
                    Eiendomsbransjen i Norge preges av mange aktører og er i liten grad strukturert. Bransjen kan likevel sies å være delt mellom de store eiendomsbesitterene, ofte styrt av større finansielle aktører innen næringseiendom, og en rekke mindre aktører. Alt fra ulike selskaper som driver virksomhet i egne bygg, til mellomstore eiendomsbesittere, ofte lokalt forankret. Når det gjelder boligmarkedet er de større boligutviklerne ofte de samme som de store entreprenørselskapene når det gjelder større boligbygg og leilighetsmarkedet. I markedet for eneboliger og mindre boligprosjekter er det en hel rekke aktører som opererer. Her opplever vi stor konkurranse og til dels stor variasjon på kompetanse og kvalitet. I AOE ønsker vi å utmerke oss i disse markedene som en faglig dyktig aktør med fokus på kvalitet og ansvarlige løsninger.
                </div>
                <div role="tabpanel" class="tab-pane" id="historie">
                    Anders Opsahl startet tidlig med egne virksomheter og fra sitt barndomshjem på Skullerud Gård i Oslo ble alt fra sommerblomster, jordbær, julenek, egg og tomater produsert og solgt i nabolaget. Mye av grunnlaget for dagens virksomhet ble lært i denne fasen. Kvaliteten på varene og høy servicegrad var avgjørende for å lykkes og ga viktig lærdom. For 20 år siden som nyutdannet tømrer, med ferskt svennebrev i hånden, mange førnøyde kunder og stor arbeidslyst ble selskapet bygget opp. Den første eiendomsinvesteringen var en liten 1- roms leilighet og siden har tusenvis av kvadratmeter blitt utviklet. Blant annet leiligheter, rekkehus, eneboliger, butikker, handlesenter, lager og kontorbygg som i dag utgjør Anders Opsahl Gruppen. Hele veien tuftet på de samme prinsipper med en grunnmur som består av aktivt eierskap, lokalkunnskap, fagkunnskap, ærlighet, hardt arbeid og respekt for kundene.
                </div>
                <div role="tabpanel" class="tab-pane" id="mal">
                    Anders Opsahl gruppen har som mål å fortsette å vokse som en ansvarlig aktør, med fokus på å bygge langsiktige verdier for våre boligkjøpere, leietagere og oss selv.
                </div>
                <div role="tabpanel" class="tab-pane" id="visjon">
                    Vår visjon er at vi alltid skal være stolte av måten vi opererer på og måten vi tjener penger på. Med dette mener vi at vi skal fortsette å ha fokus på alle typer resultater. Kombinasjonen av god lønnsomhet, mye ansvar og høy moral, gir oss positiv energi til å nå våre mål.
                </div>
                <div role="tabpanel" class="tab-pane" id="verdigrunnlag">
                    <h3>Moral.</h3>
                    AOE skal alltid opptre på en måte som gjør oss stolte av det vi driver med. Dette medfører at vi tar ansvar i alle ledd av våre virksomheter, med lokal tilknytting, aktivt eierskap, tett oppfølging, faglig styrke og redelighet skal både vi som jobber i AOE og våre samarbeidspartnere, være stolte av å bygge og forvalte våre eiendommer. Vi bryr oss og støtter en rekke ulike prosjekter både i inn og utland. Ikke bare lokale idrettslag nyter godt av vår støtte, vi er også faddere for en hel barneby i El Salvador, vi har bygget en fødeklinikk i Uganda og en mobil helseklinikk i San Salvador, for å nevne noe. I tillegg er vi Amnesty total supporter.
                    <h3>Miljø.</h3>
                    AOE tar ansvar også når det kommer til miljø. Våre boliger og bygg etterstreber vi alltid å gjøre litt bedre. AOE var en av de første eiendomsaktørene i landet som ble miljøfyrtårnsertifisert. Lenge før nye tekniske forskrifter begynte å kreve større fokus på miljø, har vi levert boliger med bedre og mer miljøvennlige løsninger. Alle våre bygg og boliger har varmegjenvinning med høy virkningsgrad, god styring og svært lav U-verdi på vinduer og konstruksjoner. Vi skal til en hver tid levere bedre enn krav og forskrifter tilsier, samt være med på å dra markedet i riktig retning på dette området.
                    <h3>Visjon.</h3>
                    Vår visjon er at vi alltid skal være stolte av måten vi opererer på og måten vi tjener penger på. Med dette mener vi at vi skal fortsette å ha fokus på alle typer resultater. Kombinasjonen av god lønnsomhet, mye ansvar og høy moral, gir oss positiv energi til å nå våre mål.
                </div>
            </div>

        </div>
    </div>
</div>
<div class="col-xs-12" id="fakturaaddresser">
    <h1 class="text-center text-capitalize">Fakturaaddresser</h1>
    <div class="row">
        <div class="col-xs-12 col-xs-6 col-md-4">
            <address>
                <strong>Twitter, Inc.</strong><br>
                1355 Market Street, Suite 900<br>
                San Francisco, CA 94103<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>

            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
        </div>
        <div class="col-xs-12 col-xs-6 col-md-4">
            <address>
                <strong>Twitter, Inc.</strong><br>
                1355 Market Street, Suite 900<br>
                San Francisco, CA 94103<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>

            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
        </div>
        <div class="col-xs-12 col-xs-6 col-md-4">
            <address>
                <strong>Twitter, Inc.</strong><br>
                1355 Market Street, Suite 900<br>
                San Francisco, CA 94103<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>

            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
        </div>
    </div>
</div>
<div class="col-xs-12" id="referanser">
    <h1 class="text-center text-capitalize">Referenser / Projects</h1>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{url('image/location_1.jpeg')}}" alt="..." class="img-responsive" height="100" style="width:100%;height:200px">
                <div class="caption">
                    <h3>Location 1</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="#" class="btn btn-primary" role="button">Red More</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{url('image/location_2.jpeg')}}" alt="..." class="img-responsive" height="100" style="width:100%;height:200px">
                <div class="caption">
                    <h3>Location 2</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="#" class="btn btn-primary" role="button">Red More</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{url('image/location_3.jpeg')}}" alt="..." class="img-responsive" height="100" style="width:100%;height:200px">
                <div class="caption">
                    <h3>Location 3</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="#" class="btn btn-primary" role="button">Red More</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{url('image/location_4.jpeg')}}" alt="..." class="img-responsive" height="100" style="width:100%;height:200px">
                <div class="caption">
                    <h3>Location 4</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="#" class="btn btn-primary" role="button">Red More</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{url('image/location_5.jpeg')}}" alt="..." class="img-responsive" height="100" style="width:100%;height:200px">
                <div class="caption">
                    <h3>Location 5</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="#" class="btn btn-primary" role="button">Red More</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{url('image/location_6.jpeg')}}" alt="..." class="img-responsive" height="100" style="width:100%;height:200px">
                <div class="caption">
                    <h3>Location 6</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                    <a href="#" class="btn btn-primary" role="button">Red More</a>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('javascript')
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 59.55, lng: 10.45},
            zoom: 8
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3nwuw_J3QZBT9llvYMUS91ErAmxSFjqs&callback=initMap" async defer></script>
@stop