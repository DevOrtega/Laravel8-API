<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('configurations')->insert([
            'id_related' => 1,
            'type_related' => 'SYSTEM',
            'name' => 'Sistema1',
            'value' => 'Sin especificar',
            'description' => 'Este es el primer sistema',
        ]);

        DB::table('configurations')->insert([
            'id_related' =>2,
            'type_related' => 'USER',
            'name' => 'Pablo',
            'value' => 'Sin especificar',
            'description' => 'Este es el primer usuario',
        ]);

        DB::table('configurations')->insert([
            'id_related' => 3,
            'type_related' => 'CLIENT',
            'name' => 'Paco2000',
            'value' => 'Sin especificar',
            'description' => 'Este es el primer cliente',
        ]);

        DB::table('configurations')->insert([
            'id_related' => 4,
            'type_related' => 'OPERATOR',
            'name' => 'Operador1',
            'value' => 'Sin especificar',
            'description' => 'Este es el primer operador',
        ]);

        DB::table('configurations')->insert([
            'id_related' => 5,
            'name' => 'María',
            'value' => 'Sin especificar'
        ]);
    }
}
