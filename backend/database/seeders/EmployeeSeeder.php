<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            Employee::query()->insert([
                'name' => Str::random(5),
                'surname' => Str::random(12),
                'position' => Str::random(15),
                'phone' => Str::random(9),
                'is_hired' => (bool) random_int(0, 1),
            ]);
        } catch (\Exception $exception) {
            echo $exception;
        }
    }
}
