<div class="row">
    <div class="col-md-12">
        <div class="form-group {{ $errors->has('membership_type') ? 'has-error' : ''}}">
                <label for="membership_type" class="col-md-5 control-label">{{ 'Membership Type *' }}</label>
                <div class="col-md-5">
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
            <label for="reg_email" class="col-md-5 control-label">{{ 'Email Address*' }}</label>
            <div class="col-md-7">
                <input class="form-control" name="reg_email" type="text" id="reg_email" value="{{ $membership->reg_email or ''}}" required>
                {!! $errors->first('reg_email', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('reg_email_repeat') ? 'has-error' : ''}}">
            <label for="reg_email_repeat" class="col-md-5 control-label">{{ 'Re-Enter Email Address  *' }}</label>
            <div class="col-md-7">
                <input class="form-control" name="reg_email_repeat" type="text" id="reg_email_repeat" value="{{ $membership->reg_email_repeat or ''}}" required>
                {!! $errors->first('reg_email_repeat', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('fullname') ? 'has-error' : ''}}">
            <label for="fullname" class="col-md-5 control-label">{{ 'Full Name *' }}</label>
            <div class="col-md-7">
                <input class="form-control" name="fullname" type="text" id="fullname" value="{{ $membership->fullname or ''}}" required >
                {!! $errors->first('fullname', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('fullname_bn') ? 'has-error' : ''}}">
            <label for="fullname_bn" class="col-md-5 control-label">{{ 'Full Name (in Bangla)' }}</label>
            <div class="col-md-7">
                <input class="form-control" name="fullname_bn" type="text" id="fullname_bn" value="{{ $membership->fullname_bn or ''}}" >
                {!! $errors->first('fullname_bn', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('mothers_name') ? 'has-error' : ''}}">
            <label for="mothers_name" class="col-md-5 control-label">{{ 'Mothers Name' }}</label>
            <div class="col-md-7">
                <input class="form-control" name="mothers_name" type="text" id="mothers_name" value="{{ $membership->mothers_name or ''}}" >
                {!! $errors->first('mothers_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('fathers_name') ? 'has-error' : ''}}">
            <label for="fathers_name" class="col-md-5 control-label">{{ 'Fathers Name' }}</label>
            <div class="col-md-7">
                <input class="form-control" name="fathers_name" type="text" id="fathers_name" value="{{ $membership->fathers_name or ''}}" >
                {!! $errors->first('fathers_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('spouse_name') ? 'has-error' : ''}}">
            <label for="spouse_name" class="col-md-5 control-label">{{ 'Spouse Name' }}</label>
            <div class="col-md-7">
                <input class="form-control" name="spouse_name" type="text" id="spouse_name" value="{{ $membership->spouse_name or ''}}" >
                {!! $errors->first('spouse_name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('mobile_no') ? 'has-error' : ''}}">
            <label for="mobile_no" class="col-md-5 control-label">{{ 'Mobile No *' }}</label>
            <div class="col-md-7">
                <input class="form-control" name="mobile_no" type="text" id="mobile_no" value="{{ $membership->mobile_no or ''}}" required>
                {!! $errors->first('mobile_no', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('gender') ? 'has-error' : ''}}">
            <label for="gender" class="col-md-5 control-label">{{ 'Gender *' }}</label>
            <div class="col-md-7">
                <select name="gender" class="form-control" id="gender" required>
                    @foreach (json_decode('{"_empty_":"Select","female":"Female","male":"Male"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->gender) && $membership->gender == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('gender', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('religion') ? 'has-error' : ''}}">
            <label for="religion" class="col-md-5 control-label">{{ 'Religion' }}</label>
            <div class="col-md-7">
                <select name="religion" class="form-control" id="religion">
                    @foreach ($religions as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->religion) && $membership->religion == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('religion', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('blood_group') ? 'has-error' : ''}}">
            <label for="blood_group" class="col-md-5 control-label">{{ 'Blood Group' }}</label>
            <div class="col-md-7">
                <select name="blood_group" class="form-control" id="blood_group" >
                    @foreach ($blood_groups as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->blood_group) && $membership->blood_group == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('blood_group', '<p class="help-block">:message</p>') !!}
            </div>
        </div>

        <div class="form-group">
            <label for="" class="col-md-5 control-label text-primary">Special Note</label>
            <div class="col-md-7">
                <p class="text-danger">
                    Please Make sure that you have deposited 
                    <ul class="list-unstyled text-info">
                        <li>BDT 75000.00(for Life Membership) or</li>
                        <li>BDT 10000.00(for General Membership)</li>
                    </ul> in favor of the following account -
                </p>
                <p class="text-danger">
                    <ul class="list-unstyled b-acc-form text-primary">
                        <li>Account Title: Md Muklasur Rahman, Rashed Rafiuddin & Kazi Gulam Kadar</li>
                        <li>Account Number: 2161510170000</li>
                        <li>Branch: Ashulia Branch</li>
                        <li>Bank: Dutch-Bangla Bank Ltd.</li>
                    </ul> 

                </p>
            </div>
        </div>
        
        
    </div>
    <div class="col-md-6">
      
        <div class="form-group {{ $errors->has('present_address') ? 'has-error' : ''}}">
            <label for="present_address" class="col-md-5 control-label">{{ 'Present Address *' }}</label>
            <div class="col-md-7">
                <textarea class="form-control" rows="5" name="present_address" type="textarea" id="present_address" required>{{ $membership->present_address or ''}}</textarea>
                {!! $errors->first('present_address', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('present_district') ? 'has-error' : ''}}">
            <label for="present_district" class="col-md-5 control-label">{{ 'Present District ' }}</label>
            <div class="col-md-7">
                <select name="present_district" class="form-control" id="present_district" >
                       <option value="" >Select</option>
                    @foreach ($districts as $optionKey => $optionValue)
                       <option value="{{ $optionValue }}" {{ (isset($membership->present_district) && $membership->present_district == $optionValue) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                   
                </select>
                {!! $errors->first('present_district', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('permanent_address') ? 'has-error' : ''}}">
            <label for="permanent_address" class="col-md-5 control-label">{{ 'Permanent Address *' }}</label>
            <div class="col-md-7">
                <textarea class="form-control" rows="5" name="permanent_address" type="textarea" id="permanent_address" required>{{ $membership->permanent_address or ''}}</textarea>
                {!! $errors->first('permanent_address', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('permanent_district') ? 'has-error' : ''}}">
            <label for="permanent_district" class="col-md-5 control-label">{{ 'Permanent District *' }}</label>
            <div class="col-md-7">
                <select name="permanent_district" class="form-control" id="permanent_district" required>
                       <option value="" >Select</option>
							@foreach ($districts as $optionKey => $optionValue)
							   <option value="{{ $optionValue }}" {{ (isset($membership->present_district) && $membership->present_district == $optionValue) ? 'selected' : ''}}>{{ $optionValue }}</option>
							@endforeach
						</select>
                {!! $errors->first('permanent_district', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('sust_department') ? 'has-error' : ''}}">
            <label for="sust_department" class="col-md-5 control-label">{{ 'Sust Department *' }}</label>
            <div class="col-md-7">
                <select name="sust_department" class="form-control" id="sust_department" required>
                    @foreach ($departments as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->sust_department) && $membership->sust_department == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('sust_department', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('sust_reg_no') ? 'has-error' : ''}}">
            <label for="sust_reg_no" class="col-md-5 control-label">{{ 'Sust Reg No ' }}</label>
            <div class="col-md-7">
                <input class="form-control" name="sust_reg_no" type="text" id="sust_reg_no" value="{{ $membership->sust_reg_no or ''}}" >
                {!! $errors->first('sust_reg_no', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('sust_session') ? 'has-error' : ''}}">
            <label for="sust_session" class="col-md-5 control-label">{{ 'Sust Session *' }}</label>
            <div class="col-md-7">
                <select name="sust_session" class="form-control" id="sust_session" required>
                    @foreach ($sessions as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->sust_session) && $membership->sust_session == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('sust_session', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <!--
        <div class="form-group {{ $errors->has('sust_graduation_year') ? 'has-error' : ''}}">
            <label for="sust_graduation_year" class="col-md-5 control-label">{{ 'Sust Graduation Year' }}</label>
            <div class="col-md-7">
                <select name="sust_graduation_year" class="form-control" id="sust_graduation_year" >
                    @foreach (json_decode('{"technology":"Technology","tips":"Tips","health":"Health"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->sust_graduation_year) && $membership->sust_graduation_year == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('sust_graduation_year', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    -->
        
        <div class="form-group {{ $errors->has('member_photo') ? 'has-error' : ''}}">
            <label for="member_photo" class="col-md-5 control-label">{{ 'Member Photo * (Max File Size 5MB)' }}</label>
            <div class="col-md-7">
                <input class="form-control" name="member_photo" type="file" id="member_photo" value="{{ $membership->member_photo or ''}}" required>
                {!! $errors->first('member_photo', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('member_payment_info') ? 'has-error' : ''}}">
            <label for="member_payment_info" class="col-md-5 control-label">{{ 'Write Your payment Information*' }}<br/> <small>(Write the Branch/First Track/Online Payment info in this box)</small></label>
            <div class="col-md-7">
                <textarea class="form-control" rows="5" name="member_payment_info" type="textarea" id="member_payment_info" placeholder="Branch Name, Payment Mode, Payment Date etc" required>{{ $membership->member_payment_info or ''}}</textarea>
                {!! $errors->first('member_payment_info', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('member_payment_doc') ? 'has-error' : ''}}">
            <label for="member_payment_doc" class="col-md-5 control-label">{{ 'Member Payment Document *(Max File Size 5MB)' }}<br/> <small>(Upload the scanned copy of your Deposit Slip/Receipt
                <p class="text-danger">Please Keep & save The original Deopsit Slip properly. It may be needed in future procedures</p>
            </small></label>
            <div class="col-md-7">
                <input class="form-control" name="member_payment_doc" type="file" id="member_payment_doc" value="{{ $membership->member_payment_doc or ''}}" required>
                {!! $errors->first('member_payment_doc', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <!--
        <div class="form-group {{ $errors->has('is_submission_confirmed') ? 'has-error' : ''}}">
            <label for="is_submission_confirmed" class="col-md-5 control-label">{{ 'Is Submission Confirmed' }}</label>
            <div class="col-md-7">
                <select name="is_submission_confirmed" class="form-control" id="is_submission_confirmed" >
                    @foreach (json_decode('{"yes":"Yes","no":"No"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->is_submission_confirmed) && $membership->is_submission_confirmed == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('is_submission_confirmed', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="form-group {{ $errors->has('is_finance_approved') ? 'has-error' : ''}}">
            <label for="is_finance_approved" class="col-md-5 control-label">{{ 'Is Finance Approved' }}</label>
            <div class="col-md-7">
                <select name="is_finance_approved" class="form-control" id="is_finance_approved" >
                    @foreach (json_decode('{"yes":"Yes","no":"No"}', true) as $optionKey => $optionValue)
                        <option value="{{ $optionKey }}" {{ (isset($membership->is_finance_approved) && $membership->is_finance_approved == $optionKey) ? 'selected' : ''}}>{{ $optionValue }}</option>
                    @endforeach
                </select>
                {!! $errors->first('is_finance_approved', '<p class="help-block">:message</p>') !!}
            </div>
        </div>-->
    </div>
    
    <div class="col-md-offset-1 col-md-10">
        <div class="text-center form-group my-captcha">
            <label for="answer" class="col-md-5 control-label">{{ $question.' *' }}</label>
            <div class="col-md-5">
                <input class="form-control" name="answer" type="text" id="answer" value="" placeholder="Put Your answer here" required>
                {!! $errors->first('answer', '<p class="help-block">:message</p>') !!}
            </div>  
                
            
        </div>
        <div class="text-center form-group">
            <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Submit' }}">
        </div>
    </div>

</div>



