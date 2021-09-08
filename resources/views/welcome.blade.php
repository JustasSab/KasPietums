<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KasPietums') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<!-- Top NavBar -->
@include('layouts.top-navbar')
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
                        <img class="card-img-top" src="/img/il-vano.jpg">
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
</div>
<!-- End Main Content -->

<!-- Footer -->
@include('layouts.footer')

    <!-- Start JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/fadesearchbox.js') }}"></script> 
    <!-- End JS -->
</body>
</html>
