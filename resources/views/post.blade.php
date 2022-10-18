<x-layout>
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <div>
            <p>{{ $post->body }}</p>
        </div>
    </article>
    <div style="margin-top: 20px;">
        <a href="/">Go Back</a>
    </div>

</x-layout>

