<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Member;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # Developer
        $dev = Admin::create([
            'address' => 'Darkweb',
            'bio' => 'Orang yang mengurus aplikasi ini :)',
            'sex' => 'Laki-laki',
            '_dev' => 1,
            '_token' => Str::random(18)
        ]);

        User::create([
            'name' => 'Developer',
            'email' => 'developer@test',
            'phone_number' => '+62 000 000 001',
            'password' => bcrypt('developer'),
            'admin_id' => $dev->id,
            'is_active' => 1,
        ]);

        # Admin
        $admin = Admin::create([
            'address' => 'Depweeb',
            'bio' => 'Orang yang mengoperasikan aplikasi :D',
            'sex' => 'Laki-laki'
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@test',
            'phone_number' => '+62 000 000 002',
            'password' => bcrypt('admin'),
            'admin_id' => $admin->id,
            'is_active' => 1,
        ]);

        # Member
        $member = Member::create([
            'member_code' => '091202',
            'address' => 'Depweeb',
            'institute' => 'UNHAS',
            'bio' => 'Orang yang mengoperasikan aplikasi :D',
            'sex' => 'Laki-laki',
            'place_of_birth' => 'Makassar',
            'date_of_birth' => '2000-11-01',
        ]);

        User::create([
            'name' => 'Member',
            'email' => 'member@test',
            'phone_number' => '+62 000 000 003',
            'password' => bcrypt('member'),
            'member_id' => $member->id,
            'is_active' => 1,
        ]);
    }
}
