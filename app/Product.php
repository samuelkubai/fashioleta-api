<?php

namespace App;

use Laravel\Scout\Searchable;
use TCG\Voyager\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Searchable, Translatable;

    /**
     * The table the model is related to.
     *
     * @var string
     */
    protected $table = 'products';

    /**
     * Fields attributes that translatable.
     *
     * @var array
     */
    protected $translatable = [
        'name',
        'description'
    ];

    /**
     * Mass assignable fields.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'price',
        'description'
    ];

    /**
     * Link of the product with it's product type.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function typeId()
    {
        return $this->belongsTo(Type::class);
    }

    /**
     * Link of the product with it's category.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function categoryId()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Link of the product with it's vendor.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vendor()
    {
        return $this->belongsTo(Vendor::class);
    }

    public function vendorId()
    {
        return $this->belongsTo(Vendor::class);
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();

        return array_merge($array, [
            'vendor_name' => $this->vendor->name,
            'vendor_background' => $this->vendor->background_color,
            'vendor_foreground' => $this->vendor->foreground_color,
            'category_name' => $this->category->name,
        ]);
    }
}
