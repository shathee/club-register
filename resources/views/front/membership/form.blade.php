<div class="row">
    <div class="col-md-12">
        <div class="form-group {{ $errors->has('membership_type') ? 'has-error' : ''}}">
                <label for="membership_type" class="col-md-4 control-label">{{ 'Membership Type' }}</label>
                <div class="col-md-8">
                    <select name="membership_type" class="form-control" id="membership_type" required>
                        @foreach (json_decode('{"":"Select","general":"General","life":"Life"}', true) as $optionKey => $optionValue)
                            <option value="{{ $optionKey }}" {{ (isset($membership->membership_type) && $membership->membership_type == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                        @endforeach
                    </select>
                    {!! $errors->first('membership_type', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
    </div>    
    <div class="col-md-6">
        


        <div class="form-group {{ $errors->has('reg_email') ? 'has-error' : ''}}">
            <label for="reg_email" class="col-md-4 control-label">{{ 'Reg Email' }}</label>
            <div class="col-md-8">
                <input class="form-control" name="reg_email" type="text" id="reg_email" value="{{ $membership->reg_email or ''}}" required>
                {!! $errors->first('reg_email', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('reg_email_repeat') ? 'has-error' : ''}}">
            <label for="reg_email_repeat" class="col-md-4 control-label">{{ 'Reg Email Repeat' }}</label>
            <div class="col-md-8">
                <input class="form-control" name="reg_email_repeat" type="text" id="reg_email_repeat" value="{{ $membership->reg_email_repeat or ''}}" required>
                {!! $errors->first('reg_email_repeat', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('fullname') ? 'has-error' : ''}}">
            <label for="fullname" class="col-md-4 control-label">{{ 'Fullname' }}</label>
            <div class="col-md-8">
                <input class="form-control" name="fullname" type="text" id="fullname" value="{{ $membership->fullname or ''}}" required >
                {!! $errors->first('fullname', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('fullname_bn') ? 'has-error' : ''}}">
            <label for="fullname_bn" class="col-md-4 control-label">{{ 'Fullname Bn' }}</label>
            <div class="col-md-8">
                <input class="form-control" name="fullname_bn" type="text" id="fullname_bn" value="{{ $membership->fullname_bn or ''}}" >
                {!! $errors->first('fullname_bn', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('mothers_name') ? 'has-error' : ''}}">
            <label for="mothers_name" class="col-md-4 control-label">{{ 'Mothers Name' }}</label>
            <div class="col-md-8">
                <input class="form-control" name="mothers_name" type="text" id="mothers_name" value="{{ $membership->mothers_name or ''}}" >
                {!! $errors->first('mothers_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('fathers_name') ? 'has-error' : ''}}">
            <label for="fathers_name" class="col-md-4 control-label">{{ 'Fathers Name' }}</label>
            <div class="col-md-8">
                <input class="form-control" name="fathers_name" type="text" id="fathers_name" value="{{ $membership->fathers_name or ''}}" >
                {!! $errors->first('fathers_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('spouse_name') ? 'has-error' : ''}}">
            <label for="spouse_name" class="col-md-4 control-label">{{ 'Spouse Name' }}</label>
            <div class="col-md-8">
                <input class="form-control" name="spouse_name" type="text" id="spouse_name" value="{{ $membership->spouse_name or ''}}" >
                {!! $errors->first('spouse_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('mobile_no') ? 'has-error' : ''}}">
            <label for="mobile_no" class="col-md-4 control-label">{{ 'Mobile No' }}</label>
            <div class="col-md-8">
                <input class="form-control" name="mobile_no" type="text" id="mobile_no" value="{{ $membership->mobile_no or ''}}" required>
                {!! $errors->first('mobile_no', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
            <label for="gender" class="col-md-4 control-label">{{ 'Gender' }}</label>
            <div class="col-md-8">
                <select name="gender" class="form-control" id="gender" required>
                    @foreach (json_decode('{"_empty_":"Select","female":"Female","male":"Male"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->gender) && $membership->gender == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('religion') ? 'has-error' : ''}}">
            <label for="religion" class="col-md-4 control-label">{{ 'Religion' }}</label>
            <div class="col-md-8">
                <select name="religion" class="form-control" id="religion" required>
                    @foreach (json_decode('{"_empty_":"Select","islam":"Islam","hinduism":"Hinduism"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->religion) && $membership->religion == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('religion', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('present_address') ? 'has-error' : ''}}">
            <label for="present_address" class="col-md-4 control-label">{{ 'Present Address' }}</label>
            <div class="col-md-8">
                <textarea class="form-control" rows="5" name="present_address" type="textarea" id="present_address" required>{{ $membership->present_address or ''}}</textarea>
                {!! $errors->first('present_address', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('present_district') ? 'has-error' : ''}}">
            <label for="present_district" class="col-md-4 control-label">{{ 'Present District' }}</label>
            <div class="col-md-8">
                <select name="present_district" class="form-control" id="present_district" >
                    @foreach (json_decode('{"technology":"Technology","tips":"Tips","health":"Health"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->present_district) && $membership->present_district == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('present_district', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('permanent_address') ? 'has-error' : ''}}">
            <label for="permanent_address" class="col-md-4 control-label">{{ 'Permanent Address' }}</label>
            <div class="col-md-8">
                <textarea class="form-control" rows="5" name="permanent_address" type="textarea" id="permanent_address" required>{{ $membership->permanent_address or ''}}</textarea>
                {!! $errors->first('permanent_address', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        
    </div>
    <div class="col-md-6">
      
        <div class="form-group {{ $errors->has('permanent_address') ? 'has-error' : ''}}">
            <label for="permanent_address" class="col-md-4 control-label">{{ 'Permanent Address' }}</label>
            <div class="col-md-8">
                <textarea class="form-control" rows="5" name="permanent_address" type="textarea" id="permanent_address" required>{{ $membership->permanent_address or ''}}</textarea>
                {!! $errors->first('permanent_address', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('permanent_district') ? 'has-error' : ''}}">
            <label for="permanent_district" class="col-md-4 control-label">{{ 'Permanent District' }}</label>
            <div class="col-md-8">
                <select name="permanent_district" class="form-control" id="permanent_district" required>
                    @foreach (json_decode('{"technology":"Technology","tips":"Tips","health":"Health"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->permanent_district) && $membership->permanent_district == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('permanent_district', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('sust_department') ? 'has-error' : ''}}">
            <label for="sust_department" class="col-md-4 control-label">{{ 'Sust Department' }}</label>
            <div class="col-md-8">
                <select name="sust_department" class="form-control" id="sust_department" required>
                    @foreach (json_decode('{"technology":"Technology","tips":"Tips","health":"Health"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->sust_department) && $membership->sust_department == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('sust_department', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('sust_reg_no') ? 'has-error' : ''}}">
            <label for="sust_reg_no" class="col-md-4 control-label">{{ 'Sust Reg No' }}</label>
            <div class="col-md-8">
                <input class="form-control" name="sust_reg_no" type="text" id="sust_reg_no" value="{{ $membership->sust_reg_no or ''}}" required>
                {!! $errors->first('sust_reg_no', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('sust_session') ? 'has-error' : ''}}">
            <label for="sust_session" class="col-md-4 control-label">{{ 'Sust Session' }}</label>
            <div class="col-md-8">
                <select name="sust_session" class="form-control" id="sust_session" required>
                    @foreach (json_decode('{"technology":"Technology","tips":"Tips","health":"Health"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->sust_session) && $membership->sust_session == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('sust_session', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('sust_graduation_year') ? 'has-error' : ''}}">
            <label for="sust_graduation_year" class="col-md-4 control-label">{{ 'Sust Graduation Year' }}</label>
            <div class="col-md-8">
                <select name="sust_graduation_year" class="form-control" id="sust_graduation_year" >
                    @foreach (json_decode('{"technology":"Technology","tips":"Tips","health":"Health"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->sust_graduation_year) && $membership->sust_graduation_year == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('sust_graduation_year', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('member_photo') ? 'has-error' : ''}}">
            <label for="member_photo" class="col-md-4 control-label">{{ 'Member Photo' }}</label>
            <div class="col-md-8">
                <input class="form-control" name="member_photo" type="file" id="member_photo" value="{{ $membership->member_photo or ''}}" required>
                {!! $errors->first('member_photo', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('member_payment_doc') ? 'has-error' : ''}}">
            <label for="member_payment_doc" class="col-md-4 control-label">{{ 'Member Payment Doc' }}</label>
            <div class="col-md-8">
                <input class="form-control" name="member_payment_doc" type="file" id="member_payment_doc" value="{{ $membership->member_payment_doc or ''}}" required>
                {!! $errors->first('member_payment_doc', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <!--
        <div class="form-group {{ $errors->has('is_submission_confirmed') ? 'has-error' : ''}}">
            <label for="is_submission_confirmed" class="col-md-4 control-label">{{ 'Is Submission Confirmed' }}</label>
            <div class="col-md-8">
                <select name="is_submission_confirmed" class="form-control" id="is_submission_confirmed" >
                    @foreach (json_decode('{"yes":"Yes","no":"No"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->is_submission_confirmed) && $membership->is_submission_confirmed == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('is_submission_confirmed', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('is_finance_approved') ? 'has-error' : ''}}">
            <label for="is_finance_approved" class="col-md-4 control-label">{{ 'Is Finance Approved' }}</label>
            <div class="col-md-8">
                <select name="is_finance_approved" class="form-control" id="is_finance_approved" >
                    @foreach (json_decode('{"yes":"Yes","no":"No"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->is_finance_approved) && $membership->is_finance_approved == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('is_finance_approved', '<p class="help-block">:message</p>') !!}
            </div>
        </div>-->
    </div>
    
</div>


<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
