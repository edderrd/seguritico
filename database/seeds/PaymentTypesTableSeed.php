<?php

use Illuminate\Database\Seeder;

class PaymentTypesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
          DB::table('payment_types')->insert($this->getData());
     }

     protected function getData()
     {
         return [
               ['id' => 1, 'name' => 'Anual', 'months' => 12],
               ['id' => 2, 'name' => 'Semestral', 'months' => 6],
               ['id' => 3, 'name' => 'Trimestral', 'months' => 3],
               ['id' => 4, 'name' => 'Mensual', 'months' => 1],
         ];
     }
}
