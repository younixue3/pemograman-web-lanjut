<?php

namespace Database\Seeders;

use App\Models\M2M_UserTipeUser;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class M2M_UserTipeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        M2M_UserTipeUser::insert([
            ['user_id' => 6, 'tipe_user_id' => 2, 'created_at' => Carbon::now()],
            ['user_id' => 6, 'tipe_user_id' => 3, 'created_at' => Carbon::now()],
            ['user_id' => 1, 'tipe_user_id' => 1, 'created_at' => Carbon::now()],
            ['user_id' => 2, 'tipe_user_id' => 1, 'created_at' => Carbon::now()],
            ['user_id' => 3, 'tipe_user_id' => 1, 'created_at' => Carbon::now()],
            ['user_id' => 4, 'tipe_user_id' => 1, 'created_at' => Carbon::now()],
            ['user_id' => 5, 'tipe_user_id' => 1, 'created_at' => Carbon::now()]
        ]);
    }
}
