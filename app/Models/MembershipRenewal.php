<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Memberdirectory;

class MembershipRenewal extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'membership_renewals';

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
    protected $fillable = ['membership_no', 'renewal_type', 'member_payment_period', 'member_payment_info', 'member_payment_doc'];

    public function memberProfile()
    {
        return $this->belongsTo('App\Models\Memberdirectory', 'membership_no','membership_no');
    }
    
}
