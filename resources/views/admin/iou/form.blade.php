<div class="form-group {{ $errors->has('repayment_delay_unit') ? 'has-error' : ''}}">
    {!! Form::label('repayment_delay_unit', 'Repayment Delay Unit', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('repayment_delay_unit', json_decode('{"jour":"Jour","semaine":"Semaine","mois":"Mois"}', true), null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('repayment_delay_unit', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('repayment_delay_value') ? 'has-error' : ''}}">
    {!! Form::label('repayment_delay_value', 'Repayment Delay Value', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('repayment_delay_value', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('repayment_delay_value', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('repayment_repeat') ? 'has-error' : ''}}">
    {!! Form::label('repayment_repeat', 'Repayment Repeat', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('repayment_repeat', json_decode('{"once":"Once","recurring":"Recurring"}', true), null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('repayment_repeat', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('accepted_at') ? 'has-error' : ''}}">
    {!! Form::label('accepted_at', 'Accepted At', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('accepted_at', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('accepted_at', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('subject') ? 'has-error' : ''}}">
    {!! Form::label('subject', 'Subject', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('subject', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('subject', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('amount') ? 'has-error' : ''}}">
    {!! Form::label('amount', 'Amount', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('amount', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('borrower_id') ? 'has-error' : ''}}">
    {!! Form::label('borrower_id', 'Borrower Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('borrower_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('borrower_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('compensation') ? 'has-error' : ''}}">
    {!! Form::label('compensation', 'Compensation', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('compensation', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('compensation', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('currency') ? 'has-error' : ''}}">
    {!! Form::label('currency', 'Currency', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('currency', json_decode('{"EUR":"Euros","BTC":"Bitcoins"}', true), null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('currency', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('initiated_by') ? 'has-error' : ''}}">
    {!! Form::label('initiated_by', 'Initiated By', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('initiated_by', json_decode('{"borrower":"Borrower","lender":"Lender"}', true), null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('initiated_by', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('lender_id') ? 'has-error' : ''}}">
    {!! Form::label('lender_id', 'Lender Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('lender_id', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('lender_id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('money_released') ? 'has-error' : ''}}">
    {!! Form::label('money_released', 'Money Released', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        <div class="checkbox">
    <label>{!! Form::radio('money_released', '1') !!} Yes</label>
</div>
<div class="checkbox">
    <label>{!! Form::radio('money_released', '0', true) !!} No</label>
</div>
        {!! $errors->first('money_released', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('pdf') ? 'has-error' : ''}}">
    {!! Form::label('pdf', 'Pdf', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::text('pdf', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
        {!! $errors->first('pdf', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
