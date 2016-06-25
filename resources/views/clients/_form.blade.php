<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">{{trans('messages.name')}}</label>
    <div class="col-md-6">
        {!!Form::text('name', null, ['class' => 'form-control', 'autofocus' => 'autofocus'])!!}
        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('identification') ? ' has-error' : '' }}">
    <label for="identification" class="col-md-4 control-label">{{trans('messages.identification')}}</label>
    <div class="col-md-6">
        {!!Form::text('identification', null, ['class' => 'form-control'])!!}
        @if ($errors->has('identification'))
            <span class="help-block">
                <strong>{{ $errors->first('identification') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">{{trans('messages.email')}}</label>
    <div class="col-md-6">
        {!!Form::text('email', null, ['class' => 'form-control'])!!}
        @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
    <label for="address" class="col-md-4 control-label">{{trans('messages.address')}}</label>
    <div class="col-md-6">
        {!!Form::text('address', null, ['class' => 'form-control'])!!}
        @if ($errors->has('address'))
            <span class="help-block">
                <strong>{{ $errors->first('address') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
    <label for="phone" class="col-md-4 control-label">{{trans('messages.phone')}}</label>
    <div class="col-md-6">
        {!!Form::text('phone', null, ['class' => 'form-control'])!!}
        @if ($errors->has('phone'))
            <span class="help-block">
                <strong>{{ $errors->first('phone') }}</strong>
            </span>
        @endif
    </div>
</div>

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
