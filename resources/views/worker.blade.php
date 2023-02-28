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
        <div class="col-lg-12">
            <p class="lead mb-0">Lazy workerssss</p>
            <form>
                <div class="form-group">
                    <label for="inputWorkerFullname">Workers full name</label>
                    <input type="text" class="form-control" id="inputWorkerFullname"  placeholder="Enter workers full name">
                                    </div>
                <div class="form-group">
                    <label for="inputRole">Role</label>
                    <input type="text" class="form-control" id="inputRole" placeholder="Role">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
