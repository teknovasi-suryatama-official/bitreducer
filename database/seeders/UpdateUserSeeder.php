<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User as DataUser;

class UpdateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $flight = DataUser::find(3);
        $flight->address = 'Cikarang Barat, Bekasi, Indonesia';
        $flight->position = 'Software Mobile Engineer';
        $flight->devision = 'Product GSS';
        $flight->save();
    }
}
