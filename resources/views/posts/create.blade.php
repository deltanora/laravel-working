
<x-app-layout>
    <h1>Create post</h1>

    <form method="POST" action="{{ route('posts.index') }}"> <br>
        @csrf


        <label for="title">Title: </label>
        <input
            type="text"
            id="title"
            name="title"
            value="{{ old('title') }}"
        > <br>



        <label for="content">Content: </label>
        <textarea name="content" id="content">{{ old('content') }}</textarea> <br>




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

</x-app-layout>