<?php

namespace Database\Seeders;

use App\Models\Country;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->truncate();
        Model::unguard();

        $this->makeCountry();
    }

    protected function makeCountry()
    {
        $countries_list = json_decode(file_get_contents(base_path('public/json/country.json')), true);

        for ($i = 0; $i < count($countries_list); $i++) {

            $country_data[] = [
                'name' => $countries_list[$i]['name'],
                'slug' => Str::slug($countries_list[$i]['name']),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
        }

        $countries = array_chunk($country_data, ceil(count($country_data) / 3));

        foreach ($countries as $country) {
            Country::insert($country);
        }
    }
}
