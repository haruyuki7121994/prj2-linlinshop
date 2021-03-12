<?php

use Illuminate\Database\Seeder;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('banners')->truncate();
        $header = <<<HTML
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <marquee style="color: black; background-color:white; margin: auto; border-radius: 1em;">- - - - Welcome to our store. Wish you have a happy and happy shopping day. Thank you- - - - </marquee>
</div>
HTML;
        $footer = <<<HTML
<div class="col-md-3">

    <p style="color: white; font-size: 1.2em;">FOLLOW US</p>
    <a style="padding: 0.5em;" href=""><i style="color:lightskyblue;"
                                          class="fa fa-facebook"></i></a>
    <a style="padding: 0.4em;" href=""><i style="color:lightpink;"
                                          class="fa fa-instagram"></i></a>
    <a style="padding: 0.2em;" href=""><i style="color:lightseagreen;"
                                          class="fa fa-twitter"></i></a>
    <a style="padding: 0.2em;" href=""><i style="color:white;" class="fab fa-tiktok"></i></a>

</div>
HTML;

        \DB::table('banners')->insert([
            ['id' => 1, 'position' => 'Header', 'image_url' => $header, 'is_active' => \App\Category::ACTIVE],
            ['id' => 2, 'position' => 'Footer', 'image_url' => $footer, 'is_active' => \App\Category::ACTIVE],
        ]);
    }
}
