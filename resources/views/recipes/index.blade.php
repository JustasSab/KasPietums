@extends('layouts.app')
@section('admin-rightbar-content')

    <div class="recipes-form row" style="margin-bottom: 20px;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Receptai</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('recipes.create') }}">Pridėti Receptą</a>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th width="280px">Actions</th>
        </tr>
        @foreach ($recipes as $recipe)
            <tr>
                <td>{{ $recipe->name }}</td>
                <td>
                    <form action="{{ route('recipes.destroy', $recipe->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('recipes.show', $recipe->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('recipes.edit', $recipe->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
