@extends('layouts.app')

@section('content')
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to sites page!</h1>

        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <h1>Construction sites:</h1>
        <table class="table table-bordered table-primary w-4">
            <thead>
            <tr>
                <th>#</th>
                <th>Site name</th>
                <th>Site started</th>
                <th>Site finished</th>
            </tr>
            </thead>
            @foreach($sites as $site)
                <tr>
                    <td>{{$site->id}}</td>
                    <td>{{$site->site_name}}</td>
                    <td>{{$site->site_start_date}}</td>
                    <td>{{$site->site_end_date}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
