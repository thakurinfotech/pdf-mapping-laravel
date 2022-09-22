<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use App\Models\Company;

class ShareHolder extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id', 
        'folio_number',
        'share_holder_name',
        'no_of_shares_held',
        'amount', 
        'no_of_shares_held_from',
        'no_of_shares_held_to',
        'subscription_allotment_date',
    ];

    /**
     * Get ShareHolder Company Name
     */
    public function company()
    {
        return $this->hasOne(Company::class,'id','company_id');
    }

}
