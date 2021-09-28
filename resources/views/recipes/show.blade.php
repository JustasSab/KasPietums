@extends('layouts.app')
@section('admin-rightbar-content')

    <div class="xp-contentbar">

        <div class="row mt-3 mb-2">
            <div class="col-6 offset-3 text-center">
                <h4>{{$recipe->name}}</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 p-3 text-center">

                <img class="img-thumbnail" src="{{asset('public/recipes/'.$recipe->image)}}"
                     style="max-height:500px;max-width:350px;object-fit: cover;" alt="">
            </div>

            <div class="col-lg-5 p-3 my-4">
                <div class="container">
                    <p>{{$recipe->description}}</p>

                    <div class="pt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <h4>Ingredients: </h4>
                                <h6><a href="#"><span class="mdi mdi-account">{{$recipe->ingredients}}</span></a></h6>
                            </div>
                            <div class="col-md-6">
                                <h4>Genres: </h4>
                                <a class="mx-1" href="#"><span class="mdi mdi-$recipe-variant">{{$recipe->preparation}}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--    <div class="row" style="margin-bottom: 20px;">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h3>Show Receptą</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $recipe->name }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Slug:</strong>
                    {{ $recipe->slug }}
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Ingredients:</strong>
                    {{ $recipe->ingredients }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    {{ $recipe->description }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Preparation:</strong>
                    {{ $recipe->preparation }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Image:</strong><br>
                    <img class="img-thumbnail" src="{{asset(''.$recipe->img)}}"
                         style="max-height:500px;max-width:350px;object-fit: cover ;">
                </div>
            </div>
        </div>--}}

@endsection
