<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function role()
    {
        return $this->hasOne(Role::class, 'role_code', 'role_code');
    }


    public static function getList($request)
    {
        $limit      = $request->length;
        $offset     = $request->start;

        $query = DB::table('users')
            ->select([
                '*',
                DB::raw("(SELECT roles.name FROM roles WHERE roles.role_code = users.role_code) AS role")
            ]);

        if (!empty($request->search['value'])) {
            $value_cari = $request->search['value'];
            $query->where('name', "LIKE", '%' . $value_cari . '%');
            $query->orWhere('email', "LIKE", '%' . $value_cari . '%');
        }

        $query->orderBy('id', 'desc');
        $query->offset($offset);
        $query->limit($limit);

        return $query->get();
    }


    public static function getCountList($request)
    {
        $query = DB::table('users')
            ->select(DB::raw("COUNT(id) AS total"));

        if (!empty($request->search['value'])) {
            $value_cari = $request->search['value'];
            $query->where('name', "LIKE", '%' . $value_cari . '%');
            $query->orWhere('email', "LIKE", '%' . $value_cari . '%');
        }

        $query->orderBy('id', 'desc');
        return $query->first()->total ?? 0;
    }
}
