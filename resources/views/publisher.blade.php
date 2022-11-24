
@extends('view-template')

@section('title',"Publishers")

@section('content')


    <div class="w-75 text-white mt-4">
        <div class="bg-secondary px-2 py-1 w-100">
            Publisher List
        </div>

        <div class="d-flex flex-wrap py-4 justify-content-around gap-4">
            @foreach($publishers as $b)
                <div class="text-black border rounded position-relative">
                    <img src="{{$b->image}}"  alt="" class="book rounded">
                   <div class="px-2 py-2 d-flex flex-column pb-xl-4">
                       <h5 class="text">
                           {{$b->name}}
                       </h5>
                       <p class="text">
                           {{$b->address}}
                       </p>
                       <div class="mt-2"></div>
                       <a href="{{url("/publisher/$b->id")}}" class="btn btn-primary position-absolute">
                           Detail
                       </a>
                   </div>
                </div>


            @endforeach
        </div>


    </div>

<style>
    .book{
        width: 15rem;
        height: 12rem;
    }

    .btn{
        width: 10rem;
        bottom: 0.5rem;
        left: 0.5rem;
    }

    .text{
        max-width: 10rem;
    }
</style>

@endsection
