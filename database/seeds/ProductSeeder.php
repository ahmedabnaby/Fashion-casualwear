<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Green Simple O T-shirt',
                'description' => 'Word sentence description dummy Word sentence description 
                dummy Word sentence description dummy Word sentence description dummyWord sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy',
                'price' => '22',
                'image' => 'polo_shirt_PNG8148.png',
                'image1' => 'polo_shirt_PNG8148 - Copy.png',
                'status' =>  'new',
                'category' =>  'tshirts'
            ],[
                'name' => 'Dary grey O T-shirt',
                'description' => 'Word sentence description dummy Word sentence description 
                dummy Word sentence description dummy Word sentence description dummyWord sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy  ',
                'price' => '25',
                'image'=> 'tshirt-png-no-background-8.png',
                'image1'=> 'tshirt-png-no-background-8 - Copy.png',
                'status' =>  'new',
                'category' =>  'tshirts'
            ],[
                'name' => 'Grey O t-shirt',
                'description' => 'Word sentence description dummy Word sentence description 
                dummy Word sentence description dummy Word sentence description dummyWord sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy  ',
                'price' => '20',
                'image'=> 'tshirt_PNG5448.png',
                'image1' => 'tshirt_PNG5448 - Copy.png',
                'status' =>  'popular',
                'category' =>  'tshirts'
                
            ],[
                'name' => 'Pink O t-shirt',
                'description' => 'Word sentence description dummy Word sentence description 
                dummy Word sentence description dummy Word sentence description dummyWord sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy  ',
                'price' => '28',
                'image'=> 'unnamed.png',
                'image1' => 'unnamed - Copy.png',
                'status' =>  'popular',
                'category' =>  'tshirts'
            ],[
                'name' => 'White Blue Jeans Pants',
                'description' => 'Word sentence description dummy Word sentence description 
                dummy Word sentence description dummy Word sentence description dummyWord sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy  ',
                'price' => '55',
                'image'=> 'jeans-pant-png.png',
                'image1' => 'jeans-pant-png - Copy.png',
                'status' =>  'new',
                'category' =>  'jeans'
            ],[
                'name' => 'Dark Blue Jeans Pants',
                'description' => 'Word sentence description dummy Word sentence description 
                dummy Word sentence description dummy Word sentence description dummyWord sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy  ',
                'price' => '50',
                'image'=> 'jeans_PNG5778.png',
                'image1' => 'jeans_PNG5778 - Copy.png',
                'status' =>  'popular',
                'category' =>  'jeans'
            ],[
                'name' => 'Grey Jeans Pants',
                'description' => 'Word sentence description dummy Word sentence description 
                dummy Word sentence description dummy Word sentence description dummyWord sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy  ',
                'price' => '52',
                'image'=> 'jeans_PNG5767.png',
                'image1' => 'jeans_PNG5767 - Copy.png',
                'status' =>  'new',
                'category' =>  'jeans'
            ],[
                'name' => 'Blue Ripped Jeans Pants',
                'description' => 'Word sentence description dummy Word sentence description 
                dummy Word sentence description dummy Word sentence description dummyWord sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy  ',
                'price' => '60',
                'image'=> 'ripped-jeans-png-14.png',
                'image1' => 'ripped-jeans-png-14 - Copy.png',
                'status' =>  'popular',
                'category' =>  'jeans'
            ],[
                'name' => 'Red Sneakers',
                'description' => 'Word sentence description dummy Word sentence description 
                dummy Word sentence description dummy Word sentence description dummyWord sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy  ',
                'price' => '55',
                'image'=> 'sneakers-skate-shoe-basketball-shoe-sportswear-nike-air-force-png-clip-art.png',
                'image1' => 'sneakers-skate-shoe-basketball-shoe-sportswear-nike-air-force-png-clip-art - Copy.png',
                'status' =>  'new',
                'category' =>  'shoes'
            ],[
                'name' => 'White and Red Nike Air Force Sneakers',
                'description' => 'Word sentence description dummy Word sentence description 
                dummy Word sentence description dummy Word sentence description dummyWord sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy  ',
                'price' => '70',
                'image'=> 'unnamed (1).png',
                'image1' => 'unnamed (1) - Copy.png',
                'status' =>  'popular',
                'category' =>  'shoes'
            ],[
                'name' => 'Grey Sneakers',
                'description' => 'Word sentence description dummy Word sentence description 
                dummy Word sentence description dummy Word sentence description dummyWord sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy  ',
                'price' => '60',
                'image'=> '433-4336756_shoes-png-transparent-images-pair-of-shoes-png.png',
                'image1' => '433-4336756_shoes-png-transparent-images-pair-of-shoes-png - Copy.png',
                'status' =>  'new',
                'category' =>  'shoes'
            ],[
                'name' => 'Dark Red Nike Air Sneakers',
                'description' => 'Word sentence description dummy Word sentence description 
                dummy Word sentence description dummy Word sentence description dummyWord sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy  ',
                'price' => '65',
                'image'=> 'Sneakers-PNG-HD-Image.png',
                'image1' => 'Sneakers-PNG-HD-Image - Copy.png',
                'status' =>  'popular',
                'category' =>  'shoes'
            ],[
                'name' => 'Quarts Black Watch',
                'description' => 'Word sentence description dummy Word sentence description 
                dummy Word sentence description dummy Word sentence description dummyWord sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy  ',
                'price' => '100',
                'image'=> 'unnamed (2).png',
                'image1' => 'unnamed (2).png - Copy.png',
                'status' =>  'new',
                'category' =>  'watches'
            ],[
                'name' => 'Concrete Black Watch',
                'description' => 'Word sentence description dummy Word sentence description 
                dummy Word sentence description dummy Word sentence description dummyWord sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy  ',
                'price' => '90',
                'image'=> 'watches-png-free-download-29.png',
                'image1' => 'watches-png-free-download-29 - Copy.png',
                'status' =>  'new',
                'category' =>  'watches'
            ],[
                'name' => 'Standard Basic Rolex Watch',
                'description' => 'Word sentence description dummy Word sentence description 
                dummy Word sentence description dummy Word sentence description dummyWord sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy  ',
                'price' => '120',
                'image'=> 'unnamed (3).png',
                'image1' => 'unnamed (3) - Copy.png',
                'status' =>  'popular',
                'category' =>  'watches'
            ],[
                'name' => 'New Golden Watch',
                'description' => 'Word sentence description dummy Word sentence description 
                dummy Word sentence description dummy Word sentence description dummyWord sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy 
                Word sentence description dummy Word sentence description dummy Word sentence description dummy  ',
                'price' => '110',
                'image'=> 'unnamed (4).png',
                'image1' => 'unnamed (4) - Copy.png',
                'status' =>  'popular',
                'category' =>  'watches'
            ]
        ]);
        
    
    
    }
    
}
