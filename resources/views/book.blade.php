
@extends('view-template')

@section('title',"Home")

@section('content')


    <div class="w-75 text-white mt-4">
        <div class="bg-secondary px-2 py-1 w-100">
            Book Detail
        </div>

        <div class="d-flex flex-wrap py-4 justify-content-around gap-4">
                <div class="text-black rounded">
                    <div class="d-flex justify-content-center">
                        <img src="{{url("/$book->image")}}"  alt="" class="book rounded border">
                    </div>
                   <div class="px-2 py-2 d-flex flex-column mt-4">
                       <h5 class="text">
                           Title : {{$book->title}}
                       </h5>
                       <div class="text">
                           Author : {{$book->author}}
                       </div>
                       <div class="">
                           Year : {{$book->year}}
                       </div>
                       <div class="">
                           Publisher : {{$book->publisher->name}}
                       </div>
                       <div class="sypnosis">
                           Sypnosis
                           <br>
                           {{$book->synopsis}}
                       </div>
                   </div>
                </div>
        </div>


    </div>

<style>
    .sypnosis{
        width: 50rem;
    }

    .book{
        width: 20rem;
    }
</style>

@endsection
