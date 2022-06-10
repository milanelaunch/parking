<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Vendor;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vendors')->truncate();
        $users = [[
            'name' => 'rjd',
            'email' => 'rjd@gmail.com',
            'mobile' => "9966558877",
            'address' => "301 rjd",
            'latitude' => "3.22645",
            'longitude' => "6.54586",
            'is_verified' => "1",
            'password' => Hash::make("password"),
        ], [
            'name' => 'vr',
            'email' => 'vr@gmail.com',
            'mobile' => "8866558877",
            'address' => "vesu",
            'latitude' => "3.22645",
            'longitude' => "6.54586",
            'is_verified' => "1",
            'password' => Hash::make("password"),
        ], [
            'name' => 'PMV',
            'email' => 'PMV@gmail.com',
            'mobile' => "8866558877",
            'address' => "amroli",
            'latitude' => "3.22645",
            'longitude' => "6.54586",
            'is_verified' => "1",
            'password' => Hash::make("password"),
        ], [
            'name' => 'kenvas',
            'email' => 'kenvas@gmail.com',
            'mobile' => "8866558877",
            'address' => "kenvas road",
            'latitude' => "3.22645",
            'longitude' => "6.54586",
            'is_verified' => "1",
            'password' => Hash::make("password"),
        ], [
            'name' => 'petel samaj',
            'email' => 'petel@gmail.com',
            'mobile' => "8866558877",
            'address' => "petel samaj varacha",
            'latitude' => "3.22645",
            'longitude' => "6.54586",
            'is_verified' => "1",
            'password' => Hash::make("password"),
        ]];
        foreach ($users as $user) {
            Vendor::create($user);
        }
    }
}
