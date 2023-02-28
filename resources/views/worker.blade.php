@extends('layouts.app')

@section('content')
<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome workers page!</h1>

        </div>
    </div>
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        <!-- Blog entries-->
        <h1>Workers:</h1>
        <table class="table table-bordered table-primary w-4">
            <thead>
            <tr>
                <th>#</th>
                <th>Vardas Pavarde</th>
                <th>Profesija</th>
            </tr>
            </thead>
            @foreach($workers as $worker)
                <tr>
                    <td>{{$worker->id}}</td>
                    <td>{{$worker->full_name}}</td>
                    <td>{{$worker->role}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
