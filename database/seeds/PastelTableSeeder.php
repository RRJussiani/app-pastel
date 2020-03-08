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
            [
                'nome' => 'Pastel de carne', 
                'preco' => '8.50', 
                'foto' => 'pasteis/carne.jpg', 
                'descricao' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. '
            ],
            [
                'nome' => 'Pastel de frango', 
                'preco' => '8.00', 
                'foto' => 'pasteis/frango.jpg', 
                'descricao' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. '
            ],
            [
                'nome' => 'Pastel de queijo', 
                'preco' => '8.00', 
                'foto' => 'pasteis/queijo.jpg', 
                'descricao' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. '
            ],
            [
                'nome' => 'Pastel de pizza', 
                'preco' => '8.50', 
                'foto' => 'pasteis/pizza.jpg', 
                'descricao' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. '
            ],
            [
                'nome' => 'Pastel de camarão', 
                'preco' => '11.00', 
                'foto' => 'pasteis/camarao.jpg', 
                'descricao' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. '
            ]
        ];

        foreach($pasteis as $pastel){
            Pastel::create($pastel);
        }
    }
}
