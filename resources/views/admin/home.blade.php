@extends('layouts.app')
@section('content')
@include('layouts.admin-sidebar')
<!-- End XP Row -->
<div class="container">
    <div class="row py-4"> 
        <!-- End XP Col -->                       
        <div class="user-card col-md-6 col-lg-6 col-xl-6" id="user-card">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-primary"><span>1</span></h4>
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
        
        <!-- End XP Col -->                       
        <div class="recipe-card col-md-6 col-lg-6 col-xl-6" id="recipe-card">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="xp-widget-box">
                        <div class="float-left">
                            <h4 class="xp-counter text-success"><span>1</span></h4>
                            <p class="mb-0 text-muted">Receptų</p>                        
                        </div>
                        <div class="float-right">
                            <div class="xp-widget-icon xp-widget-icon-bg bg-success-rgba">
                                <img class="" src="/img/recipe.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End XP Col -->
        <!-- Next content -->
</div>
</div>
@endsection