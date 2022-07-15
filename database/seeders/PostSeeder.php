<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sample = [
            ['title' => 'Belajar huruf hijaiyah',
                'content' => 'Lorem Ipsum sit amet dolor'],
            ['title' => 'Indonesia U-19 Gagal Lolos Semifinal ',
                'content' => 'Lorem Ipsum sit amet dolor'],
            ['title' => 'Cara Cepat belajar pemprograman',
                'content' => 'Try & Error Terus Menerus'],
        ];

        DB::table('posts')->insert($sample);
    }
}
