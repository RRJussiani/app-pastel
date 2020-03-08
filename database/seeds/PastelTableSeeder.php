<?php

use App\Models\Pastel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PastelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pasteis = [
            ['nome' => 'Pastel de carne', 'preco' => '8.00'],
            ['nome' => 'Pastel de frango', 'preco' => '8.50'],
            ['nome' => 'Pastel de queijo', 'preco' => '8.00'],
            ['nome' => 'Pastel de pizza', 'preco' => '9.00']
        ];

        foreach($pasteis as $pastel){
            Pastel::create($pastel);
        }
    }
}
