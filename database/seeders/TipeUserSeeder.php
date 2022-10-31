<?php

namespace Database\Seeders;

use App\Models\TipeUser;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipeUser::insert([
           ['name' => 'Pembaca', 'created_at' => Carbon::now()],
           ['name' => 'Author', 'created_at' => Carbon::now()],
           ['name' => 'Supervisor', 'created_at' => Carbon::now()],
        ]);
    }
}
