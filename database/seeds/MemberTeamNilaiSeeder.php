<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MemberTeamNilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Table member_team_nilai
        DB::table('member_team_nilai')->insert([
        [ // Member Team Nilai 1 Member Team 1 Team 1
            // 'id' => 1,
            'dosen_id' => 3,
            'member_team_id' => 1,
            'nilai' => 100,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[ // Member Team Nilai 2 Member Team 1 Team 1
            // 'id' => 2,
            'dosen_id' => 4,
            'member_team_id' => 1,
            'nilai' => 90,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[ // Member Team Nilai 3 Member Team 2 Team 1
            // 'id' => 3,
            'dosen_id' => 3,
            'member_team_id' => 2,
            'nilai' => 90,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[ // Member Team Nilai 4 Member Team 2 Team 1
            // 'id' => 4,
            'dosen_id' => 4,
            'member_team_id' => 2,
            'nilai' => 80,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[ // Member Team Nilai 5 Member Team 3 Team 1
            // 'id' => 5,
            'dosen_id' => 3,
            'member_team_id' => 3,
            'nilai' => 80,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[ // Member Team Nilai 6 Member Team 3 Team 1
            // 'id' => 6,
            'dosen_id' => 4,
            'member_team_id' => 3,
            'nilai' => 70,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[ // Member Team Nilai 7 Member Team 4 Team 1
            // 'id' => 7,
            'dosen_id' => 3,
            'member_team_id' => 4,
            'nilai' => 70,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[ // Member Team Nilai 8 Member Team 4 Team 1
            // 'id' => 8,
            'dosen_id' => 4,
            'member_team_id' => 4,
            'nilai' => 60,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],

        [ // Member Team Nilai 9 Member Team 1 Team 2
            // 'id' => 9,
            'dosen_id' => 3,
            'member_team_id' => 5,
            'nilai' => 100,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]]);
    }
}
