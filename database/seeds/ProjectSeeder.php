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
            'id' => 1,
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
            'id' => 2,
            'nama' => 'Project 2',
            'deskripsi' => 'Deskripsi Project 2',
            'tanggal_mulai' => 01/01/2020,
            'tanggal_akhir' => 02/29/2020,
            'jumlah_sprint' => 8,
            'budget' => 200000,
            'status' => 'Proses',
            'persen' => 75,
            'product_owner_id' => 7,
        ],[ // Project 3
            'id' => 3,
            'nama' => 'Project 3',
            'deskripsi' => 'Deskripsi Project 3',
            'tanggal_mulai' => 01/01/2020,
            'tanggal_akhir' => 03/31/2020,
            'jumlah_sprint' => 12,
            'budget' => 300000,
            'status' => 'Proses',
            'persen' => 50,
            'product_owner_id' => 7,
        ],[ // Project 4
            'id' => 4,
            'nama' => 'Project 4',
            'deskripsi' => 'Deskripsi Project 4',
            'tanggal_mulai' => 01/01/2020,
            'tanggal_akhir' => 04/30/2020,
            'jumlah_sprint' => 16,
            'budget' => 400000,
            'status' => 'Proses',
            'persen' => 25,
            'product_owner_id' => 8,
        ],[ // Project 5
            'id' => 5,
            'nama' => 'Project 5',
            'deskripsi' => 'Deskripsi Project 5',
            'tanggal_mulai' => 01/01/2020,
            'tanggal_akhir' => 05/31/2020,
            'jumlah_sprint' => 20,
            'budget' => 500000,
            'status' => 'Belum',
            'persen' => 0,
            'product_owner_id' => 8,
        ]]);
    }
}
