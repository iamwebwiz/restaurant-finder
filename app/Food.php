<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    /**
     * Food belongs to Restaurant.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function restaurant()
    {
      // belongsTo(RelatedModel, foreignKey = restaurant_id, keyOnRelatedModel = id)
      return $this->belongsTo(Restaurant::class);
    }
}
