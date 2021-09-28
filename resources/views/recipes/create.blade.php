@extends('layouts.app')
@section('admin-rightbar-content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Pridėti Receptą</h3>
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

    <form action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="name_field">Title</label>
                    <input type="text" name="name" class="form-control" id="name_field">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="slug_field">Slug</label>
                    <input type="text" name="slug" class="form-control" id="slug_field">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="image_field">Image</label>
                    <input type="file" name="image" class="form-control-file" id="image_field">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="ingredients_field">Ingredients</label>
                    <textarea type="text" name="ingredients" class="form-control" id="ingredients_field"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="description_field">Description</label>
                    <textarea type="text" name="description" class="form-control" id="description_field"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="preparation_field">Preparation</label>
                    <textarea type="text" name="preparation" class="form-control" id="preparation_field"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Pridėti Receptą</button>
            </div>
        </div>

    </form>
@endsection
