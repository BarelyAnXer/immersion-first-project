@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        {{-- <strong class="font-bold">Holy smokes!</strong> --}}
        <span class="block sm:inline">{{$error}}</span>
      </div>
    @endforeach
@endif


@if (session('success'))
      <div class="bg-green-300">
          {{session('success')}}
      </div>
@endif

@if (session('error'))
      <div class="bg-red-300"> 
          {{session('error')}}
      </div>
@endif