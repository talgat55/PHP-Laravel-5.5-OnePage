<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Portfolio extends Model
{
	use SoftDeletes;


    /**
     * Get the category that the product belongs to.
     */
    public function categories()
    {
        return $this->belongsTo('App\PortfolioCategory','category_id');
    }
}
