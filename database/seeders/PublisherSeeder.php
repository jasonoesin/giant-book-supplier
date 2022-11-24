<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::create(
                [
                    "name"=>"Particular Books",
                    "address"=> "507 Lookout Street Kernersville, NC 27284",
                    "phone"=> "+1-202-555-0181",
                    "email"=> "particularbooks@gmail.com",
                    "image"=> "/assets/publisher/1.jpg",
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                    'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
                ],
        );

        Publisher::create(
            [
                "name"=>"Mountain Top",
                "address"=> "8701 East Bay-port Ave.Falls Church, VA 22041",
                "phone"=> "+1-202-555-0122",
                "email"=> "mountaintop@gmail.com",
                "image"=> "/assets/publisher/2.jpg",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
        );

        Publisher::create(
            [
                "name"=>"Atlantic's Books",
                "address"=> "134 Buttonwood Rd.Fairfield, CT 06824",
                "phone"=> "+1-202-555-0126",
                "email"=> "atlanticsbooks@gmail.com",
                "image"=> "/assets/publisher/3.jpg",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

        Publisher::create(
            [
                "name"=>"Victory Publishing",
                "address"=> "191 Littleton Ave.Hixson, TN 37343",
                "phone"=> "+1-202-555-0189",
                "email"=> "victorypublishing@gmail.com",
                "image"=> "/assets/publisher/4.jpg",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        );

    }
}
