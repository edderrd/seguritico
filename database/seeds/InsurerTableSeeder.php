<?php

use Illuminate\Database\Seeder;

class InsurerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('insurers')->insert($this->getData());
    }

    protected function getData()
    {
        return [
            ['id' => 1, 'name' => "INS", 'description' => 'INS'],
            ['id' => 2, 'name' => "Qualitas", 'description' => 'Qualitas'],
            ['id' => 3, 'name' => "ASSA", 'description' => 'ASSA'],
            ['id' => 4, 'name' => "Oceanica", 'description' => 'Oceanica'],
            ['id' => 5, 'name' => "Lafise", 'description' => 'Lafise'],
            ['id' => 6, 'name' => "Mapfre", 'description' => 'Mapfre'],
            ['id' => 7, 'name' => "BMI", 'description' => 'BMI'],
            ['id' => 8, 'name' => "Blue Cross", 'description' => 'Blue Cross'],
            ['id' => 9, 'name' => "Blue Shield", 'description' => 'Blue Shield'],
            ['id' => 10, 'name' => "Palig", 'description' => 'Palig'],
        ];
    }
}
