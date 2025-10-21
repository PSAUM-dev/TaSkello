<?php

namespace App;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Vinkla\Hashids\Facades\Hashids;

trait HashidRouteBinding
{
    public function resolveRouteBinding($value, $field = null)
    {
        $id = Hashids::decode($value)[0] ?? null;

        if (! $id) {
            throw (new ModelNotFoundException())->setModel(static::class, [$value]);
        }

        return $this->where('id', $id)->firstOrFail();
    }

    public function getHashidAttribute()
    {
        return Hashids::encode($this->id);
    }
}
