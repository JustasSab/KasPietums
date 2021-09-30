@extends('layouts.app')
@section('admin-rightbar-content')

<div class="recipes-form">
    <div class="">
        <div class="pull-left">
            <h3>Receptai</h3>
        </div><br><br>
        <div class="pull-left">
            <a class="btn btn-success" href="{{ route('recipes.create') }}">Pridėti Receptą</a>
        </div>
    </div>
</div>

<!--image card layout start-->
<div class="container-content">
    <!--image row start-->
    <div class="row">
        <!--image card start-->
        @foreach ($recipes as $recipe)
            <div class="image">
                <img class="recipe-img" src="{{ asset('public/recipes/'.$recipe->image) }}" alt="">
                <div class="details">
                    <h2><span>{{ $recipe->name }}</span></h2>
                    <div class="more">
                        <div class="icon-links">
                            <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('recipes.show', $recipe->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('recipes.edit', $recipe->id) }}">Edit</a>

                                @csrf
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
</div>
<!--image card layout end-->

@endsection
