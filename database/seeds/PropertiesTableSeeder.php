<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Carbon\Carbon;

class PropertiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset the table
        DB::table('properties')->truncate();

        // Insert 10 dummy datas

        $props = [];
        $faker = Factory::create();

        $date  = Carbon::now();
        $year  = $date->year;
        $month = $date->month;
        $day   = $date->subDays(15)->day;
        $hour  = $date->subHours(1)->hour;
        $date  = Carbon::create($year, $month, $day, $hour);

        for ($i=1; $i <= 15 ; $i++) {
          $image       = 'feature'.rand(1, 9).'.jpg';
          $size        = rand(15,200).'m x '.rand(15,200).'m';

          $date->addDays(1);
          $createdDate = clone($date);
          $props[] = [
              'code'       => 'R-'.rand(10000, 99999).'-prop',
              'author_id'  => rand(1, 3),
              'name'       => $faker->sentence(rand(6, 10)),
              'price'      => rand(20000, 500000),
              'slug'       => $faker->slug(),
              'excerpt'    => $faker->text(rand(200, 250)),
              'image'      => $image,
              'objection'  => rand(0, 1),
              'bedroom'    => rand(1, 4),
              'bathroom'   => rand(1, 6),
              'size'       => $size,
              'details'    => $faker->paragraphs(rand(10, 15), true),
              'created_at' => $createdDate,
              'updated_at' => $createdDate,

          ];
        }

        DB::table('properties')->insert($props);
    }
}
