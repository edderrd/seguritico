<?php

use Illuminate\Database\Seeder;

class PolicyTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('policy_types')->insert($this->getData());
    }

    protected function getData()
    {
        return [
            ['id' => 1, 'name' => "Licencia"],
            ['id' => 2, 'name' => "Gastos médicos"],
            ['id' => 3, 'name' => "Vida"],
            ['id' => 4, 'name' => "Riesgos del Trabajo"],
            ['id' => 5, 'name' => "Accidentes"],
            ['id' => 6, 'name' => "Robo"],
            ['id' => 7, 'name' => "Equipo Electrónico"],
            ['id' => 8, 'name' => "Responsabilidad Civil General"],
        ];
    }
}
