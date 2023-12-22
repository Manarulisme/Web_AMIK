<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'judul'=>Str::random(10),
            'slug'=>Str::random(10),
            'image'=>Str::random(10),
            'optional_id'=>Str::random(10),
            'deskripsi'=>Str::random(10),

        ]);
    }
}
