<?php

namespace Database\Seeders;

use App\Models\School;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Csvseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        School::truncate();
 $report = fopen(public_path("data/Laravelcsv.csv"),"r");
 $datarow = true;
 while (($data = fgetcsv($report, 4000, ",")) !== FALSE){
 if(!$datarow){
 School::create([
 "name" => $data[0],
 "school" => $data[1],
 "city" => $data[2]
 ]);
}
$datarow=false;
} fclose($report);

    }
}
