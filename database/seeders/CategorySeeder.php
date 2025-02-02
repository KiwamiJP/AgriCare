<?php

namespace Database\Seeders;

use App\Models\Category;
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
            

        // Main categories (parent_id = null)
        $parentCategoriesData = [
            [ 'name' => 'စိုက်ပျိုးရေး', 'parent_id' => null],
            [ 'name' => 'အထွေထွေဗဟုသုတ', 'parent_id' => null],
            ['name' => 'သတင်း','parent_id' => null]
        ];
        DB::table('categories')->insert($parentCategoriesData);
        // Retrieve parent categories (assuming names are unique)
        $parentCategories = Category::whereNull('parent_id')
            ->get()
            ->keyBy('name');


        // Subcategories (linked to parent categories)
        $subCategories = [
            ['name' => 'မြေဆီလွှာ', 'parent_id' =>  $parentCategories['စိုက်ပျိုးရေး']->id], 
            ['name' => 'အပင်အဟာရ','parent_id' =>  $parentCategories['စိုက်ပျိုးရေး']->id], // Child of 'စိုက်ပျိုးနည်း'
            ['name' => 'စိုက်ပျိုးနည်း', 'parent_id' => $parentCategories['စိုက်ပျိုးရေး']->id], // Child of 'မြေဆီလွှာ'
            ['name' => 'ပိုးမွှားရောဂါ', 'parent_id' => $parentCategories['စိုက်ပျိုးရေး']->id], 
            ['name' => 'စိုက်ပျိုးစီးပွား', 'parent_id' => $parentCategories['စိုက်ပျိုးရေး']->id], 
            ['name' => 'ခေတ်သစ်စိုက်ပျိုးရေး', 'parent_id' => $parentCategories['စိုက်ပျိုးရေး']->id],
            ['name' => 'ရိတ်သိမ်းချိန်လွန်နည်းပညာ','parent_id' =>  $parentCategories['စိုက်ပျိုးရေး']->id], 
            ['name' => 'တန်ဘိုးမြှင့်ထုတ်ကုန်', 'parent_id' => $parentCategories['စိုက်ပျိုးရေး']->id], 
            ['name' => 'စိုက်ပျိုးရေ', 'parent_id' => $parentCategories['စိုက်ပျိုးရေး']->id], 
            ['name' => 'စိုက်ပျိုးဗဟုသုတ', 'parent_id' => $parentCategories['စိုက်ပျိုးရေး']->id], 
            ['name' => 'လယ်ယာသုံးစက်ပစ္စည်း', 'parent_id' => $parentCategories['စိုက်ပျိုးရေး']->id],  // Child of 'စိုက်ပျိုးနည်း'
            ['name' => 'အဟာရနှင့်ကျန်းမာရေး', 'parent_id' =>  $parentCategories['အထွေထွေဗဟုသုတ']->id], 
            ['name' => 'ပတ်၀န်းကျင်ဆိုင်ရာ',  'parent_id' => $parentCategories['အထွေထွေဗဟုသုတ']->id], 
            ['name' => 'အတွေးအမြင်ဆောင်းပါး',  'parent_id' => $parentCategories['အထွေထွေဗဟုသုတ']->id], 
            ['name' => 'စိုက်ပျိုးရေး ဥပဒေများ',  'parent_id' => $parentCategories['အထွေထွေဗဟုသုတ']->id], 
            ['name' => 'ငွေကြေးစီမံခန့်ခွဲမှု', 'parent_id' =>  $parentCategories['အထွေထွေဗဟုသုတ']->id], 
            ['name' => 'ကုန်သွယ်သုတ',  'parent_id' => $parentCategories['အထွေထွေဗဟုသုတ']->id], 
            ['name' => 'အထွေထွေ',  'parent_id' => $parentCategories['အထွေထွေဗဟုသုတ']->id], 
            ['name' => 'ဂေဟစနစ်',  'parent_id' => $parentCategories['အထွေထွေဗဟုသုတ']->id], 
            ['name' => 'သစ်တောပုံတူ စိုက်ခင်းတည်ထောင်ခြင်း', 'parent_id' =>  $parentCategories['အထွေထွေဗဟုသုတ']->id],
            ['name' => 'အခွင့်အလမ်း','parent_id' =>  $parentCategories['သတင်း']->id],
            ['name' => 'စိုက်ပျိုးရေးသတင်း','parent_id' =>  $parentCategories['သတင်း']->id],
            ['name' => 'မိုးလေ၀သသတင်း','parent_id' =>  $parentCategories['သတင်း']->id],
            ['name' => 'နိုင်ငံတကာသတင်း', 'parent_id' => $parentCategories['သတင်း']->id],
            ['name' => 'အင်တာဗျူး', 'parent_id' => $parentCategories['သတင်း']->id],
            ['name' => 'ရုပ်သံအစီအစဥ်', 'parent_id' => $parentCategories['သတင်း']->id],










            
        ];

// Insert child categories separately
DB::table('categories')->insert($subCategories);
    }
   
}
