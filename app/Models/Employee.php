<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';

    protected $fillable = [
        'identity_number',
        'first_name',
        'last_name',
        'phone_number',
        'is_active'
    ];

    public static function store($identity_number, $first_name, $last_name, $phone_number): Employee
    {
        return self::create([
            'identity_number' => $identity_number,
            'first_name' => $first_name,
            'last_name' => $last_name,
            'phone_number' => $phone_number
        ]);
    }
}