<div class="form-group {{ $errors->has('id') ? 'has-error' : ''}}">
    <label for="id" class="col-md-4 control-label">{{ 'Id' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="id" type="text" id="id" value="{{ $membershiprenewalmanagement->id or ''}}" required>
        {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('renewal_type') ? 'has-error' : ''}}">
    <label for="renewal_type" class="col-md-4 control-label">{{ 'Renewal Type' }}</label>
    <div class="col-md-6">
        <select name="renewal_type" class="form-control" id="renewal_type" required>
    @foreach (json_decode('{"_empty_":"Select","annual":"Annual Fee","upgrade":"Upgrade to Life Member"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($membershiprenewalmanagement->renewal_type) && $membershiprenewalmanagement->renewal_type == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('renewal_type', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('member_payment_info') ? 'has-error' : ''}}">
    <label for="member_payment_info" class="col-md-4 control-label">{{ 'Member Payment Info' }}</label>
    <div class="col-md-6">
        <textarea class="form-control" rows="5" name="member_payment_info" type="textarea" id="member_payment_info" required>{{ $membershiprenewalmanagement->member_payment_info or ''}}</textarea>
        {!! $errors->first('member_payment_info', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('member_payment_doc') ? 'has-error' : ''}}">
    <label for="member_payment_doc" class="col-md-4 control-label">{{ 'Member Payment Doc' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="member_payment_doc" type="file" id="member_payment_doc" value="{{ $membershiprenewalmanagement->member_payment_doc or ''}}" required>
        {!! $errors->first('member_payment_doc', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('is_submission_confirmed') ? 'has-error' : ''}}">
    <label for="is_submission_confirmed" class="col-md-4 control-label">{{ 'Is Submission Confirmed' }}</label>
    <div class="col-md-6">
        <select name="is_submission_confirmed" class="form-control" id="is_submission_confirmed" >
    @foreach (json_decode('{"yes":"Yes","no":"No"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($membershiprenewalmanagement->is_submission_confirmed) && $membershiprenewalmanagement->is_submission_confirmed == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('is_submission_confirmed', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('is_finance_approved') ? 'has-error' : ''}}">
    <label for="is_finance_approved" class="col-md-4 control-label">{{ 'Is Finance Approved' }}</label>
    <div class="col-md-6">
        <select name="is_finance_approved" class="form-control" id="is_finance_approved" >
    @foreach (json_decode('{"yes":"Yes","no":"No"}', true) as $optionKey => $optionValue)
        <option value="{{ $optionKey }}" {{ (isset($membershiprenewalmanagement->is_finance_approved) && $membershiprenewalmanagement->is_finance_approved == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
    @endforeach
</select>
        {!! $errors->first('is_finance_approved', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
