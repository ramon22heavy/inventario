<?php

use Illuminate\Database\Seeder;
use App\Planta;

class PlantaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	Planta::create([

        	'nombre' => 'pastas',
    		'descripcion' => 'procesamiento de pastas',
    		'localidad' => 'maracay calle x',
    		'user_id' => '1'

        	]);
        	Planta::create([

        	'nombre' => 'nuciven',
    		'descripcion' => 'procesamiento de nucitas',
    		'localidad' => 'maracay calle x',
    		'user_id' => '2'

        	]);

        	Planta::create([

        	'nombre' => 'molvenca',
    		'descripcion' => ',olinos de venezuela',
    		'localidad' => 'maracay calle x',
    		'user_id' => '3'

        	]);

        	Planta::create([

        	'nombre' => 'vitalin',
    		'descripcion' => 'alimentos para animales',
    		'localidad' => 'maracay calle x',
    		'user_id' => '4'

        	]);

        	Planta::create([

        	'nombre' => 'magdaleno',
    		'descripcion' => 'procesamiento de cacao',
    		'localidad' => 'magdaleno calle x',
    		'user_id' => '5'

        	]);
    }
}