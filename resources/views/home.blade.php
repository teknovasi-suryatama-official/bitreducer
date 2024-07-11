@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ Auth::check() ? 'You are ' . Str::title(auth()->user()->role_access) : 'Welcome' }}</div>
                
                <div class="card-body">
                    @if (Auth::check())
                        {{ __('Yay!, You are logged in now!') }}
                    @else
                        {{ __('You are not access, login now!') }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
