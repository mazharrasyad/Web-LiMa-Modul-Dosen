<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class UpdateSprint extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sprint:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Melakukan update sprint jika sudah melewati tanggal akhir';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        DB::table('sprint')
        ->whereDate('tanggal_akhir', '<' , now())
        ->update(['status' => 'Selesai']);        

        // DB::table('sprint')
        // ->whereDate('tanggal_awal', '<=' , now())
        // ->update(['status' => 'Selesai']); 

        $sprint_selesai = DB::table('sprint')
        ->where('status', 'Selesai')
        ->select('project_id', DB::raw('count(*) as sprint_selesai'))        
        ->groupBy('project_id')
        ->get();

        $jumlah_sprint = DB::table('sprint')
        ->select('project_id', DB::raw('count(*) as jumlah_sprint'))       
        ->groupBy('project_id')
        ->get();

        $persen = 0;
        $project_id = 0;
    
        foreach ($sprint_selesai as $selesai){
            foreach ($jumlah_sprint as $jumlah){
                if ($selesai->project_id == $jumlah->project_id){
                    $project_id = $selesai->project_id;
                    $persen = ($selesai->sprint_selesai / $jumlah->jumlah_sprint) * 100;
                }            
            }
        }    

        DB::table('project')
        ->where('id', $project_id)
        ->update(['persen' => $persen]);        

        $this->info('Update sprint berhasil');
    }
}
