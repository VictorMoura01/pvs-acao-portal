<?php

use Illuminate\Database\Seeder;

class AreaColaboradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\AreaColaborador::class, 1)->create()->each(function ($areaColaborador) {
            $areaColaborador->save();
        });
    }
}
