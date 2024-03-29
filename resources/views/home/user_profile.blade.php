@extends('layouts.user')

@section('title', 'My Profile')

@section('content')

    <!-- full Title -->
    <div class="full-title">
        <div class="container">

            <h1 class="mt-4 mb-3"> My Profile </h1>
            <div class="breadcrumb-main">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="breadcrumb-item active"> My Profile </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="blog-main">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    @include('profile.show')
                </div>

                <div class="col-md-4 blog-right-side">
                    <div class="card my-4">
                        <h5 class="card-header">Menu</h5>
                        <div class="card-body">
                            @include('home.usermenu')
                        </div>
                    </div>





                </div>
            </div>

        </div>

    </div>

@endsection
