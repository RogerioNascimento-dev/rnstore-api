<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('pt_BR');
        Product::create([
            'name' => 'Notebook Lenovo',
            'description' => 'Touchscreen Full Hd Led Ips 23,8 P2418ht Preto',
            'price' => $faker->randomFloat(2, 10, 5000),
            'estimate_delivery' => $faker->randomDigit(),
        ]);
        Product::create([
            'name' => 'Monitor AOC',
            'description' => ' E970SWNL LED 18.5" preto 220V',
            'price' => $faker->randomFloat(2, 10, 5000),
            'estimate_delivery' => $faker->randomDigit(),
        ]);
        Product::create([
            'name' => 'COMPUTADOR PICHAU GAMER',
            'description' => 'RYZEN 5 3600, GEFORCE GTX 1650 4GB, 8GB DDR4, HD 1TB, 400W, MAGPIE',
            'price' => $faker->randomFloat(2, 10, 5000),
            'estimate_delivery' => $faker->randomDigit(),
        ]);
        Product::create([
            'name' => 'PLACA DE VÍDEO',
            'description' => 'GEFORCE GTX 1650 4GB',
            'price' => $faker->randomFloat(2, 10, 5000),
            'estimate_delivery' => $faker->randomDigit(),
        ]);
        Product::create([
            'name' => 'Processador',
            'description' => 'AMD Ryzen 5 3600',
            'price' => $faker->randomFloat(2, 10, 5000),
            'estimate_delivery' => $faker->randomDigit(),
        ]);
        Product::create([
            'name' => 'Gabinete',
            'description' => 'Pichau Gaming Magpie 2',
            'price' => $faker->randomFloat(2, 10, 5000),
            'estimate_delivery' => $faker->randomDigit(),
        ]);
        Product::create([
            'name' => 'A fonte KCAS 400',
            'description' => 'Certificada com o selo 80 Plus White + PFC Ativo, entregando 400 watts real, sendo uma das melhores opções do mercado Brasileiro,',
            'price' => $faker->randomFloat(2, 10, 5000),
            'estimate_delivery' => $faker->randomDigit(),
        ]);

        Product::create([
            'name' => 'RELÓGIO RAZER',
            'description' => 'NABU WATCH SMART WRISTWEAR, RZ18-01560200-R3U1',
            'price' => $faker->randomFloat(2, 10, 5000),
            'estimate_delivery' => $faker->randomDigit(),
        ]);
        Product::create([
            'name' => 'CAIXA DE SOM RAZER',
            'description' => 'NOMMO CHROMA 2.0, RZ05-02460100-R3U1',
            'price' => $faker->randomFloat(2, 10, 5000),
            'estimate_delivery' => $faker->randomDigit(),
        ]);
        Product::create([
            'name' => 'CAIXA DE SOM LOGITECH',
            'description' => 'MX SOUND 12W BLUETOOTH, 980-001287',
            'price' => $faker->randomFloat(2, 10, 5000),
            'estimate_delivery' => $faker->randomDigit(),
        ]);
    }
}
