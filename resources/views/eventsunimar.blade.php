@extends('layouts.layout')

@section ('content')
    <div class="content">
        <div class="banner-main">
            <img src="{{URL::asset('/image/banners/'.trans('commons.lang-banner').'/events/events.jpg')}}">
        </div>
        {{--Section info--}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section"
                     src="{{URL::asset('/image/logo-unimar.png')}}">
                <h4>{{trans('commons.events')}}</h4>
            </div>
        </div>
        <link href="{{ asset('plugins/fullcalendar/main.css') }}" rel="stylesheet">
        <!-- News' calendar -->
        <div class="p-4 row">
            <div class="p-2 col-md-8">
                <div id='calendar'></div>
            </div>
            <div class="p-2 border-left pl-4 col-md-4">
                <h4 class="fw-bold text-center card-body">Agenda para el año {{ now()->year }}</h4>
                @foreach($yearEvents as $yearEvent)
                    <li class="mes-{{$yearEvent['month']}}">
                        {{$yearEvent['title']}} -
                        {{$yearEvent['description']}} -
                        {{$yearEvent['start']}} -
                        {{$yearEvent['end']}}
                    </li>
                @endforeach
            </div>
        </div>

        <script src="{{ asset('plugins/fullcalendar/main.js') }}"></script>
        <script src="{{ asset('plugins/fullcalendar/locales/es.js') }}"></script>
        <script>
            let calendar;
            document.addEventListener('DOMContentLoaded', function() {
                /* BUILDING CALENDAR */
                var calendarEl = document.getElementById('calendar');
                calendar = new FullCalendar.Calendar(calendarEl, {
                    height: 700,
                    headerToolbar: {
                        left: 'prev,next',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    navLinks: true, // can click day/week names to navigate views
                    selectable: false,
                    selectMirror: true,
                    editable: false,
                    dayMaxEvents: true, // allow "more" link when too many events
                    droppable: false, // this allows things to be dropped onto the calendar
                    locale: 'es',
                    events: [
                            @foreach($currentEvents as $currentEvent)
                            @if($currentEvent->status_id == '1')
                        {
                            updateStatus: 'old',
                            id: '{{($currentEvent->id)}}',
                            title: '{{($currentEvent->title)}}',
                            description: '{{($currentEvent->description)}}',
                            backgroundColor: '{{($currentEvent->color)}}',
                            color    : '{{($currentEvent->color)}}',
                            tags_id    : '{{($currentEvent->tags_id)}}',
                            @if($currentEvent->start == $currentEvent->end)
                            start: '{{($currentEvent->start)}}'
                            @else
                            start: '{{($currentEvent->start)}}',
                            end: '{{($currentEvent->end)}}'
                            @endif
                        },
                        @endif
                        @endforeach
                    ]
                });
                calendar.render();
            });

            const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio","Julio", "Agosto","Septiembre", "Octubre", "Noviembre", "Diciembre"];
            for(let i = 1 ; i <= 12 ; i++){
                try{
                    document.getElementsByClassName("mes-"+i)[0].insertAdjacentHTML("beforebegin", '<h2 class="card-body border-0 text-center">'+monthNames[i-1]+'</h2>');
                }catch(error){}
            }
        </script>
    </div>
    <link href="{{asset('vendor/fullcalendar/main.css')}}" rel="stylesheet">
    <!-- News' calendar -->
    <div class="p-4 row">
        <div class="p-2 col-md-8">
            <div id='calendar'></div>
        </div>
    </div>
    <script src="{{asset('vendor/fullcalendar/main.js')}}"></script>
    <script src="{{asset('vendor/fullcalendar/locales/es.js')}}"></script>
    <script>
        let calendar;
        document.addEventListener('DOMContentLoaded', function() {
            /* BUILDING CALENDAR */
            var calendarEl = document.getElementById('calendar');
            calendar = new FullCalendar.Calendar(calendarEl, {
                height: 700,
                headerToolbar: {
                    left: 'prev,next',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                navLinks: true, // can click day/week names to navigate views
                selectable: false,
                selectMirror: true,
                editable: false,
                dayMaxEvents: true, // allow "more" link when too many events
                droppable: false, // this allows things to be dropped onto the calendar
                locale: 'es',
                events: [
                    @foreach($currentEvents as $currentEvent)
                        @if($currentEvent->status_id == '1')
                        {
                            updateStatus: 'old',
                            id: '{{($currentEvent->id)}}',
                            title: '{{($currentEvent->title)}}',
                            description: '{{($currentEvent->description)}}',
                            backgroundColor: '{{($currentEvent->color)}}',
                            color    : '{{($currentEvent->color)}}',
                            tags_id    : '{{($currentEvent->tags_id)}}',
                            @if($currentEvent->start == $currentEvent->end)
                                start: '{{($currentEvent->start)}}'
                            @else
                                start: '{{($currentEvent->start)}}',
                                end: '{{($currentEvent->end)}}'
                            @endif
                        },
                        @endif
                    @endforeach
                ]
            });
            calendar.render();
        });
        const monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio","Julio", "Agosto","Septiembre", "Octubre", "Noviembre", "Diciembre"];
        for(let i = 1 ; i <= 12 ; i++){
            try{
                document.getElementsByClassName("mes-"+i)[0].insertAdjacentHTML("beforebegin", '<h2 class="card-body border-0 text-center">'+monthNames[i-1]+'</h2>');
            }catch(error){}
        }
    </script>
@endsection
