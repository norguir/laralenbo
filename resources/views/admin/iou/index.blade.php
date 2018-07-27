@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Iou</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/iou/create') }}" class="btn btn-success btn-sm" title="Add New Iou">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/iou', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Repayment Delay Unit</th><th>Repayment Delay Value</th><th>Repayment Repeat</th><th>Accepted At</th><th>Subject</th><th>Amount</th><th>Borrower Id</th><th>Compensation</th><th>Currency</th><th>Initiated By</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($iou as $item)
                                    <tr>
                                        <td>{{ $loop->iteration or $item->id }}</td>
                                        <td>{{ $item->repayment_delay_unit }}</td><td>{{ $item->repayment_delay_value }}</td><td>{{ $item->repayment_repeat }}</td><td>{{ $item->accepted_at }}</td><td>{{ $item->subject }}</td><td>{{ $item->amount }}</td><td>{{ $item->borrower_id }}</td><td>{{ $item->compensation }}</td><td>{{ $item->currency }}</td><td>{{ $item->initiated_by }}</td>
                                        <td>
                                            <a href="{{ url('/admin/iou/' . $item->id) }}" title="View Iou"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/admin/iou/' . $item->id . '/edit') }}" title="Edit Iou"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            {!! Form::open([
                                                'method'=>'DELETE',
                                                'url' => ['/admin/iou', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                                        'type' => 'submit',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Iou',
                                                        'onclick'=>'return confirm("Confirm delete?")'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $iou->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
