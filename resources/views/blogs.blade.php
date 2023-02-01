<x-layout>
    <x-slot name="title">
        <title>All Blog</title>
    </x-slot>
    @foreach ($blogs as $blog)
        <article class="container">
            <h1><a href="/blogs/{{ $blog->slug }}">{{ $blog->title }}-{{ $blog->created_at->diffForHumans() }}</a>
            </h1>
            <p>{{ $blog->body }}</p>
            <p>Category-<a href="/categories/{{ $blog->category->slug }}">{{ $blog->category->name }}</a></p>
            <p>Created by - <a href="/userblog/{{ $blog->user->id }}">{{ $blog->user->name }}</a></p>
        </article>
    @endforeach
</x-layout>
