<div class="form-group{{ $errors->has('policy_id') ? ' has-error' : '' }}">
    <label for="policy_id" class="col-md-4 control-label">{{trans('messages.policy')}}</label>
    <div class="col-md-6">
        {!! Form::select('policy_id', $policies, old('policy_id'), ['class' => 'form-control']) !!}
        @if ($errors->has('policy_id'))
            <span class="help-block">
                <strong>{{ $errors->first('policy_id') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('payment_type_id') ? ' has-error' : '' }}">
    <label for="payment_type_id" class="col-md-4 control-label">{{trans('messages.payment')}}</label>
    <div class="col-md-6">
        {!! Form::select('payment_type_id', $paymentTypes, old('payment_type_id'), ['class' => 'form-control']) !!}
        @if ($errors->has('payment_type_id'))
            <span class="help-block">
                <strong>{{ $errors->first('payment_type_id') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            {{trans('messages.save')}}
        </button>
    </div>
</div>
