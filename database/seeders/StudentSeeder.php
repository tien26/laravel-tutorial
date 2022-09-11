<?php

namespace Database\Seeders;

use App\Models\StudentModel;
use Carbon\Carbon;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentModel::factory()->count(5)->create();
        // Schema::disableForeignKeyConstraints();
        // StudentModel::truncate();
        // Schema::enableForeignKeyConstraints();

        // // \App\Models\StudentModel::factory(10)->create();

        // $data = [
        //     ['name' => 'Irfan', 'gender' => 'L', 'nim' => '1101', 'class_id' => '1'],
        //     ['name' => 'martien', 'gender' => 'L', 'nim' => '1102', 'class_id' => '2'],
        //     ['name' => 'ainun', 'gender' => 'p', 'nim' => '1103', 'class_id' => '3'],
        //     ['name' => 'fuadah', 'gender' => 'p', 'nim' => '11011', 'class_id' => '2'],
        // ];

        // foreach ($data as $key) {
        //     StudentModel::insert([
        //         'name' => $key['name'],
        //         'gender' => $key['gender'],
        //         'nim' => $key['nim'],
        //         'class_id' => $key['class_id'],
        //         'created_at' => Carbon::now(),
        //         'updated_at' => Carbon::now(),
        //     ]);
        // }
    }
}
