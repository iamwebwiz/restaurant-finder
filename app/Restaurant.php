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
     * Restaurant belongs to User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
      // belongsTo(RelatedModel, foreignKey = user_id, keyOnRelatedModel = id)
      return $this->belongsTo(User::class);
    }
}
