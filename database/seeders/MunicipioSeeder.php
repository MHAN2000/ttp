<?php

namespace Database\Seeders;

use App\Models\Municipio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MunicipioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            'ABASOLO',
            'ACUÑA',
            'ALLENDE',
            'ARTEAGA',
            'CANDELA',
            'CASTAÑOS',
            'CUATRO CIENEGAS',
            'ESCOBEDO',
            'FRANCISCO I. MADERO',
            'FRONTERA',
            'GENERAL CEPEDA',
            'GUERRERO',
            'HIDALGO',
            'JIMENEZ',
            'JUAREZ',
            'LAMADRID',
            'MATAMOROS',
            'MONCLOVA',
            'MORELOS',
            'MUZQUIZ',
            'NADADORES',
            'NAVA',
            'OCAMPO',
            'PARRAS',
            'PIEDRAS NEGRAS',
            'PROGRESO',
            'RAMOS ARIZPE',
            'SABINAS',
            'SACRAMENTO',
            'SALTILLO',
            'SAN BUENAVENTURA',
            'NUEVA ROSITA',
            'SAN PEDRO',
            'SIERRA MOJADA',
            'TORREON',
            'VIESCA',
            'VILLA UNION',
            'ZARAGOZA',
            'AGUASCALIENTES (POR ZACATECAS)',
            'AGUASCALIENTES (POR SLP)',
            'MEXICALI',
            'LA PAZ',
            'CAMPECHE',
            'TUXTLA GUTIERREZ',
            'CHIHUAHUA',
            'CD. JUAREZ',
            'COLIMA',
            'DURANGO',
            'CIUDAD DE MEXICO',
            'TOLUCA',
            'GUANAJUATO',
            'CHILPANCINGO',
            'PACHUCA',
            'GUADALAJARA',
            'MORELIA',
            'CUERNAVACA',
            'TEPIC',
            'MONTERREY',
            'OAXACA',
            'PUEBLA',
            'QUERETARO',
            'CHETUMAL',
            'CANCUN',
            'SAN LUIS POTOSI',
            'CULIACAN',
            'HERMOSILLO',
            'VILLAHERMOSA',
            'CIUDAD VICTORIA',
            'REYNOSA',
            'CD. MANTE',
            'TLAXCALA',
            'VERACRUZ',
            'XALAPA',
            'MERIDA',
            'ZACATECAS',
            'NUEVO LAREDO',
            'MAZATLAN',
            'CHIHUAHUA',
            'AEROPUERTO MARIANO ESCOBEDO',
        ];

        foreach($cities as $i => $city) {
            DB::table('municipios')->insert([
                'nombre' => $city,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
