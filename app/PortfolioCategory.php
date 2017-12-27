<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{





    /**
    * Get the portfolio for the brand.
    **/
    public function portfolio()
    {
        return $this->hasMany('App\Portfolio','category_id','id');
    }
}
