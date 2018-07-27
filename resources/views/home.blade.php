@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @auth
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('home.dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('home.msg_welcome') }}
                    </div>
                </div>
            </div>
        @endauth
    </div>
</div>
@endsection
