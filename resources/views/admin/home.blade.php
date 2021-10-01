@extends('layouts.app')
@section('admin-rightbar-content')
    <button class="openbtn hidden" id="openbtn" onclick="openNav()">☰</button>
        <div class="row xp-contentbar">
            <!-- Start XP Col -->
            <div class="user-card col-md-6 col-lg-6 col-xl-6" id="dashboard-cards">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="xp-widget-box">
                            <div class="float-left">
                                <h4 class="xp-counter text-primary"><span>{{DB::table('users')->count()}}</span></h4>
                                <p class="mb-0 text-muted">Vartotojų</p>
                            </div>
                            <div class="float-right">
                                <div class="xp-widget-icon xp-widget-icon-bg bg-primary-rgba">
                                    <i class="fa fa-user" style="font-size:34px"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End XP Col -->

            <!-- Start XP Col -->
            <div class="recipe-card col-md-6 col-lg-6 col-xl-6" id="dashboard-cards">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="xp-widget-box">
                            <div class="float-left">
                                <h4 class="xp-counter text-success"><span>{{DB::table('recipes')->count()}}</span></h4>
                                <p class="mb-0 text-muted">Receptų</p>
                            </div>
                            <div class="float-right">
                                <div class="xp-widget-icon xp-widget-icon-bg bg-success-rgba">
                                    <img class="" alt="recipes" src="/img/recipe.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End XP Col -->

            <!-- Start XP Col -->
            <div class="category-card col-md-6 col-lg-6 col-xl-6" id="dashboard-cards">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="xp-widget-box">
                            <div class="float-left">
                                <h4 class="xp-counter text-success"><span>{{DB::table('categories')->count()}}</span></h4>
                                <p class="mb-0 text-muted">Kategorijų</p>
                            </div>
                            <div class="float-right">
                                <div class="xp-widget-icon xp-widget-icon-bg bg-success-rgba">
                                    <img class="" alt="recipes" src="/img/recipe.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End XP Col -->
        </div>

@endsection
