<form action="{{ route('contact.store') }}" method="post">
@csrf
<label for='name'> Name:</label> <br>
<input type="text" id="name" name="name"> <br>

<label for='email'> E-mail:</label> <br>
<input type="text" id="email" name="email"> <br>

<label for='text'>Question:</label> <br>
<input type = "textarea" id = "question" name = "question"> <br>

 <button type="submit">Save</button>
</form>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

