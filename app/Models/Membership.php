<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Membership extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'memberships';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['membership_type', 'reg_email', 'reg_email_repeat', 'fullname', 'fullname_bn', 'mothers_name', 'fathers_name', 'spouse_name', 'mobile_no', 'gender', 'religion','blood_group', 'present_address', 'present_district', 'permanent_address', 'permanent_district', 'sust_department', 'sust_reg_no', 'sust_session', 'sust_graduation_year', 'member_photo', 'member_payment_doc', 'member_payment_info', 'is_submission_confirmed', 'is_finance_approved'];

    
}
