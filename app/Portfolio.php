<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Portfolio extends Model
{ 
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'portfolios';
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the category that the product belongs to.
     */
    public function categories()
    {
        return $this->belongsTo('App\PortfolioCategory','category_id');
    }
}
