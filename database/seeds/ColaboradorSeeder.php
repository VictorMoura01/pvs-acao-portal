<?php

use Illuminate\Database\Seeder;

class ColaboradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Colaborador::class, 2)->create()->each(function ($colaborador) {
            $colaborador->save();
        });
    }
}
