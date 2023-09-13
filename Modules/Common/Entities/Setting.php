<?php

namespace Modules\Common\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Setting extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'key',
        'title',
        'value',
        'input_type',
        'extra_data'
    ];

    public function scopeWhereKeyEqualsValue($query, $key, $value)
    {
        return $query->where($key, $value);
    }
}
