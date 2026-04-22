<x-app-layout>
    <a href="{{route('posts.index')}}">All posts</a>
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content }}</p>
    <p>Status: {{ $post->status }}</p>

   <h3>Current status: {{ $post->status }}</h3>

<form action="{{ route('posts.updateStatus', $post->id) }}" method="POST">
    @csrf

    <input type="text" name="status" placeholder="Enter new status (draft, published, archived)" required>

    <button type="submit">Update Status</button>
</form>
</x-app-layout>
