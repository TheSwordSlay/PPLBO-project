<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\users;
use Carbon\Carbon;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        users::insert([
            'name' => 'sayori',
            'nim' => '11223344',
            'password' => '1234',
            'username' => 'suicidalgirl',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
