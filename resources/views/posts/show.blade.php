@extends('layouts.app')

@section('content')

<img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
<section class="font-sans leading-normal flex justify-center ">
    <!-- card container -->
    <div class="max-w-lg shadow-lg rounded overflow-hidden m-4 sm:flex w-4/5">
        <!-- card-content -->
        <div class="px-6 py-4">
            
            <p class="underline text-lg">{{$post->title}}</p>
            <p class="mb-4 text-grey-dark text-sm">
                {!!$post->body!!}
            </p>

            <hr>
            <p>Created at: {{$post->created_at}}</p> 
            <p>Last Updated at: {{$post->updated_at}}</p>
            <p>Created by: {{$post->createdby}}</p>
        </div>

    </div>

</section>

<div class="flex space-x-2 justify-center">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        <a href="/posts/{{$post->id}}/edit">Edit Notes</a>
    </button>
    
    <form method="POST" action="/posts/{{ $post->id }}">
        @method('DELETE')
        @csrf
        <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
    </form>
</div>

@endsection
