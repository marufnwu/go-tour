<!DOCTYPE html>
<html>
<head>
    <title>Brochure</title>
</head>

<body>

    <div class="container">
        <h1>{{$gti->gti_name}}</h1>
        <div class="dayIt-content">
            @php $currentDay = 0 @endphp
            @foreach($dayIts as $dayIt)

            @if($dayIt->day_itinerary > $currentDay)
                @php $currentDay+= 1 @endphp 
                <h6>Day # {{$currentDay}}</h6>
            @endif
                <p> - {{isset($dayIt->act) ? $dayIt->act->activity_name : ''}}</p>
            @endforeach
        </div>
    </div>
</body>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    .container {
        padding: 10px;
    }

    .container h1 {
        text-align: center;
        margin: 10px;
    }

    .dayIt-content h6 {
        font-size: 16px;
    }

    .dayIt-content p {
        font-size: 12px;
        line-height: 1.3;
    }
</style>
</html>