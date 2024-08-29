<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usaStates = [
            "AL" => 'Alabama',
            "AK" => 'Alaska',
            "AZ" => 'Arizona',
            "AR" => 'Arkansas',
            "CA" => 'California',
        ];

        $countries = [
            ['code' => 'geo', 'name' => 'Géorgie', 'states' => null],
            ['code' => 'ind', 'name' => 'Inde', 'states' => null],
            ['code' => 'usa', 'name' => 'Etats-Unis', 'states' => json_encode($usaStates)],
            ['code' => 'ger', 'name' => 'Allemagne', 'states' => null],
        ];
        Country::insert($countries);
    }
}
