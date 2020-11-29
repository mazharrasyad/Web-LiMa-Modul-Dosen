<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
	$this->call([
            UserSeeder::class,
            ProjectSeeder::class,
            SprintSeeder::class,
            TeamSeeder::class,
            MemberTeamSeeder::class,
            MemberTeamNilaiSeeder::class,
        ]);
    }
    /*
        === Diagram Seeder ===
        Administrator 1
        Administrator 2
        Dosen 1
            Member Team Nilai 1 Team 1
            Member Team Nilai 2 Team 1
            Member Team Nilai 3 Team 1
            Member Team Nilai 4 Team 1
            Member Team Nilai 1 Team 2
        Dosen 2
            Member Team Nilai 1 Team 1
            Member Team Nilai 2 Team 1
            Member Team Nilai 3 Team 1
            Member Team Nilai 4 Team 1
        Scrum Master 1
            Team 1
                Member Team 1
                    Member Team Nilai 1 Dosen 1
                    Member Team Nilai 1 Dosen 2
                Member Team 2
                    Member Team Nilai 2 Dosen 1
                    Member Team Nilai 2 Dosen 2
                Member Team 3
                    Member Team Nilai 3 Dosen 1
                    Member Team Nilai 3 Dosen 2
                Member Team 4
                    Member Team Nilai 4 Dosen 1
                    Member Team Nilai 4 Dosen 2
            Team 3
        Scrum Master 2
            Team 2
                Member Team 1
                    Member Team Nilai 1 Dosen 1
                Member Team 2
            Team 4
        Product Owner 1
            Project 1
                Team 1
                    Scrum Master 1
                        Team 1
                            Member Team 1
                                Member Team Nilai 1 Dosen 1
                                Member Team Nilai 1 Dosen 2
                            Member Team 2
                                Member Team Nilai 2 Dosen 1
                                Member Team Nilai 2 Dosen 2
                            Member Team 3
                                Member Team Nilai 3 Dosen 1
                                Member Team Nilai 3 Dosen 2
                            Member Team 4
                                Member Team Nilai 4 Dosen 1
                                Member Team Nilai 4 Dosen 2
                        Team 3
            Project 3
        Product Owner 2
            Project 2
                Team 2
                    Scrum Master 2
                        Team 2
                            Member Team 1
                                Member Team Nilai 1 Dosen 1
                            Member Team 2
                        Team 4
            Project 4
    */
}
