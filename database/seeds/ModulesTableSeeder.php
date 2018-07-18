<?php

use Illuminate\Database\Seeder;
use App\Module;
class ModulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Module::create([
        	'name'			=> 'Modulo 1',
        	'description'			=> 'Descripcion del modulo 1'
        ]);
        Module::create([
        	'name'			=> 'Modulo 2',
        	'description'			=> 'Descripcion del modulo 2'
        ]);
    }
}
