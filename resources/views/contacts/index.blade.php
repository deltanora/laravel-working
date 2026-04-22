<h1>All contacts</h1>

@foreach($contacts as $contacts)
    <h2>Name: {{ $contacts->name}}</h2>
    <p>E-mail: {{ $contacts->email }}</p>
@endforeach
