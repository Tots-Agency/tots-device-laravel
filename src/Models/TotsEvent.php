<?php

namespace Tots\Device\Models;

use Illuminate\Database\Eloquent\Model;
use Tots\Auth\Models\TotsUser;

/**
 * Description of Model
 * @property int $id ID of item
 * @property int $user_id ID of user
 * @property string $type Type of event
 * @property mixed $payload Event payload
 * @property mixed $created_at Description for variable
 * @property mixed $updated_at Description for variable
 *
 * @author matiascamiletti
 */
class TotsEvent extends Model
{
    protected $table = 'tots_event';

    protected $fillable = ['user_id', 'type', 'payload'];

    protected $casts = ['payload' => 'array'];
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    //public $timestamps = false;

    /**
    * 
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
    public function user()
    {
        return $this->belongsTo(TotsUser::class, 'user_id');
    }


    
}