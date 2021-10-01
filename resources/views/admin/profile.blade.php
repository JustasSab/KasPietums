@extends('layouts.app')
@section('admin-rightbar-content')
    <button class="openbtn hidden" id="openbtn" onclick="openNav()">☰</button>
<div class="container py-4">
    <div class="row justify-content-center" id="profileform">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>
                    <div class="card-body">
                        <form>
                        @csrf

                        <div class="mt-3">
                            <label class="block font-medium text-sm text-gray-700" for="name">
                                Vardas
                            </label>
                            <input type="text" name="name" value="{{Auth::user()->name}}"><br />
                        </div>
                        <div class="mt-3">
                            <label class="block font-medium text-sm text-gray-700" for="email">
                                El.Paštas
                            </label>
                            <input type="text" name="email" value="{{Auth::user()->email}}"><br />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
