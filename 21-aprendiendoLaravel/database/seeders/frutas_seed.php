<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class frutas_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i <=20 ; $i++) {
            DB::table('frutas')->insert(array(

                'nombre'=>'cereza' . $i,
                'descripcion'=>'descripcion de la fruta' . $i,
                'precio'=>$i,
                'fecha'=>date('Y-m-d')
            ));
        }

        $this->command->info('La tabla de frutas ha sido rellenada');
    }
}
