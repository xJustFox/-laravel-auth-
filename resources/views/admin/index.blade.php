@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <a class="btn btn-sm btn-primary" href="{{route('admin.project.index')}}">project</a>
        </div>
    </div>
</div>
@endsection
