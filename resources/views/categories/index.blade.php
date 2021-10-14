@extends('layouts.app')
@section('admin-rightbar-content')
    <button class="openbtn hidden" id="openbtn" onclick="openNav()">☰</button>
    <div class="recipes-form">
    <div class="">
        <div class="pull-left">
            <h3>Receptai</h3>
        </div><br><br>
        <div class="pull-left">
            <a class="btn btn-success" href="{{ route('categories.create') }}">Pridėti Receptą</a>
        </div>
        <div class="pull-right mr-4">
            <input type="text" placeholder="Search..">
        </div>
    </div>
</div>

<!--image card layout start-->
<div class="container-content">
    <!--image row start-->
    <div class="row-recipes">
        <!--image card start-->
        @foreach ($categories as $category)
            <div class="image">
                {{-- <img class="recipe-img" src="{{ asset('public/recipes/'.$recipe->image) }}" alt=""> --}}
                <div class="details">
                    <h2><span>{{ $category->name }}</span></h2>
                    <div class="more">
                        <div class="icon-links">
                            <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            @csrf
                                <a class="btn btn-info" href="{{ route('categories.show', $category->id) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a>
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach
    <!--image card end-->
    </div>
    <!--image row end-->
</div>
<!--image card layout end-->

@endsection
