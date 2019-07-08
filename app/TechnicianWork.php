<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\TechnicianWork
 *
 * @property int $id
 * @property int $technician_id
 * @property int $work_id
 * @property string|null $cost
 * @property string|null $startTime
 * @property string|null $endTime
 * @property string|null $rating
 * @property string|null $feedback
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Technician $technician
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicianWork newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicianWork newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicianWork query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicianWork whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicianWork whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicianWork whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicianWork whereFeedback($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicianWork whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicianWork whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicianWork whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicianWork whereTechnicianId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicianWork whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\TechnicianWork whereWorkId($value)
 * @mixin \Eloquent
 */
class TechnicianWork extends Model
{
    public function technician()
    {
        return $this->belongsTo('App\Technician');
    }
    public function work()
    {
        return $this->belongsTo('App\Work');
    }

}
