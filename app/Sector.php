<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Sector
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Leader[] $leaders
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sector newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sector newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sector query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sector whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sector whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sector whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Sector whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Sector extends Model
{
    protected $fillable = [
        'name'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leaders(){
        return $this->hasMany(Leader::class);
    }
    public function voters(){
        $this->hasMany(Voter::class);
    }

}
