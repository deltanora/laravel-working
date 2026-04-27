<h1>All contacts</h1>

@foreach($cars as $cars)
    <h2>Brand: {{ $cars->brand}}</h2>
    <p>Model: {{ $cars->model }}</p>
    <p>Year: {{ $cars->year }}</p>
@endforeach
