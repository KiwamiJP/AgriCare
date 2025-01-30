<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'မြေဆီလွှာ'],
            ['name' => 'အပင်အာဟာရ'],
            ['name' => 'စိုက်ပျိုးနည်း'],
            ['name' => 'ပိုးမွှားရောဂါ'],
            ['name' => 'စိုက်ပျိုးစီးပွား'],
            ['name' => 'ခေတ်သစ်စိုက်ပျိုးရေး'],
            ['name' => 'ရိတ်သိမ်းချိန်လွန်နည်းပညာ'],
            ['name' => 'တန်ဘိုးမြှင့်ထုတ်ကုန်'],
            ['name' => 'စိုက်ပျိုး ရေ'],
            ['name' => 'စိုက်ပျိုး ဗဟုသုတ'],
            ['name' => 'လယ်ယာသုံးစက်ပစ္စည်း'],
        ];
        DB::table('categories')->insert($categories);

    }
}
