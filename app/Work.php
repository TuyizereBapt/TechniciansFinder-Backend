<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Work
 *
 * @property int $id
 * @property int $client_id
 * @property int $work_category_id
 * @property string $title
 * @property string $description
 * @property string $image1
 * @property string $image2
 * @property string $image3
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereImage1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereImage2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereImage3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Work whereWorkCategoryId($value)
 * @mixin \Eloquent
 */
class Work extends Model
{
    protected $fillable = [
        'user_id', 'work_category_id', 'title', 'description',
    ];
    public function technicians()
    {
        return $this
            ->belongsToMany('App\Technician','technician_works','work_id')
            ->withTimestamps()
            ->withPivot('start_time', 'end_time','status','approved','rating','feedback');

        /*return $this
            ->belongsToMany('App\Technician','technician_works','work_id')
            ->selectRaw('technician_works.*,sum(technician_works.rating) as rating_count')
            ->withTimestamps()
            ->groupBy('technician_works.technician_id');*/
    }
}
