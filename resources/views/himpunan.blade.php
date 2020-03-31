@extends('layouts.app')

@section('content')
    @include('layouts.headers.none')
    
    <div class="container-fluid mt--0">
        <!-- Search Bar -->
        <form role="search" method="GET"  action="/{{ $searchdata ?? '' }}">
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
        <!-- User Grid -->
        <div class="d-flex flex-row flex-wrap justify-content-around bd-highlight mb-3 mt-3" >
        @foreach($users->chunk(1) as $userChunk)                       
            @foreach($userChunk as $user) 
                <div class="p-2 bd-highlight">
                    <div class="thumbnail">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFoyBfMqP5xs9V6__Qpa7TLmfkpZrraZtIc3D9SfRHafMhL0Ee&s" alt="..." class="img-responsive">
                        <div class="caption text-center">
                            <h3>{{ $user->name }}</h3>
                            <div class="clearfix">
                                <div class="pull-left price">{{ $user->username }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach 
            
        @endforeach
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }}"></script>
@endpush