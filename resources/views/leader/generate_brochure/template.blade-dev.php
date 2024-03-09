<!DOCTYPE html>
<html>
<head>
    <title>Brochure</title>
    @php $lang = $data->language == 1 @endphp
</head>

<body>
<div> 
    <div class="header">
        <h1>{{$data->invitation}} {{isset($data->tleader) ? $data->tleader->tlfirst_n." ".$data->tleader->ti_l_name : "-"}} {{$lang ? "for" : "por"}} {{$gti->gti_name}}</h1>
        <div class="name-img">
            <img src="{{public_path()}}\uploads\brochures\{{$data->profile_image_path}}" alt="Image">
        </div>
        <div class="price-date">
            <h3 style="transform: translateX(100px);">{{$lang ? 'price of' : 'precio de'}} ${{$data->tour_cost}}</h3>
            <h3>{{$lang ? 'Departure from' : 'Salida de'}} {{$data->departure_city}}, {{date_format(date_create($data->departure_date), 'd M Y')}}</h3>
            <h3>{{$lang ? 'Return at' : 'Regreso el'}} {{date_format(date_create($data->arrival_date), 'd M Y')}}</}}</h3>
        </div>
    </div>
    <div class="body">
        <div class="visit desc-item">
            <h5>{{$lang ? 'places to visit' : 'Lugares a ser visitados'}}</h5>
            <div class="sight-container">
                <div class="first-set-sight">
                    @foreach($finalSight as $key => $sight)
                        @if($key <= 16)
                            <ul> - {{$sight->sight_name}}</ul>
                        @endif
                    @endforeach
                </div>
                <div class="second-set-sight">
                    @foreach($finalSight as $key => $sight)
                        @if($key > 16 && $key <= 32)
                            <ul> - {{$sight->sight_name}}</ul>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="info desc-item">
            <div class="includes">
                <h4>{{$lang ? 'Our tour includes' : 'Nuestro tour incluye'}}:</h4>
                @if($gti->includes_flight == 1)
                <p>- Flights from {{$gti->first_flight}}, {{$gti->second_flight?$gti->second_flight.', ':''}} {{$gti->third_flight?$gti->third_flight.'.':'.'}} {{$lang? 'aviable from your departure city':'disponibles desde su ciudad de partida'}}</p>
                @endif
                <p>- {{$lang?'Accomodation in':'Alojamiento en'}} {{$lang? '':'hotel'}} {{$gti->hotel_stars}} {{$lang? 'stars hotel':'estrellas'}} {{$lang? 'for':'por'}} {{$gti->hotel_days}} {{$lang? 'nights':'noches'}} {{$lang? 'with private bathroom included.':'con baño privado incluido.'}}</p>
                @if($gti->meals != 'no meal')
                <p>- {{$gti->meals}} {{$lang?'at the hotel':'en el hotel'}}.</p>
                @endif
                @if($gti->include_guide != '2')
                <p>- @if($gti->include_guide == 1)
                    {{$lang?'Guided visits to every place included in the itinerary':'Visitas guiadas a todos los lugares incluidos en el itinerario'}}
                    @else
                    {{$lang?'Guided visits to some of the places included in the itinerary':'Visitas guiadas a algunos los lugares incluidos en el itinerario'}}
                   @endif
                </p>
                @endif
                @if($gti->includes_sight != '2')
                <p>- @if($gti->includes_sight == 1)
                    {{$lang?'Entrance to every place included in the itinerary':'Entradas a todos los lugares incluidos en el itinerario'}}
                    @else
                    {{$lang?'Entrance to some of the places included in the itinerary':'Entradas a algunos los lugares incluidos en el itinerario'}}
                   @endif
                </p>
                @endif
                @if($gti->includes_transport != '2')
                <p>- @if($gti->includes_transport == 1)
                    {{$lang?'Trips in acclimatized luxury buses':'Viajes en buses de lujo aclimatados.'}}
                    @else
                    {{$lang?'Trips to some of the places in acclimatized luxury buses':'Viajes a algunos de los lugares en buses de lujo aclimatados.'}}
                   @endif
                </p>
                @endif
            </div>
            <div class="contact-info">
                <h5>GOOD SHEPHERD TOURS INC.</h5>
                <p>{{$lang ? 'For more information' : 'Para mas informacion'}}:</p>
                <p>Pastor <b>{{isset($data->tleader) ? $data->tleader->tlfirst_n." ".$data->tleader->ti_l_name : "-"}}</b></p>
                <p>{{$lang ? 'Phone number' : 'Numero telefónico'}}: <b>{{isset($data->tleader) ? $data->tleader->th_phone : "-"}}</b></p>
                <p>Email <b>{{isset($data->tleader) ? $data->tleader->th_email : "-"}}</b></p>
            </div>
        </div>
    </div>
    <div class="images">
        <div class="first-image">
            <img src="{{public_path()}}\uploads\brochures\bottom-4.png">
            <h5>Rio jordan</h5>
        </div>
        <div class=" second-image">
            <img src="{{public_path()}}\uploads\brochures\bottom-3.png">
            <h5>Templo de salomon</h5>
        </div>
         <div class="third-image">
            <img src="{{public_path()}}\uploads\brochures\bottom-2.png">
            <h5>Monte de los olivos</h5>
        </div>
        <div class="fourth-image ">
            <img src="{{public_path()}}\uploads\brochures\bottom-1.png">
            <h5>Anfiteatro de cesarea</h5>
        </div>
        
    </div>
    
    <div class="dayIt-container">
        <div class="dayIt-content">
        @php $currentDay = 0 @endphp
        @foreach($dayIts as $dayIt)

        @if($dayIt->day_itinerary > $currentDay)
            @php $currentDay+= 1 @endphp
            <h6>{{$lang ? 'Day #': 'Dia #'}} {{$currentDay}}</h6>
        @endif
            <p> - {{isset($dayIt->act) ? $dayIt->act->activity_name : ''}}</p>
        @endforeach
        </div>
    </div>
</div>
</body>
<style>
    * {
        margin: 0;
    }

    .header {
        height: 40%;
        width: 100%;
        background-image: url('{{public_path()}}\uploads\brochures\cover.png');
        background-size:cover;

    }

    .header h1 {
        font-size: 32px;
        box-sizing: border-box;
        margin: 0 auto;
        text-align: center;
        color: #000;
        text-shadow: 1px 1px 2px black;
        font-family: sans-serif;
    }

    .name-img {
        width: 100%;
        height: 60%;
        position: relative;       

    }

    .name-img div p {
        font-size: 76px;
        width: 30%;
        transform: translate(20%,60%);
        white-space: nowrap;
        font-family: sans-serif;
        color: #dda500;
        font-weight: 700;
        font-style: italic;

    }

    .name-img img {
        width: fit-content;
        position: absolute;
        right: 0;
        top: 0;
        bottom: 0;
        transform: translate(80px,0);
        width: 290px;
        height: 290px;
        border-radius: 1000px;
        object-fit: cover;
        border: 4px solid #dda500;

    }

    .price-date {
        height: fit-content;
        padding-bottom: 10px;
        transform: translateY(-10px);
    }

    .price-date h3 {
        margin: 0 40px;
        font-size: 26px;
        font-family: sans-serif;
    }
   
    .body {
        padding: 50px;
        position: relative;
        height: 34%;
        
        background-image: url('{{public_path()}}\uploads\brochures\body.png');
        background-size:cover;
    }

    .visit {
        background: #dda500cc;
        width: 41%;
        height: 95%;
        padding: 10px;
        border-radius: 10px;
        transform: translateY(-10px);
    }

    .sight-container {
        width: 100%;
        height: 90%;
        font-size: 12px;
        padding: 0;
        position: relative;
        overflow: hidden;
    }

    .sight-container div {
        position: absolute;
        margin: 0;
        padding: 0;
        line-height: 1.2;
    }

    .first-set-sight {
        top: 0;
        left: 0;
        width: 60%;
        transform: translateX(-30px);
        border-right: 1px solid #fff;    
    }

    .second-set-sight {
        top: 0;
        right: 0;
        width: 60%;   

    }

    .visit h5 {
        width: 100%;
        text-align: center;
        font-size: 20px;
        margin-bottom: 12px;
        color: #fff;
    }

    .info {
        position: absolute;
        right: 40px;
        top: 40px;
        height: 70%;
        width: 41%;
        box-sizing: border-box;
    }

    .includes {
        height: 65%;
        margin-bottom: 5%;
        padding: 14px;
        background: #99ec;
        border-radius: 10px;
        
    }

    .includes p {
        overflow: hidden;
        font-size: 14px;
    }

    .includes h4 {
        font-size: 20px;
        color: #fff;
        text-align: center;
        margin-bottom: 12px;
    }

    .contact-info {
        height: 30%;
        padding: 14px;
        background: #fff;
        border-radius: 10px;
    }

    .contact-info h5 {
        color: #dda500;
        font-family: sans-serif;
        font-size: 18px;
        margin-bottom: 6px;
    }

    .images {
        background: #fff;
        position: relative;
        width: 100%;
        height: 170px;
      
        padding-top: 10px;
    }

    .images div {
        position: absolute;
        height: 100%;
    }

    .images div img {
        height: 130px;
        width: 130px;
        border-radius: 100px;
    }

    .images div h5{
        width: 100%;
        font-size: 15px;
        font-family: sans-serif;
        text-align: center;
    }
    
    .first-image {
        right: 5%;
    }

    .second-image {
        right: 29%;
    }

    .third-image {
        left: 29%;
    }

    .fourth-image {
        left: 5%;
    }

    .dayIt-container {
        height: 1120px;
        padding: 15px;
        background-image: url('{{public_path()}}\uploads\brochures\body.png');
        width: 100%;
    }

    .dayIt-content {
        background: #99ec;
        width: 94%;
        padding: 8px;
        border-radius: 5px;
    }

    .dayIt-content h6 {
        font-size: 13px;
        font-weight: 600;
    }

    .dayIt-content p {
        font-size: 11px;
        font-family: sans-serif;
        line-height: 1;
    }
</style>
</html>
