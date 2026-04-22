<x-app-layout>
    <h1>Edit post</h1>

    <!-- <form action="/posts/{{ $post->id }}/update" method="post"> -->
        <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('put')

        <label for="title">Title: </label>
        <input type="text" id="title" name="title" value="{{ $post->title }}">
        <br>
        <label for="content">Content: </label>
        <textarea name="content" id="content">{{ $post->content }}</textarea>
        <br>
        <label for="status">Status: </label>
        <textarea name="status" id="status">{{ $post->status }}</textarea>
        <br>
        <input type="submit" value="Update">
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
