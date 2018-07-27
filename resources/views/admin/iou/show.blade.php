@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Iou {{ $iou->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/iou') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/iou/' . $iou->id . '/edit') }}" title="Edit Iou"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/iou', $iou->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Iou',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $iou->id }}</td>
                                    </tr>
                                    <tr><th> Repayment Delay Unit </th><td> {{ $iou->repayment_delay_unit }} </td></tr><tr><th> Repayment Delay Value </th><td> {{ $iou->repayment_delay_value }} </td></tr><tr><th> Repayment Repeat </th><td> {{ $iou->repayment_repeat }} </td></tr><tr><th> Accepted At </th><td> {{ $iou->accepted_at }} </td></tr><tr><th> Subject </th><td> {{ $iou->subject }} </td></tr><tr><th> Amount </th><td> {{ $iou->amount }} </td></tr><tr><th> Borrower Id </th><td> {{ $iou->borrower_id }} </td></tr><tr><th> Compensation </th><td> {{ $iou->compensation }} </td></tr><tr><th> Currency </th><td> {{ $iou->currency }} </td></tr><tr><th> Initiated By </th><td> {{ $iou->initiated_by }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
