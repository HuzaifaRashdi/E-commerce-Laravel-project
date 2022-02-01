<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('_product_')->insert([
        [
            'name' =>'Infinix Mobile',
            'price' =>'19950',
            'catagory' =>'Mobile',
            'gallery' =>'https://i.gadgets360cdn.com/products/large/infinix-hot-10-s-db-600x800-1619068983.jpg',
            'description' =>'Infinix Hot 10S mobile was launched on 22nd April 2021.'
        ],
        [
            'name' =>'Oppo Mobile',
            'price' =>'15500',
            'catagory' =>'Mobile',
            'gallery' =>'https://image.oppo.com/content/dam/oppo/pk/mkt/smartphone/a54/homepage/parker-kv-720x1256-rgb-v2.jpg',
            'description' =>'5000mAh Long-lasting Battery, HD+ Eye-care Display, AI Triple Camera'
        ],
        [
            'name' =>'Vivo Mobile',
            'price' =>'17500',
            'catagory' =>'Mobile',
            'gallery' =>'https://images.priceoye.pk/vivo-s5-pro-pakistan-priceoye-e1irx.jpg',
            'description' =>'Super AMOLED capacitive touchscreen, 16M colors'
        ],
        [
            'name' =>'Redmi Mobile',
            'price' =>'21500',
            'catagory' =>'Mobile',
            'gallery' =>'https://images.priceoye.pk/xiaomi-redmi-note-10-pro-pakistan-priceoye-a7s7o.jpg',
            'description' =>'The Xiaomi Redmi Note 10 Pro has a 6.67 inches screen and 6/8 GB RAM. It comes with 5020 Mah battery and 108 MP + 8 MP + 5 MP + 2 MP back camera.'
        ],
        ]);
    }
}
