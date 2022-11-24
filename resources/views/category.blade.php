
@extends('view-template')

@section('title',$category->name)

@section('content')


    <div class="w-75 text-white mt-4">
        <div class="bg-secondary px-2 py-1 w-100">
            {{$category->name}}
        </div>

        <div class="d-flex flex-wrap py-4 justify-content-around gap-4">
            @foreach($category->books as $b)
                <div class="text-black border rounded">
                    <img src="{{url("/$b->image")}}"  alt="" class="book rounded">
                   <div class="px-2 py-2 d-flex flex-column">
                       <h5 class="text">
                           {{$b->title}}
                       </h5>
                       <div class="text">
                           by
                           <br>
                           {{$b->author}}
                       </div>
                       <a href="{{url("/book/$b->id")}}" class="btn btn-primary mt-2">
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
        height: 24rem;
    }
</style>

@endsection
