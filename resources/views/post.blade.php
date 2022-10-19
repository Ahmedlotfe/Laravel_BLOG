<x-layout>
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <p>
            By <a href="#">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        <div>
            <p>{{ $post->body }}</p>
        </div>
    </article>
    <div style="margin-top: 20px;">
        <a href="/">Go Back</a>
    </div>

</x-layout>

