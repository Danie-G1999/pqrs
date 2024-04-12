<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoSolicitud;

class TipoSolicitudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definimos algunos tipos de solicitud de ejemplo
        $tipoSolicitud = [
            ['nombre' => 'Peticion'],
            ['nombre' => 'Queja'],
            ['nombre' => 'Reclamo'],
            ['nombre' => 'Vivencia'],
        ];

        // Insertamos los tipos de solicitud en la base de datos
        TipoSolicitud::insert($tipoSolicitud);
    }
}
