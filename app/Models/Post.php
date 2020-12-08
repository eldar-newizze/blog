<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property $title
 * @property $text
 * @property $img
 * @property $category_id
 * @property $user_id
 * @property $status
 *
 * Class Post
 * @package App\Models
 */
class Post extends Model
{
    use HasFactory;

    /**
     * @param $query
     * @return mixed
     */
    public function scopeIsActive($query)
    {
        return $query->where('status', 1);
    }

    /**
     * @return BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
