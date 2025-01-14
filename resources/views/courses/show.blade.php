@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="mb-4">Show Course</h2>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $course->title }}</h5>
                    <p class="card-text">{{ $course->description }}</p>
                    <a href="{{ route('courses.index') }}" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection