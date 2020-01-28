<?php

use Illuminate\Database\Seeder;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Equipe::class, 2)->create()->each(function ($equipe) {
            $equipe->save();
        });
    }
}
