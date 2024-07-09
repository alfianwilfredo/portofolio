<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RepositorySeeder extends Seeder
{

    public function run(): void
    {
        //
        if (file_exists('repo.json')) {
            $data = json_decode(file_get_contents('repo.json'), true);

            foreach ($data as &$d) {
                $d["updated_at"] = $d["created_at"] = date('d-m-y h:i:s');
            }

            DB::table('repositories')->insert($data); // Insert data into database
        }
    }
}
