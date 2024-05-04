<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Employee::store('316463461', 'Eli', 'Cohen', '0584210296');
        Employee::store('316517284', 'Yossi', 'Cohen', '0501849586');
        Employee::store('312758694', 'Lior', 'Weiss', '0527583183');
        Employee::store('284710495', 'Slava', 'Engler', '0547581022');
        Employee::store('329471848', 'Ron', 'Malka', '0507728317');
        Employee::store('317458272', 'Liat', 'Levi', '0527221827');
        Employee::store('204857284', 'Eden', 'Katz', '0544721002');
        Employee::store('371827485', 'Shahar', 'Yoffe', '0500277128');
        Employee::store('211728475', 'Shaked', 'Zak', '0528475585');
        Employee::store('313777281', 'Ofir', 'Engler', '0584755512');
    }
}