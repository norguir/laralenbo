@extends('layouts.app')

@section('content')

<div class="content-center">
    <div class="container">
        <div class="row">
            <div class="ml-auto col-lg-8 col-md-8 col-sm-8 col-12 mr-auto">
                <div class="card">

                    <div class="card-header">{{__('iou.ttl_create')}}</div>

                    <div class="card-body">

                        @include ('ious.form')

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection