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
            'Delivery Man',
            'Mason',
            'General Management', 'Office Boy',
            'Carpenter',
            'Biker',
            'Social work', 'hospitality', 'Garbage Picker', 'Agriculture',
            'Teaching profession', 'Engineer', 'Sales', 'Team Leader', 'Web development',
            'Sales / Marketting', 'Direct Marketting', 'Contract Worker', 'Cook' , 'Field Work' , 'Others',
        ];
        foreach ($categories as $category) {
            DB::table('company_categories')->insert([
                'category_name' => $category
            ]);
        }
    }
}
