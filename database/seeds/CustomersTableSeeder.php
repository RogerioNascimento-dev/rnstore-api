<?php

use Illuminate\Database\Seeder;
use App\Customer;
class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create(['name' => 'Rogério Nascimento']);
        Customer::create(['name' => 'Maria Joana']);
        Customer::create(['name' => 'Carla Maria']);
        Customer::create(['name' => 'Vanessa Santos']);
        Customer::create(['name' => 'Alerquina Barbosa']);
        Customer::create(['name' => 'Alex Pereira']);
        Customer::create(['name' => 'Mário Leite']);
        Customer::create(['name' => 'Jussélia Santos']);
        Customer::create(['name' => 'Ednalva Maria']);
    }
}
