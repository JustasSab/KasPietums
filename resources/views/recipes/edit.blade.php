@extends('layouts.app')
@section('admin-rightbar-content')

    <div class="row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Edit Receptą</h3>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('recipes.update',$recipe) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="name_field">Name</label>
                    <input type="text" name="name" class="form-control" id="name_field" value="{{ $recipe->name }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="slug_field">Slug</label>
                    <input type="text" name="slug" class="form-control" id="slug_field" value="{{ $recipe->slug }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="image_field">Image</label>
                    <input type="file" name="image" class="form-control-file" id="image_field">
                    <img src="{{ asset('public/recipes/'.$recipe->image) }}" width="70px" height="70px" alt="">
                    {{--
                                        <img src="{{ Storage::url($recipe->image) }}" height="200" width="200" alt="" />
                    --}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="ingredients_field">Ingredients</label>
                    <textarea type="text" class="form-control" name="ingredients" id="ingredients_field">{{ $recipe->ingredients }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="description_field">Description</label>
                    <textarea type="text" class="form-control" name="description" id="description_field">{{ $recipe->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="preparation_field">Preparation</label>
                    <textarea type="text" class="form-control" name="preparation" id="preparation_field">{{ $recipe->preparation }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>

    </form>

@endsection
