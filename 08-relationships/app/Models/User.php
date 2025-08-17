<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // public function phone(): HasOne 
    // {
    //     return $this->hasOne(Phone::class/*, 'user_id', 'id'*/); //Se ahorra debido al uso de convenciones
    // } 

    public function phones(): HasMany
    {
        return $this->hasMany(Phone::class/*, 'user_id', 'id'*/); //Se ahorra debido al uso de convenciones
    } 

    public function roles(): BelongsToMany {
        
        return $this->belongsToMany(Role::class)->withPivot('added_by');
    }

    // public function phoneSim(): HasOneThrough {
    //     return $this->hasOneThrough(Sim::class, Phone::class);
    // }

    public function phoneSims(): HasManyThrough {
        return $this->hasManyThrough(Sim::class, Phone::class);
    }

    // public function image(): MorphOne
    // {
    //     return $this->morphOne(Image::class, 'imageable');
    // }

    public function image(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
