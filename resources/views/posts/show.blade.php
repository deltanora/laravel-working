<x-app-layout>
    <a href="{{route('posts.index')}}">All posts</a>
    <h1>Title: {{ $post->title }}</h1>
    <p>Content: {{ $post->content }}</p>
    <p>Status: {{ $post->status }}</p>

   <h3>Current status: {{ $post->status }}</h3>

<form action="{{ route('posts.updateStatus', $post->id) }}" method="POST">
    @csrf

    <select name="status" required>
        <option value="draft">Draft</option>
        <option value="published">Published</option>
        <option value="archived">Archived</option>
    </select>

    <button type="submit">Update Status</button>
</form>
</x-app-layout>
