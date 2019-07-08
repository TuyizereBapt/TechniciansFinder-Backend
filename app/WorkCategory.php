<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\WorkCategory
 *
 * @property int $id
 * @property string $category
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Technician[] $technicians
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WorkCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WorkCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WorkCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WorkCategory whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WorkCategory whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WorkCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WorkCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WorkCategory whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class WorkCategory extends Model
{
    protected $hidden = ['pivot'];
    public function technicians()
    {
        return $this->belongsToMany('App\Technician');
    }
}
