@extends('home')
@section('title', 'Dashboard')
@section('content')

<section id="main-banner-page" style="width:100%; height:80px;background:url(/images/banner1-1.jpg)"></section>

<div class="container-fluid">
    <div class="row flex-nowrap">

        @include('dashboard.sidebar')

        <div class="col py-3" style="background:#eee;height:600px">
            <div class="col-md-8 whitebox">
                <div class="col-md-12 text-center wow fadeIn" data-wow-delay="300ms">
                    <h2 class="heading bottom30 darkcolor font-light2">Dashboard
                    </h2>
                </div>
                <div class="widget logincontainer" style="height:400px">
                    <h3 class="darkcolor bottom30 text-center text-lg-start">Neurosurgeon Dr. Atique Admin Panel </h3>
                </div>
            </div>
        </div>
    </div>
</div>