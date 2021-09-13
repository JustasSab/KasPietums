@section('title')
    KasPietums
@endsection

@extends('layouts.main')
@section('rightbar-content')
<body>
<!-- Top NavBar -->

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
        <!-- Start Recipe of the Day -->
        <div class="category-title">
            <a href="{{ url('/') }}">{{ __('Dienos receptas') }}</a>
        </div>

            <div class="row py-3">
                <div class="recipes-title col-sm-6">
                    <a href="{{ url('/') }}">
                    <div class="card" id="recipes-card">
                        <img class="card-img-top" alt="recipe" src="/img/il-vano.jpg">
                    </div>
                    </a>
                </div>
                <!-- Start SideBar -->
                <div class="col-sm-6">
                    <h2 class="recipe-title">Recipe 2</h2>
                    <div class="">
                        <h3>Aprašymas</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus accusamus hic corporis, assumenda vel itaque repellendus. Eaque recusandae provident ullam sequi. Nulla doloribus, error consequuntur cum corrupti dolorem magni recusandae.</p>
                    </div>
                </div>
                <!-- End SideBar -->
            </div>
        <!-- End Recipe of the Day -->
        <hr>
        <!-- Start Popular Recipes -->
        <div class="category-title">
            <a href="{{ url('/') }}">{{ __('Populiariausi receptai') }}</a>
        </div>
        <div class="wrapper">
            <div class="cards_wrap">


                <div class="card_item">
                    <div class="card_inner">
                    <a href="{{ url('/') }}">
                        <div class="card_top">
                            <img class="recipe-img" src="/img/il-vano.jpg">
                        </div>
                        <div class="card_bottom">
                            <div class="card_title">
                                Classic Pasta Primavera
                            </div>
                        </div>
                    </a>
                    </div>
                </div>


                <div class="card_item">
                    <div class="card_inner">
                    <a href="{{ url('/') }}">
                        <div class="card_top">
                            <img class="recipe-img" src="/img/il-vano.jpg">
                        </div>
                        <div class="card_bottom">
                            <div class="card_title">
                                Classic Pasta Primavera
                            </div>
                        </div>
                    </a>
                    </div>
                </div>

                <div class="card_item">
                    <div class="card_inner">
                    <a href="{{ url('/') }}">
                        <div class="card_top">
                            <img class="recipe-img" src="/img/il-vano.jpg">
                        </div>
                        <div class="card_bottom">
                            <div class="card_title">
                                Classic Pasta Primavera
                            </div>
                        </div>
                    </a>
                    </div>
                </div>

                <div class="card_item">
                    <div class="card_inner">
                    <a href="{{ url('/') }}">
                        <div class="card_top">
                            <img class="recipe-img" src="/img/il-vano.jpg">
                        </div>
                        <div class="card_bottom">
                            <div class="card_title">
                                Classic Pasta Primavera
                            </div>
                        </div>
                    </a>
                    </div>
                </div>

            </div>
        </div>
        <!-- End New Recipes -->
        <hr>
        <!-- Start New Recipes -->
        <div class="category-title">
            <a href="{{ url('/') }}">{{ __('Naujausi receptai') }}</a>
        </div>
        <div class="wrapper">
            <div class="cards_wrap">

                <div class="card_item">
                    <div class="card_inner">
                    <a href="{{ url('/') }}">
                        <div class="card_top">
                            <img class="recipe-img" src="/img/il-vano.jpg">
                        </div>
                        <div class="card_bottom">
                            <div class="card_title">
                                Classic Pasta Primavera
                            </div>
                        </div>
                    </a>
                    </div>
                </div>

                <div class="card_item">
                    <div class="card_inner">
                    <a href="{{ url('/') }}">
                        <div class="card_top">
                            <img class="recipe-img" src="/img/il-vano.jpg">
                        </div>
                        <div class="card_bottom">
                            <div class="card_title">
                                Classic Pasta Primavera
                            </div>
                        </div>
                    </a>
                    </div>
                </div>

                <div class="card_item">
                    <div class="card_inner">
                    <a href="{{ url('/') }}">
                        <div class="card_top">
                            <img class="recipe-img" src="/img/il-vano.jpg">
                        </div>
                        <div class="card_bottom">
                            <div class="card_title">
                                Classic Pasta Primavera
                            </div>
                        </div>
                    </a>
                    </div>
                </div>

                <div class="card_item">
                    <div class="card_inner">
                    <a href="{{ url('/') }}">
                        <div class="card_top">
                            <img class="recipe-img" src="/img/il-vano.jpg">
                        </div>
                        <div class="card_bottom">
                            <div class="card_title">
                                Classic Pasta Primavera
                            </div>
                        </div>
                    </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Main Content -->

<!-- Footer -->
@include('layouts.footer')
@endsection
