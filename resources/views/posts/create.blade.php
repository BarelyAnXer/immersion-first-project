@extends('layouts.app') 




@section('content')
    <p class="text-6xl m-4">Create Notes</p>


    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Title: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title">
            </div>
            <div class="mb-4">
                <label class="font-bold text-gray-800" for="createdby">Created By: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="createdby" name="createdby">
            </div>
{{-- base sa pag tetest 'name' yung ginagamit sa PostsController->store function->validate reuired --}}

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="body">Content: </label>
                <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="editor1" name="body"></textarea>
            </div>


        
            <input type="file" id="cover_image" name="cover_image">



            <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
            <a href="/posts" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
        </form>

       

    </div>


@endsection
