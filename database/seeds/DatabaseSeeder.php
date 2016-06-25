<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(InsurerTableSeeder::class);
        $this->call(PolicyTypeTableSeeder::class);
        $this->call(PaymentTypesTableSeed::class);

    }
}
