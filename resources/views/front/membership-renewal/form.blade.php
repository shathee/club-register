<div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
    
    <div class="col-md-6">
        <input class="form-control" name="membership_no" type="hidden" id="membership_no" value="{{ $member->membership_no }}">

        {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('renewal_type') ? 'has-error' : ''}}">
    <label for="renewal_type" class="col-md-4 control-label">{{ 'Renewal Type' }}</label>
    <div class="col-md-6">
        <select name="renewal_type" class="form-control" id="renewal_type" required>
    @foreach (json_decode('{"_empty_":"Select","annual":"Annual Fee","upgrade":"Upgrade to Life Member"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($membershiprenewal->renewal_type) && $membershiprenewal->renewal_type == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('renewal_type', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('member_payment_period') ? 'has-error' : ''}}">
    <label for="member_payment_period" class="col-md-4 control-label">{{ 'Payment Period :' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="member_payment_period" type="hidden" id="member_payment_period" value="2019-20">
         <input class="form-control" name="member_payment_period_dummy" type="text" id="member_payment_period_dummy" value="2019-20" disabled="disabled">
        {!! $errors->first('member_payment_period', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="form-group {{ $errors->has('member_payment_info') ? 'has-error' : ''}}">
    <label for="member_payment_info" class="col-md-4 control-label">{{ 'Member Payment Info' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="member_payment_info" type="textarea" id="member_payment_info" required>{{ $membershiprenewal->member_payment_info or ''}}</textarea>
        {!! $errors->first('member_payment_info', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('member_payment_doc') ? 'has-error' : ''}}">
    <label for="member_payment_doc" class="col-md-4 control-label">{{ 'Member Payment Doc' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="member_payment_doc" type="file" id="member_payment_doc" value="{{ $membershiprenewal->member_payment_doc or ''}}" required>
        {!! $errors->first('member_payment_doc', '<p class="help-block">:message</p>') !!}
    </div>
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Submit' }}">
    </div>
</div>
