<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    /**
     * Mass assignable fields of a model.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'logo',
        'background_color',
        'foreground_color'
    ];

    /**
     * Link to the vendor's products.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
