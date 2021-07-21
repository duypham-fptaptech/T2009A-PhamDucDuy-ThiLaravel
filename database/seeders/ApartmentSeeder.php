<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'apartments';
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table($tableName)->truncate();

        \Illuminate\Support\Facades\DB::table($tableName)->insert([
            [
                'name' => 'Home 1',
                'address' => 'Block 1',
                'price' => 10000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 1',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Not sold yet',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 2',
                'address' => 'Block 2',
                'price' => 20000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 2',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Sold',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 3',
                'address' => 'Block 3',
                'price' => 30000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 3',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Not sold yet',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 4',
                'address' => 'Block 4',
                'price' => 40000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 4',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Sold',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 5',
                'address' => 'Block 5',
                'price' => 50000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 5',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Not sold yet',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 6',
                'address' => 'Block 6',
                'price' => 60000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 6',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Sold',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 7',
                'address' => 'Block 7',
                'price' => 70000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 7',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Not sold yet',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 8',
                'address' => 'Block 8',
                'price' => 80000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 8',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Sold',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 9',
                'address' => 'Block 9',
                'price' => 90000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 9',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Not sold yet',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 10',
                'address' => 'Block 10',
                'price' => 100000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 10',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Sold',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 11',
                'address' => 'Block 11',
                'price' => 110000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 11',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Not sold yet',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 12',
                'address' => 'Block 12',
                'price' => 120000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 12',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Sold',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 13',
                'address' => 'Block 13',
                'price' => 130000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 13',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Not sold yet',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 14',
                'address' => 'Block 14',
                'price' => 140000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 14',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Sold',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 15',
                'address' => 'Block 15',
                'price' => 150000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 15',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Not sold yet',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 16',
                'address' => 'Block 16',
                'price' => 160000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 16',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Sold',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 17',
                'address' => 'Block 17',
                'price' => 170000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 17',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Not sold yet',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 18',
                'address' => 'Block 18',
                'price' => 180000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 18',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Sold',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 19',
                'address' => 'Block 19',
                'price' => 190000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 19',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Not sold yet',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
            [
                'name' => 'Home 20',
                'address' => 'Block 20',
                'price' => 200000,
                'generalInformation' => 'Luxury apartments',
                'detailInformation' => 'Luxury apartments at block 20',
                'avatar' => 'https://png.pngtree.com/png-clipart/20190920/original/pngtree-2-5d-cartoon-building-material-png-png-image_4615168.jpg',
                'status' => 'Sold',
                'created_at' => \Illuminate\Support\Carbon::now(),
                'updated_at' => \Illuminate\Support\Carbon::now(),
            ],
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
