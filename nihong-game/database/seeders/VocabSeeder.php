<?php

namespace Database\Seeders;

use App\Models\Vocab;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class VocabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('vocabs')->delete();
        // $vocabs = [
        //     [
        //         'word' => 'あなた',
        //         'romaji' => 'anata',
        //         'meaning' => 'you',
        //         'type' => 'noun',
        //         'lesson' => '1'
        //     ]
        // ];

        // Vocab::insert($vocabs);
    }
}
