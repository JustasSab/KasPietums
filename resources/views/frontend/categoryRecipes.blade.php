@extends('layouts.main')
@section('rightbar-content')
<!--image card layout start-->
<!-- Start Header -->
<div class="header">
    <!-- Start Search Box -->
    <div class="search-box">
        <h3 class="search-title">Ieškoti recepto</h3>
        <div class="box">
            <form name="search">
                <input type="text" class="input" name="txt" onmouseout="document.search.txt.value = '' ">
            </form>
            <i class="fa fa-search"></i>
        </div>
    </div>
    <!-- End Search Box -->
</div>
<!-- End Header -->

<!-- Start Main Content -->
<div class="main">
    <div class="container" id="main-container" style="margin-top:30px">
        <!-- Start Category Title -->
        <div class="category-title">
            <a href="{{ route('categoryrecipes', $cat->slug) }}">{{$cat->name }}</a>
        </div>
        <!-- End Category Title -->

        <div class="wrapper">
            <div class="cards_wrap">

                <!-- Start Category Card -->
                <div class="card_item">
                    <div class="card_inner">
                    <a href="{{ route('categoryrecipes', $cat->slug) }}">
                        @foreach ($rec as $r)
                        <div class="card_top">
                            <img class="recipe-img" src="{{ asset('public/recipes/'.$r->image) }}" alt="">
                        </div>
                        <div class="card_bottom">
                            <div class="card_title">
                            {{ $r->name }}
                            </div>
                        </div>
                        @endforeach
                    </a>
                    </div>
                </div>
                <!-- End Category Card -->
            </div>
        </div>

    </div>
</div>
@include('layouts.footer')
@endsection