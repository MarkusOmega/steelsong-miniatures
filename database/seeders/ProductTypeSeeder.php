<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_types')->delete();

        $productTypes = [
            ['name' => 'Stl'],
            ['name' => 'Hobby tool'],
            ['name' => 'Book'],
            ['name' => 'Pdf'],
            ['name' => 'Ebook'],
        ];

        foreach( $productTypes as $productType ) {
            ProductType::create($productType);
        }
    }
}
