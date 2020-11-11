<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Table users
        DB::table('users')->insert([
        [ // Admin 1
            // 'id' => 1,
            'nama' => 'Admin 1',
            'role' => 'Administrator',
            'username' => 'admin1',
            'password' => Hash::make('password'),
            'email' => 'admin1@gmail.com',
            'foto' => 'http://lorempixel.com/640/480/',
            'no_hp' => '081234567891',
            'fingerprint_pin' => '1231',
            'remember_token' => Str::random(10),     
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[ // Admin 2
            // 'id' => 2,
            'nama' => 'Admin 2',
            'role' => 'Administrator',
            'username' => 'admin2',
            'password' => Hash::make('password'),
            'email' => 'admin2@gmail.com',
            'foto' => 'http://lorempixel.com/640/480/',
            'no_hp' => '081234567892',
            'fingerprint_pin' => '1232',
            'remember_token' => Str::random(10),     
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[ // Dosen 1
            // 'id' => 3,
            'nama' => 'Dosen 1',
            'role' => 'Dosen',
            'username' => 'dosen1',
            'password' => Hash::make('password'),
            'email' => 'dosen1@gmail.com',
            'foto' => 'http://lorempixel.com/640/480/',
            'no_hp' => '081234567893',
            'fingerprint_pin' => '1233',
            'remember_token' => Str::random(10),     
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[ // Dosen 2
            // 'id' => 4,
            'nama' => 'Dosen 2',
            'role' => 'Dosen',
            'username' => 'dosen2',
            'password' => Hash::make('password'),
            'email' => 'dosen2@gmail.com',
            'foto' => 'http://lorempixel.com/640/480/',
            'no_hp' => '081234567894',
            'fingerprint_pin' => '1234',
            'remember_token' => Str::random(10),     
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[ // Scrum Master 1
            // 'id' => 5,
            'nama' => 'Scrum Master 1',
            'role' => 'Scrum Master',
            'username' => 'scrummaster1',
            'password' => Hash::make('password'),
            'email' => 'scrummaster1@gmail.com',
            'foto' => 'http://lorempixel.com/640/480/',
            'no_hp' => '081234567895',
            'fingerprint_pin' => '1235',
            'remember_token' => Str::random(10),     
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[ // Scrum Master 2
            // 'id' => 6,
            'nama' => 'Scrum Master 2',
            'role' => 'Scrum Master',
            'username' => 'scrummaster2',
            'password' => Hash::make('password'),
            'email' => 'scrummaster2@gmail.com',
            'foto' => 'http://lorempixel.com/640/480/',
            'no_hp' => '081234567896',
            'fingerprint_pin' => '1236',
            'remember_token' => Str::random(10),     
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[ // Product Owner 1
            // 'id' => 7,
            'nama' => 'Product Owner 1',
            'role' => 'Product Owner',
            'username' => 'productowner1',
            'password' => Hash::make('password'),
            'email' => 'productowner1@gmail.com',
            'foto' => 'http://lorempixel.com/640/480/',
            'no_hp' => '081234567897',
            'fingerprint_pin' => '1237',
            'remember_token' => Str::random(10),    
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'), 
        ],[ // Product Owner 2
            // 'id' => 8,
            'nama' => 'Product Owner 2',
            'role' => 'Product Owner',
            'username' => 'productowner2',
            'password' => Hash::make('password'),
            'email' => 'productowner2@gmail.com',
            'foto' => 'http://lorempixel.com/640/480/',
            'no_hp' => '081234567898',
            'fingerprint_pin' => '1238',
            'remember_token' => Str::random(10),     
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[ // Mahasiswa 1
            // 'id' => 9,
            'nama' => 'Mahasiswa 1',
            'role' => 'Mahasiswa',
            'username' => 'mahasiswa1',
            'password' => Hash::make('password'),
            'email' => 'mahasiswa1@gmail.com',
            'foto' => 'http://lorempixel.com/640/480/',
            'no_hp' => '081234567899',
            'fingerprint_pin' => '1239',
            'remember_token' => Str::random(10),     
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],[ // Mahasiswa 2
            // 'id' => 10,
            'nama' => 'Mahasiswa 2',
            'role' => 'Mahasiswa',
            'username' => 'mahasiswa2',
            'password' => Hash::make('password'),
            'email' => 'mahasiswa2@gmail.com',
            'foto' => 'http://lorempixel.com/640/480/',
            'no_hp' => '081234567890',
            'fingerprint_pin' => '1230',
            'remember_token' => Str::random(10),     
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]]);
    }
}
