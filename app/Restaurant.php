<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    /**
     * Restaurant has many Foods.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function foods()
    {
      // hasMany(RelatedModel, foreignKeyOnRelatedModel = restaurant_id, localKey = id)
      return $this->hasMany(Food::class);
    }

    /**
     * Restaurant belongs to Owner.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
      // belongsTo(RelatedModel, foreignKey = owner_id, keyOnRelatedModel = id)
      return $this->belongsTo(User::class, 'user_id');
    }
}
