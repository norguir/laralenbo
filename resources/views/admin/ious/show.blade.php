@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Ious {{ $ious->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/ious') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/ious/' . $ious->id . '/edit') }}" title="Edit Ious"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/ious', $ious->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-sm',
                                    'title' => 'Delete Ious',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $ious->id }}</td>
                                    </tr>
                                    <tr><th> Repayment Delay Unit </th><td> {{ $ious->repayment_delay_unit }} </td></tr><tr><th> Repayment Delay Value </th><td> {{ $ious->repayment_delay_value }} </td></tr><tr><th> Repayment Repeat </th><td> {{ $ious->repayment_repeat }} </td></tr><tr><th> Accepted At </th><td> {{ $ious->accepted_at }} </td></tr><tr><th> Subject </th><td> {{ $ious->subject }} </td></tr><tr><th> Amount </th><td> {{ $ious->amount }} </td></tr><tr><th> Borrower Id </th><td> {{ $ious->borrower_id }} </td></tr><tr><th> Compensation </th><td> {{ $ious->compensation }} </td></tr><tr><th> Currrency </th><td> {{ $ious->currrency }} </td></tr><tr><th> Initiated By </th><td> {{ $ious->initiated_by }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
