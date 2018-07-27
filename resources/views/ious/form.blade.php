<iou-create inline-template :iou="{{ $iou }}" route="{{ route('ious.store') }}" >
                        
    {!! Form::open(['route' => 'ious.store', '@submit.prevent' => 'create', 'class' => 'form-horizontal']) !!}

        <div class="form-group row ">
            
            {!! Form::label('amount', __('iou.lbl_amount'), ['class' => 'col-md-4 control-label']) !!}
            
            <div class="col-md-6">
                {!! Form::number('amount', null, [ 'v-model' => 'amount', ':class' => "validationClass('amount','form-control')"] ) !!}
                <div v-if="errors.has('amount')" class="invalid-feedback">
                    @{{ errors.get('amount') }}
                </div>
            </div>

        </div>


        <div class="form-group row ">
           
            {!! Form::label('subject', __('iou.lbl_subject'), ['class' => 'col-md-4 control-label']) !!}
            
            <div class="col-md-6">
                {!! Form::text('subject', null, [ 'v-model' => 'subject', 'class' => 'form-control']) !!}
                {!! $errors->first('subject', '<p class="help-block">:message</p>') !!}
            </div>

        </div>


        <div class="form-group row">
            
            {!! Form::label('occurence', __('iou.lbl_repayment_repeat'), ['class' => 'col-md-4 control-label']) !!}
            
            <div class="col-md-6">
                <div :class="validationClass('occurence','form-control')">

                    <div class="form-check-radio" style="display: inline-flex">
                        <label class="form-check-label">
                            {!! Form::radio('occurence', 'once', $iou->occurence == 'once' ? true : false, 
                            [ 'v-model' => 'occurence', 'class' => "form-check-input"]) !!}
                            {{__('iou.occurence_once')}}
                            <span class="form-check-sign"></span>
                        </label>
                    </div>
                    <div class="form-check-radio" style="display: inline-flex">
                        <label class="form-check-label">
                            {!! Form::radio('occurence', 'monthly', $iou->occurence == 'monthly' ? true : false, 
                            [ 'v-model' => 'occurence', 'class' => 'form-check-input']) !!}
                            {{__('iou.occurence_recurring')}}
                            <span class="form-check-sign"></span>
                        </label>
                    </div>

                    <div v-if="errors.has('occurence')" class="invalid-feedback">
                        @{{ errors.get('occurence') }}
                    </div>
                </div>
            </div>
            
        </div>

        <div v-if="occurence == 'once'" class="form-group row">

            {!! Form::label('repayment_delay', __('iou.lbl_repayment_delay'), ['class' => 'col-md-4 control-label']) !!}
           
            <div class="input-group col-md-6"> 

                <div class="form-group col-md-6">
                        
                    {!! Form::number('repayment_delay_value', $iou->repayment_delay_value, 
                        [ 'v-model'=> 'delay', ':class' => "validationClass('repayment_delay_value','form-control')"] ) !!}
                    
                </div>
                <div v-if="errors.has('repayment_delay_value')" class="invalid-feedback">
                    @{{ errors.get('repayment_delay_value') }}
                </div>
                <div class="form-group col-md-4">
                        {!! Form::select('repayment_delay_unit', [
                            "days" => __('iou.days'), 
                            "weeks" => __('iou.weeks'), 
                            "months" => __('iou.months') ], 
                        $iou->repayment_delay_unit, [ 'v-model' => 'delay_unit', ':class' => "validationClass('repayment_delay_unit','form-control')"] ) !!}
                        
                    
                </div>
                <div v-if="errors.has('repayment_delay_unit')" class="invalid-feedback">
                    @{{ errors.get('repayment_delay_unit') }}
                </div>
            </div>
        </div>

        <div v-if="occurence == 'monthly'" class="form-group row">            
            {!! Form::label('repayment_delay_value', '@{{ repaymentValue }}'.__('iou.lbl_repayment_recurring'), ['class' => 'col-md-4 control-label']) !!}
            <div class="col-md-2">
                {!! Form::number('repayment_delay_value', null, ['v-model' =>'delay', 'class' => 'form-control']) !!}
            </div>
            mois.
               
            {{-- <div id="sliderDelay" v-on:change="updateAmount" class="slider noUi-target noUi-ltr noUi-horizontal noUi-connect"></div> --}}
        </div>
        


        <div class="form-group">
            <div class="col-md-offset-4 col-md-4">
                {!! Form::submit(__('iou.btn_create'), ['class' => 'btn btn-primary']) !!}
            </div>
        </div>

    {!! Form::close() !!}

</iou-create>