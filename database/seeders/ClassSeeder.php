<?php

namespace Database\Seeders;

use App\Models\ClassStudentsModel;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        ClassStudentsModel::truncate(); //untuk hapus data
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'IPS'],
            ['name' => 'IPA'],
            ['name' => 'PAI'],
        ];

        foreach ($data as $key) {
            ClassStudentsModel::insert([
                'name' => $key['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
