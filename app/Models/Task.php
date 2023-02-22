<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $location_id
 * @property integer $category_id
 * @property string $title
 * @property string $desc
 * @property string $from
 * @property string $until
 * @property integer $duration
 * @property integer $max_helpers
 * @property string $created_at
 * @property string $updated_at
 * @property Category $category
 * @property Location $location
 * @property User[] $users
 */
class Task extends Model
{
    use HasFactory;
    
    /**
     * @var array
     */
    protected $fillable = ['location_id', 'category_id', 'title', 'desc', 'from', 'until', 'duration', 'max_helpers', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function location()
    {
        return $this->belongsTo('App\Models\Location');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
