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
            ['nome' => 'Pastel de carne', 'preco' => '8.50', 'foto' => 'pasteis/carne.jpg'],
            ['nome' => 'Pastel de frango', 'preco' => '8.00', 'foto' => 'pasteis/frango.jpg'],
            ['nome' => 'Pastel de queijo', 'preco' => '8.00', 'foto' => 'pasteis/queijo.jpg'],
            ['nome' => 'Pastel de pizza', 'preco' => '8.50', 'foto' => 'pasteis/pizza.jpg'],
            ['nome' => 'Pastel de camarão', 'preco' => '11.00', 'foto' => 'pasteis/camarao.jpg']
        ];

        foreach($pasteis as $pastel){
            Pastel::create($pastel);
        }
    }
}
