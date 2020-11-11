<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Table project
        DB::table('project')->insert([
        [ // Project 1
            // 'id' => 1,
            'nama' => 'Project 1',
            'deskripsi' => 'Deskripsi Project 1',
            'tanggal_mulai' => Carbon::create('2020', '01', '01'),
            'tanggal_akhir' => Carbon::create('2020', '01', '31'),
            'jumlah_sprint' => 4,
            'budget' => 100000,
            'status' => 'Selesai',
            'persen' => 100,
            'product_owner_id' => 7,         
        ],[ // Project 2
            // 'id' => 2,
            'nama' => 'Project 2',
            'deskripsi' => 'Deskripsi Project 2',
            'tanggal_mulai' => Carbon::create('2020', '01', '01'),
            'tanggal_akhir' => Carbon::create('2020', '02', '29'),
            'jumlah_sprint' => 8,
            'budget' => 200000,
            'status' => 'Proses',
            'persen' => 75,
            'product_owner_id' => 7,
        ],[ // Project 3
            // 'id' => 3,
            'nama' => 'Project 3',
            'deskripsi' => 'Deskripsi Project 3',
            'tanggal_mulai' => Carbon::create('2020', '01', '01'),
            'tanggal_akhir' => Carbon::create('2020', '03', '31'),
            'jumlah_sprint' => 12,
            'budget' => 300000,
            'status' => 'Proses',
            'persen' => 50,
            'product_owner_id' => 7,
        ],[ // Project 4
            // 'id' => 4,
            'nama' => 'Project 4',
            'deskripsi' => 'Deskripsi Project 4',
            'tanggal_mulai' => Carbon::create('2020', '01', '01'),
            'tanggal_akhir' => Carbon::create('2020', '04', '30'),
            'jumlah_sprint' => 16,
            'budget' => 400000,
            'status' => 'Proses',
            'persen' => 25,
            'product_owner_id' => 7,
        ],[ // Project 5
            // 'id' => 5,
            'nama' => 'Project 5',
            'deskripsi' => 'Deskripsi Project 5',
            'tanggal_mulai' => Carbon::create('2020', '01', '01'),
            'tanggal_akhir' => Carbon::create('2020', '05', '31'),
            'jumlah_sprint' => 20,
            'budget' => 500000,
            'status' => 'Belum',
            'persen' => 0,
            'product_owner_id' => 7,
        ],[ // Project 6
            // 'id' => 6,
            'nama' => 'Project 6',
            'deskripsi' => 'Deskripsi Project 6',
            'tanggal_mulai' => Carbon::create('2020', '01', '01'),
            'tanggal_akhir' => Carbon::create('2020', '06', '30'),
            'jumlah_sprint' => 24,
            'budget' => 600000,
            'status' => 'Selesai',
            'persen' => 100,
            'product_owner_id' => 8,
        ],[ // Project 7
            // 'id' => 7,
            'nama' => 'Project 7',
            'deskripsi' => 'Deskripsi Project 7',
            'tanggal_mulai' => Carbon::create('2020', '01', '01'),
            'tanggal_akhir' => Carbon::create('2020', '07', '31'),
            'jumlah_sprint' => 28,
            'budget' => 700000,
            'status' => 'Proses',
            'persen' => 75,
            'product_owner_id' => 8,
        ],[ // Project 8
            // 'id' => 8,
            'nama' => 'Project 8',
            'deskripsi' => 'Deskripsi Project 8',
            'tanggal_mulai' => Carbon::create('2020', '01', '01'),
            'tanggal_akhir' => Carbon::create('2020', '08', '31'),
            'jumlah_sprint' => 32,
            'budget' => 800000,
            'status' => 'Proses',
            'persen' => 50,
            'product_owner_id' => 8,
        ],[ // Project 9
            // 'id' => 9,
            'nama' => 'Project 9',
            'deskripsi' => 'Deskripsi Project 9',
            'tanggal_mulai' => Carbon::create('2020', '01', '01'),
            'tanggal_akhir' => Carbon::create('2020', '09', '30'),
            'jumlah_sprint' => 36,
            'budget' => 900000,
            'status' => 'Proses',
            'persen' => 25,
            'product_owner_id' => 8,
        ],[ // Project 10
            // 'id' => 10,
            'nama' => 'Project 10',
            'deskripsi' => 'Deskripsi Project 10',
            'tanggal_mulai' => Carbon::create('2020', '01', '01'),
            'tanggal_akhir' => Carbon::create('2020', '10', '31'),
            'jumlah_sprint' => 40,
            'budget' => 1000000,
            'status' => 'Belum',
            'persen' => 0,
            'product_owner_id' => 8,
        ]]);
    }
}
