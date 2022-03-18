@extends('layouts.app')

@section('content')


<button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-3 mt-3">
    <a href="/posts/create"> Create Notes </a>
</button>

@if (count($posts) > 0)
    @foreach ($posts as $post)
        <!-- wrapper -->
        <section class="font-sans leading-normal flex justify-center ">
            <!-- card container -->
            <div class="max-w-lg shadow-lg rounded overflow-hidden m-4 sm:flex w-4/5">
                <!-- card-content -->
                <div class="px-6 py-4">
                    
                    <p class="underline text-lg"><a href="/posts/{{$post->id}}">{{$post->title}}</a></p>
                    <p class="mb-4 text-grey-dark text-sm">
                        {!!$post->body!!}
                    </p>
                    <img style="width: 100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">
                    <hr>
                    <p>Created at: {{$post->created_at}}</p> 
                    <p>Last Updated at: {{$post->updated_at}}</p>
                    <p>Created by: {{$post->createdby}}</p>
                </div>

            </div>

        </section>

    @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif


@endsection
