<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sale;
use DateTime;
use Illuminate\Support\Facades\DB;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
        [
            'nombre_empleado'=> 'Juan Fernando',
            'nombre_cliente' => 'Pepito Perez',
            'nombre_producto' => 'Camisa de colores',
            'precio' => '15000',
            'fecha_compra' => new DateTime(),

        ],
        
        [
            'nombre_empleado'=> 'Carlitos',
            'nombre_cliente' => 'Pepito Perez',
            'nombre_producto' => 'Camisa de colores',
            'precio' => '20000',
            'fecha_compra' => new DateTime(),
        ],

        [
            'nombre_empleado'=> 'Julian',
            'nombre_cliente' => 'Pepito Perez',
            'nombre_producto' => 'Camisa de colores',
            'precio' => '12000',
            'fecha_compra' => new DateTime(),
        
        ]
        ]);
    
    }
}