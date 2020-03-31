@extends('layouts.app')

@section('content')
    @include('layouts.headers.none')
    
    <div class="container-fluid mt--0">
        <!-- User Grid -->
        <div class="d-flex flex-row flex-wrap justify-content-around bd-highlight mb-3 mt-3" > 
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">NPM</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">HIMPUNAN</th>
                            <th scope="col">EMAIL</th>
                            <th scope="col">ACHIEVEMENT</th>
                        </tr>
                    </thead>
                    @foreach($users->chunk(1) as $userChunk)                       
                        @foreach($userChunk as $user)
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        {{ $user->username }}
                                    </th>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->himpunan }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{!! nl2br(e($user->achievement)) !!}</td>
                                </tr>
                            </tbody>
                        @endforeach 
                    @endforeach
                </table>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }}"></script>
@endpush+