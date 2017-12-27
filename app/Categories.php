<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'portfolio_category';


    /**
    * Get the portfolio for the brand.
    **/
    public function portfolio()
    {
        return $this->hasMany('App\Portfolio','category_id','id');
    }
        
}
