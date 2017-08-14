<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * Mass assignable fields.
     *
     * @var array
     */
    protected $fillable = ['name'];

    /**
     * Link of the category to it's products.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
