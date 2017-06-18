<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\User
 *
 * @mixin \Eloquent
 * @property int $user_id
 * @property string $email
 * @property string $name
 * @property string $provider_id
 * @property string $provider_uid
 * @property string $password
 * @property string $firebase_uid
 * @property int $login_count
 * @property string $last_login_location
 * @property string $last_login
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereFirebaseUid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereLastLogin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereLastLoginLocation($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereLoginCount($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereProviderId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereProviderUid($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\User whereUserId($value)
 */
class User extends Model
{
    /**
     * The Database table used by the model
     */
    protected $table = 'zeth_user';

    /**
     * Primary Key
     */
    public $primaryKey = 'user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email','name','provider_id','provider_uid','firebase_uid'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];
}
