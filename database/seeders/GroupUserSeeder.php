<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $group = \App\Models\Group::create(['name' => 'Family']);
        $user = \App\Models\User::first();
        $group->users()->attach($user->id);
    }
}
