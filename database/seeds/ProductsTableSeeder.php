<?php

use Illuminate\Database\Seeder;
use App\Product;
use Faker\Generator as Faker;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Notebook Lenovo',
            'description' => 'Touchscreen Full Hd Led Ips 23,8 P2418ht Preto',
            'price' => 2.750,
            'estimate_delivery' => 3,
        ]);
        Product::create([
            'name' => 'Monitor AOC',
            'description' => ' E970SWNL LED 18.5" preto 220V',
            'price' => 450.50,
            'estimate_delivery' => 15,
        ]);
        Product::create([
            'name' => 'COMPUTADOR PICHAU GAMER',
            'description' => 'RYZEN 5 3600, GEFORCE GTX 1650 4GB, 8GB DDR4, HD 1TB, 400W, MAGPIE',
            'price' => 2599.99,
            'estimate_delivery' => 19,
        ]);
        Product::create([
            'name' => 'PLACA DE VÍDEO',
            'description' => 'GEFORCE GTX 1650 4GB',
            'price' => 739.49,
            'estimate_delivery' => 6,
        ]);
        Product::create([
            'name' => 'Processador',
            'description' => 'AMD Ryzen 5 3600',
            'price' => 950.99,
            'estimate_delivery' => 13,
        ]);
        Product::create([
            'name' => 'Gabinete',
            'description' => 'Pichau Gaming Magpie 2',
            'price' => 1489.21,
            'estimate_delivery' => 10,
        ]);
        Product::create([
            'name' => 'A fonte KCAS 400',
            'description' => 'Certificada com o selo 80 Plus White + PFC Ativo, entregando 400 watts real, sendo uma das melhores opções do mercado Brasileiro,',
            'price' => 999.00,
            'estimate_delivery' => 14,
        ]);

        Product::create([
            'name' => 'RELÓGIO RAZER',
            'description' => 'NABU WATCH SMART WRISTWEAR, RZ18-01560200-R3U1',
            'price' => 165.15,
            'estimate_delivery' => 24,
        ]);
        Product::create([
            'name' => 'CAIXA DE SOM RAZER',
            'description' => 'NOMMO CHROMA 2.0, RZ05-02460100-R3U1',
            'price' => 1199.99,
            'estimate_delivery' => 12,
        ]);
        Product::create([
            'name' => 'CAIXA DE SOM LOGITECH',
            'description' => 'MX SOUND 12W BLUETOOTH, 980-001287',
            'price' => 299.00,
            'estimate_delivery' => 2,
        ]);
    }
}
