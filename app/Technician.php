<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Technician
 *
 * @property int $id
 * @property string $f_name
 * @property string $l_name
 * @property string $birth_date
 * @property string $sex
 * @property string|null $phone
 * @property string $email
 * @property string $province
 * @property string $district
 * @property string $sector
 * @property string $cell
 * @property string $village
 * @property string $marital_status
 * @property string $work_place
 * @property float $work_place_lat
 * @property float $work_place_long
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\WorkCategory[] $workCategories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Work[] $works
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereBirthDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereCell($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereDistrict($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereFName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereLName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereMaritalStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereSector($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereVillage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereWorkPlace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereWorkPlaceLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician whereWorkPlaceLong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Technician CloseTo($value,$value,$value)
 * @mixin \Eloquent
 */
class Technician extends Model
{

    public function workCategories()
    {
        return $this->belongsToMany('App\WorkCategory');
    }
    public function scopeCloseTo($query, $latitude,$longitude, $radius = 25)
    {
        $haverSine = "(6371 * acos(cos(radians($latitude)) * cos(radians(work_place_lat)) * cos(radians(work_place_long) - radians($longitude)) + sin(radians($latitude)) * sin(radians(work_place_lat))))";
        return $query
            ->select('technicians.*')
            ->selectRaw("{$haverSine} AS distance")
            ->whereRaw("{$haverSine} < ?", [$radius]);
    }

    public function works()
    {
        return $this
            ->belongsToMany('App\Work','technician_works','technician_id')
            ->withTimestamps()
            ->withPivot('start_time', 'end_time','status','approved','rating','feedback');
        /*return $this
            ->belongsToMany('App\Work','technician_works','technician_id')
            ->selectRaw('technician_works.*,sum(technician_works.rating) as rating_count')
            ->withTimestamps()
            ->groupBy('technician_works.technician_id');*/
    }
}
