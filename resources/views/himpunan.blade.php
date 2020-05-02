@extends('layouts.app')

@section('content')

<div class="breadcrumb-wrapper d-flex align-items-center justify-content-between">
    <div>
        <h1>Team</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb p-0">
                <li class="breadcrumb-item">
                    <a href="index.html">
                        <span class="mdi mdi-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">
                    app
                </li>
                <li class="breadcrumb-item" aria-current="page">team</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Search Bar -->
<form role="search" method="GET" action="/{{ $searchdata ?? '' }}">
    {{ csrf_field() }}
    <div class="card card-stats mb-4 mb-xl-0">
        <div class="card-body" style="background-color: #f8f9fe;">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="input-group input-group-alternative mb-4" style="box-shadow: 3px 3px #dbdde0;">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                            </div>
                            <input class="form-control form-control-alternative" placeholder="Search" type="text" name="search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<div class="row">
    @foreach($users->chunk(1) as $userChunk)
    @foreach($userChunk as $user)
    <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card card-default mt-6 mb-4">
            <div class="card-body text-center p-4">
                <a href="javascript:0" data-toggle="modal" data-target="#modal-contact" class="text-secondary d-inline-block mb-3">
                    <div class="image mb-3 mt-n9">
                        <img src="assets/img/user/u-xl-3.jpg" class="img-fluid rounded-circle" alt="Avatar Image">
                    </div>

                    <h5 class="card-title text-dark">{{ $user->name }}</h5>
                    <h6 class="card-title text-dark">{{ $user->username }}</h6>
                </a>

                <p class="card-text text-center mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor </p>
            </div>
        </div>
    </div>
    @endforeach
    @endforeach
</div>


<!-- Contact Modal -->
<div class="modal fade" id="modal-contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header justify-content-end border-bottom-0">
                <button type="button" class="btn-edit-icon" data-dismiss="modal" aria-label="Close">
                    <i class="mdi mdi-pencil"></i>
                </button>

                <div class="dropdown">
                    <button class="btn-dots-icon" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-dots-vertical"></i>
                    </button>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </div>

                <button type="button" class="btn-close-icon" data-dismiss="modal" aria-label="Close">
                    <i class="mdi mdi-close"></i>
                </button>
            </div>

            <div class="modal-body pt-0">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="profile-content-left px-4">
                            <div class="card text-center widget-profile px-0 border-0">
                                <div class="card-img mx-auto rounded-circle">
                                    <img src="assets/img/user/u6.jpg" alt="user image">
                                </div>

                                <div class="card-body">
                                    <h4 class="py-2 text-dark">Albrecht Straub</h4>
                                    <p>Albrecht.straub@gmail.com</p>
                                    <a class="btn btn-primary btn-pill btn-lg my-4" href="#">Follow</a>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between ">
                                <div class="text-center pb-4">
                                    <h6 class="text-dark pb-2">1503</h6>
                                    <p>Friends</p>
                                </div>

                                <div class="text-center pb-4">
                                    <h6 class="text-dark pb-2">2905</h6>
                                    <p>Followers</p>
                                </div>

                                <div class="text-center pb-4">
                                    <h6 class="text-dark pb-2">1200</h6>
                                    <p>Following</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="contact-info px-4">
                            <h4 class="text-dark mb-1">Contact Details</h4>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Email address</p>
                            <p>Albrecht.straub@gmail.com</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Phone Number</p>
                            <p>+99 9539 2641 31</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Birthday</p>
                            <p>Nov 15, 1990</p>
                            <p class="text-dark font-weight-medium pt-4 mb-2">Event</p>
                            <p>Lorem, ipsum dolor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@push('js')
<script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }}"></script>
@endpush