<h1>All events</h1>

@foreach($events as $events)
    <h2>Title: {{ $events->title}}</h2>
    <p>Date: {{ $events->date }}</p>
    <p>Attendee count: {{ $events->attendeeCoount }}</p>
@endforeach