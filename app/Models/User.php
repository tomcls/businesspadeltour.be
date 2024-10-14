<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;
use Storage;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function company():BelongsTo {
        return $this->belongsTo(Company::class,'company_id');
    }
    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function avatarUrl()
    {
        return $this->avatar
            ? Storage::disk('avatars')->url($this->avatar)
            : 'https://www.gravatar.com/avatar/'.md5(strtolower(trim($this->email)));
    }
    public function getDateCreatedAttribute() {
        return $this->created_at->format('d-m-Y');
    }
    public function getDateUpdatedAttribute() {
        return $this->updated_at->format('d-m-Y');
    }

    public function token() {
        return sha1($this->email.$this->password);
    }
    public function isAdmin():HasOne {
        return $this->HasOne(UserRole::class)->whereRole('admin');
    }
    public function roles():HasMany {
        return $this->hasMany(UserRole::class);
    }
    public function hasRole($role):HasOne {
        return $this->HasOne(UserRole::class)->whereRole($role);
    }
    public function hasRoles(...$roles):HasOne {
        return $this->HasOne(UserRole::class)->whereIn('role',$roles);
    }
}
