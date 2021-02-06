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
        \DB::table('products')->truncate();

        //SHOES - id [1-14]
        \DB::table('products')->insert([
            [
                'id' => 1,
                'name' => 'Gucci sneaker',
                'slug' => 'gucci-sneaker',
                'category_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan elementum facilisis. Nulla vehicula urna vitae bibendum semper. Donec sed ex quam. Sed vitae mauris ex. Nunc in quam tempus, sodales dui at, dignissim ante. Etiam aliquam ipsum eget lacus.',
                'is_featured' => \App\Product::IS_FEATURED,
            ],
            [
                'id' => 2,
                'name' => 'Adidas shoes',
                'slug' => 'addida-shoes',
                'category_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris facilisis diam sed diam commodo feugiat. Vivamus ultrices aliquet nisi, vel malesuada eros euismod ut. Nunc metus nunc, tincidunt vitae convallis ut, viverra sit amet justo. Aenean ut justo at justo.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 3,
                'name' => 'Stay real shoes',
                'slug' => 'stay-real-shoes',
                'category_id' => 1,
                'description' => 'Donec interdum imperdiet nibh, vel tristique metus mattis a. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras quam velit, viverra vel quam ut, maximus laoreet augue. Proin congue vulputate urna, vel fringilla orci placerat.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 4,
                'name' => 'Doll shoes NY',
                'slug' => 'doll-shoes-ny',
                'category_id' => 1,
                'description' => 'Sed mattis consequat erat id laoreet. Vestibulum a euismod tellus. Proin sagittis orci diam, ut tincidunt mauris lobortis facilisis. Maecenas maximus at ipsum eu ultricies. Cras sed neque laoreet, hendrerit dui sed, eleifend libero. Pellentesque semper nibh ut pulvinar dapibus.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 5,
                'name' => 'Spearhead doll shoes',
                'slug' => 'spearhead-doll-shoes',
                'category_id' => 1,
                'description' => 'Sed posuere, erat sed ultrices malesuada, felis turpis imperdiet felis, et aliquet augue leo et nulla. Etiam finibus mi ut pulvinar ultrices. Vestibulum tincidunt laoreet lacus id laoreet. Ut a congue turpis. Donec rutrum ultrices erat, sit amet bibendum nisl.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 6,
                'name' => 'High heels',
                'slug' => 'high-heels',
                'category_id' => 1,
                'description' => 'Donec eget nulla dui. Pellentesque enim nisl, pulvinar ac consequat eu, lobortis ut lectus. Ut vitae lectus ultrices, auctor metus eget, iaculis purus. Praesent mollis gravida ante, ac elementum nibh molestie eget. Integer bibendum, dui in hendrerit convallis, sem arcu.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 7,
                'name' => 'Transparent sole high heels',
                'slug' => 'transparent-sole-high-heels',
                'category_id' => 1,
                'description' => 'Morbi molestie tellus ultricies tortor maximus, vitae pharetra libero facilisis. Pellentesque id ex lorem. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus ac leo interdum, tincidunt velit nec, dictum est. Ut vitae ante risus.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 8,
                'name' => 'High heels gourd nose',
                'slug' => 'high-heels-gourd-nose',
                'category_id' => 1,
                'description' => 'Duis ut scelerisque purus. Nulla rhoncus velit at eros viverra, id pellentesque eros faucibus. Pellentesque imperdiet congue tortor, quis finibus nulla convallis ut. Suspendisse orci magna, pulvinar a ultrices et, faucibus eu felis. Fusce gravida suscipit placerat. Nunc commodo dapibus.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 9,
                'name' => 'High heels Gold',
                'slug' => 'high-heels-gold',
                'category_id' => 1,
                'description' => 'Duis vestibulum justo eu diam fermentum, quis interdum dolor dignissim. Sed dignissim vestibulum nisi, sodales sodales sapien accumsan in. Duis dignissim leo eleifend felis lobortis, vitae scelerisque diam condimentum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 11,
                'name' => 'Every gucci shoes',
                'slug' => 'every-gucci-shoes',
                'category_id' => 1,
                'description' => 'Ut laoreet magna ante, eget feugiat orci pulvinar et. Mauris blandit aliquam placerat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse eu commodo velit, vel convallis nulla. Aliquam erat volutpat. Vestibulum at urna id quam tincidunt dignissim.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 12,
                'name' => 'Doll shoes NY color scheme',
                'slug' => 'doll-shoes-ny-color-scheme',
                'category_id' => 1,
                'description' => 'Nullam varius risus risus, sed luctus risus commodo non. Duis maximus sapien a erat vulputate sodales. Aliquam erat volutpat. Morbi semper tincidunt sapien sed blandit. Mauris urna ipsum, scelerisque eget molestie eu, vehicula dignissim eros. Nunc volutpat neque ut lacus.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 13,
                'name' => 'High heeled doll shoes',
                'slug' => 'high-heeled-doll-shoes',
                'category_id' => 1,
                'description' => 'Fusce non quam consectetur, facilisis arcu id, sodales nisl. Sed eu aliquam sapien. Ut accumsan maximus mauris at mollis. Etiam posuere finibus sem, eu tempor dui tempor et. Donec ornare vulputate lacus, quis sodales neque luctus vitae. Mauris eget lacus.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 14,
                'name' => 'High heeled doll shoes point',
                'slug' => 'high-heeled-doll-shoes-point',
                'category_id' => 1,
                'description' => 'Curabitur semper eleifend risus, id euismod diam. Ut sem eros, vestibulum eget ipsum eget, convallis aliquet eros. Nulla urna leo, vehicula et tortor sit amet, placerat pretium risus. Praesent a ligula a tortor varius venenatis. Pellentesque ultrices nibh et leo.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
        ]);

        //SANDALS - id [15-20]
        \DB::table('products')->insert([
            [
                'id' => 15,
                'name' => 'Jacuzzi with bow',
                'slug' => 'jacuzzi-with-bow',
                'category_id' => 2,
                'description' => 'Sed vel nulla nulla. Curabitur lacinia ac lorem porttitor blandit. Fusce vel sapien id nunc sodales tempus a vitae risus. Nunc ante nulla, ornare ac lacus et, cursus scelerisque tortor. Vestibulum consequat sit amet nibh ut euismod. Pellentesque eget faucibus.',
                'is_featured' => \App\Product::IS_FEATURED,
            ],
            [
                'id' => 16,
                'name' => 'LV high heel sandals',
                'slug' => 'lv-high-heel-sandals',
                'category_id' => 2,
                'description' => 'Nullam ullamcorper ipsum non nulla tempus fermentum. Phasellus vel euismod sapien, sit amet lacinia massa. Proin cursus ante quis tellus ultricies ultricies dignissim at orci. Fusce volutpat accumsan ante quis vestibulum. Nam ut tincidunt lectus. Mauris posuere arcu eget dui.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 17,
                'name' => 'High heeled sandals',
                'slug' => 'high-heeled-sandals',
                'category_id' => 2,
                'description' => 'Etiam scelerisque, orci ut iaculis ultricies, tortor purus tincidunt ante, sed molestie erat massa id tellus. Sed nisl magna, convallis egestas aliquam eget, tempus eu enim. Nulla facilisi. Maecenas faucibus metus ac dui imperdiet, a elementum ante iaculis. Duis vel.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 18,
                'name' => 'Slippers NY',
                'slug' => 'slippers-ny',
                'category_id' => 2,
                'description' => 'Nulla non ex odio. Nam eget convallis tortor. Phasellus accumsan enim vel ipsum finibus, ut elementum urna feugiat. Sed consequat elit eget elit scelerisque pretium. Integer gravida ornare purus a semper. Proin eu imperdiet mauris. Pellentesque malesuada condimentum risus a.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 19,
                'name' => 'Jacuzzi with bow point',
                'slug' => 'jacuzzi-with-bow-point',
                'category_id' => 2,
                'description' => 'Maecenas et ligula in ante aliquam mollis tincidunt sit amet velit. Fusce suscipit nisl justo, quis eleifend nibh dapibus a. Aenean tempor venenatis nibh non mollis. Maecenas sagittis facilisis augue, eget molestie justo mattis in. Suspendisse imperdiet, tellus nec vestibulum.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 20,
                'name' => 'White and black Chanel sandals',
                'slug' => 'white-and-black-channel-sandals',
                'category_id' => 2,
                'description' => 'Vestibulum vel tempus urna. Pellentesque id risus quis odio euismod viverra. Mauris nec nisi sed dolor tincidunt consequat sodales luctus est. Phasellus in eros viverra, volutpat mauris sit amet, ultrices diam. Nam mattis, tellus sed euismod consectetur, magna mi mattis.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
        ]);

        //WATCH - id [21-23]
        \DB::table('products')->insert([
            [
                'id' => 21,
                'name' => "Women's watches",
                'slug' => "women-s-watches",
                'category_id' => 3,
                'description' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In hac habitasse platea dictumst. Cras turpis ante, laoreet nec turpis ac, consectetur imperdiet felis. Aliquam blandit tempus mattis. Quisque eu posuere ex. Proin vitae mi metus.',
                'is_featured' => \App\Product::IS_FEATURED,
            ],
            [
                'id' => 22,
                'name' => "Women's watches brand Gucci",
                'slug' => "women-s-watches-brand-gucci",
                'category_id' => 3,
                'description' => 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed nunc nisl, egestas ut velit sed, molestie varius sem. Integer gravida facilisis feugiat. Sed tristique aliquet risus, et pharetra ipsum commodo ac. Duis nulla velit, ultrices eget enim a.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 23,
                'name' => "Women's watches brand Armani",
                'slug' => "women-s-watches-brand-armani",
                'category_id' => 3,
                'description' => 'Nunc placerat enim leo, sed feugiat quam dictum ut. Nullam eu ipsum vitae nunc venenatis rutrum quis sit amet dui. Pellentesque maximus quis dui nec dictum. Integer vehicula bibendum nunc, sit amet semper nulla pellentesque at. Nulla sit amet gravida.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
        ]);

        //GLASSES - id [24-28]
        \DB::table('products')->insert([
            [
                'id' => 24,
                'name' => "Glasses Channel",
                'slug' => "glasses-channel",
                'category_id' => 4,
                'description' => 'Suspendisse semper posuere malesuada. Nullam mattis turpis sit amet massa maximus, et bibendum elit porta. Quisque sit amet blandit nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac hendrerit eros. Vivamus a aliquam mi, sit amet interdum ipsum.',
                'is_featured' => \App\Product::IS_FEATURED,
            ],
            [
                'id' => 25,
                'name' => "Glasses Tiffany & CO",
                'slug' => "glasses-tiffany-co",
                'category_id' => 4,
                'description' => 'Interdum et malesuada fames ac ante ipsum primis in faucibus. In hac habitasse platea dictumst. In hac habitasse platea dictumst. Aliquam nunc elit, eleifend vel dolor finibus, tempor tempor lectus. Nunc euismod blandit aliquam. Nulla varius nisi neque, non pharetra.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 26,
                'name' => "Glasses Chanel thin bezel",
                'slug' => "glasses-channel-thin-bezel",
                'category_id' => 4,
                'description' => 'Fusce euismod, risus sit amet pellentesque malesuada, ipsum turpis lacinia metus, a eleifend metus eros a orci. Nam non sollicitudin metus. Morbi euismod libero nec suscipit rutrum. Curabitur a augue laoreet, tincidunt sem non, viverra est. Aliquam quis dui id.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 27,
                'name' => "Glasses Gentle Monster color Black",
                'slug' => "glasses-gentle-monster-color-black",
                'category_id' => 4,
                'description' => 'Ut volutpat rutrum urna, non lobortis justo consequat eleifend. Quisque eget ligula ut felis varius molestie vitae id purus. Donec ut posuere lorem. Nunc euismod varius ligula, eget sollicitudin est feugiat eu. Integer et velit feugiat, tincidunt est at, condimentum.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 28,
                'name' => "Glasses Gentle Monster color brown",
                'slug' => "glasses-gentle-monster-color-brown",
                'category_id' => 4,
                'description' => 'Mauris elementum magna sit amet pellentesque malesuada. Curabitur et placerat felis, id egestas elit. Mauris lacinia arcu sed est porttitor rutrum. Ut ullamcorper consectetur metus, ultrices scelerisque erat pulvinar vel. Phasellus et aliquet mi. Pellentesque habitant morbi tristique senectus et.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
        ]);

        //HAT - id [29]
        \DB::table('products')->insert([
            [
                'id' => 29,
                'name' => "Conical round triangular logo",
                'slug' => "conical-round-triangular-logo",
                'category_id' => 5,
                'description' => 'Vestibulum ac quam sapien. Proin eu ex vehicula lacus rutrum suscipit tincidunt eu enim. Sed tincidunt nisi in felis varius congue. In accumsan commodo ipsum et lobortis. Proin sit amet fermentum odio. Curabitur bibendum pulvinar mi vehicula egestas. Phasellus finibus.',
                'is_featured' => \App\Product::IS_FEATURED,
            ],
        ]);

        //T-SHIRT - id [30-35]
        \DB::table('products')->insert([
            [
                'id' => 30,
                'name' => "Checkered pink shirt",
                'slug' => "checkered-pink-shirt",
                'category_id' => 6,
                'description' => 'Nunc consequat aliquam lacinia. Nullam ante lacus, rhoncus sit amet finibus eu, varius at massa. Curabitur fringilla lorem sapien, in sodales sem viverra quis. Integer accumsan lectus at viverra pulvinar. Praesent libero sapien, efficitur vitae placerat eget, convallis in nibh.',
                'is_featured' => \App\Product::IS_FEATURED,
            ],
            [
                'id' => 31,
                'name' => "Short sleeved pink puffed shirt",
                'slug' => "short-sleeved-pink-puffed-shirt",
                'category_id' => 6,
                'description' => 'Praesent nec pharetra leo, quis pretium nibh. Cras vehicula nibh lacus, quis laoreet velit imperdiet et. Nunc efficitur et ligula quis luctus. Quisque ut dictum ante, sit amet volutpat dui. Cras vel volutpat arcu. Praesent et volutpat enim, et mattis.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 32,
                'name' => "Long sleeve bulging sleeve",
                'slug' => "long-sleeve-bulging-sleeve",
                'category_id' => 6,
                'description' => 'Sed efficitur lacinia libero. Donec varius pulvinar rutrum. Ut lacus ex, dictum vel urna vel, rhoncus posuere sem. Aliquam erat volutpat. Nullam dignissim turpis ac tortor accumsan, non interdum est rhoncus. Nullam suscipit est et enim tempor, ac placerat ante.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 33,
                'name' => "Bear T-shirt",
                'slug' => "bear-t-shirt",
                'category_id' => 6,
                'description' => 'Nulla facilisi. Vestibulum volutpat, justo eget sodales gravida, felis purus convallis orci, vel feugiat nunc dolor non ligula. Vivamus neque lorem, faucibus id venenatis ornare, mollis vel mi. Nulla vestibulum risus quis quam porta accumsan. Maecenas mattis eget dui non.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 34,
                'name' => "Wide range of t-shirt",
                'slug' => "wide-range-of-t-shirt",
                'category_id' => 6,
                'description' => 'In felis risus, tempus et quam ut, finibus lacinia risus. Aenean efficitur erat lorem, in tristique ex bibendum eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras sed euismod nibh. Donec eget ultricies erat.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 35,
                'name' => "Yellow chrysanthemum t-shirt",
                'slug' => "yellow-chrysanthemum-t-shirt",
                'category_id' => 6,
                'description' => 'In erat turpis, sagittis quis odio vitae, aliquet rutrum dui. Proin non nisi diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam eu dictum mauris. Suspendisse potenti. Mauris in ullamcorper tortor. Sed porttitor eu mauris vel porta.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
        ]);

        //DRESS - id [36-51]
        \DB::table('products')->insert([
            [
                'id' => 36,
                'name' => "Red dress",
                'slug' => "red-dress",
                'category_id' => 7,
                'description' => 'In dapibus dictum augue, at vestibulum quam laoreet in. Aenean id lorem libero. Suspendisse faucibus dignissim urna, non euismod sapien pulvinar vel. Integer convallis purus sit amet lobortis pulvinar. Quisque ornare, dui in pretium auctor, orci felis ultrices tellus, non.',
                'is_featured' => \App\Product::IS_FEATURED,
            ],
            [
                'id' => 37,
                'name' => "White dress",
                'slug' => "white-dress",
                'category_id' => 7,
                'description' => 'Integer fermentum imperdiet ex eu sollicitudin. Maecenas et viverra sapien. Fusce luctus neque quis tincidunt rhoncus. Maecenas eu egestas nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur scelerisque, mi id blandit sollicitudin, ipsum sapien accumsan leo.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 38,
                'name' => "Red dress hugging",
                'slug' => "red-dress-hugging",
                'category_id' => 7,
                'description' => 'Pellentesque mollis non orci eu porttitor. Cras tempus aliquet sollicitudin. Vestibulum malesuada lacus vel odio ullamcorper condimentum. Praesent vitae lorem eu nulla tincidunt molestie. Nunc sagittis urna nec lorem tempus, nec rutrum orci interdum. Donec tempus turpis ut odio tristique.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 39,
                'name' => "Short-sleeved puffy white dress",
                'slug' => "short-sleeved-puffy-white-dress",
                'category_id' => 7,
                'description' => 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In hac habitasse platea dictumst. Proin vitae sem a leo sagittis rhoncus quis sed magna. Maecenas orci nibh, consequat at blandit sit amet, pellentesque sit amet urna.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 40,
                'name' => "Brown dress",
                'slug' => "brown-dress",
                'category_id' => 7,
                'description' => 'Proin aliquet hendrerit elit eu dignissim. Maecenas scelerisque porta erat, et aliquam massa laoreet id. Vivamus sodales iaculis sodales. Aenean nec eros et nibh pellentesque consequat. Nullam sed tellus eros. Integer mollis porta luctus. Nullam a viverra libero. Nullam porttitor.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 41,
                'name' => "Pink dress",
                'slug' => "pink-dress",
                'category_id' => 7,
                'description' => 'Suspendisse cursus dictum felis ac facilisis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Etiam ullamcorper, velit eget aliquam hendrerit, mi mi hendrerit sem, in rutrum libero velit sit amet risus. Donec varius turpis enim.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 42,
                'name' => "Short white skirt spread",
                'slug' => "short-white-skirt-spread",
                'category_id' => 7,
                'description' => 'Sed scelerisque arcu neque, eget accumsan leo suscipit eget. Nam faucibus at tortor sed convallis. Vivamus sagittis ex eu nisi lacinia, ut porttitor diam venenatis. Praesent placerat nulla ut tortor tristique, eget ultricies mi mattis. Duis eget justo non sapien.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 43,
                'name' => "Long black dress",
                'slug' => "long-black-dress",
                'category_id' => 7,
                'description' => 'Cras feugiat facilisis turpis, quis porta justo dictum id. Praesent nec consequat justo. Pellentesque eu efficitur tortor, gravida consectetur sem. Quisque vitae porta leo. Suspendisse est dolor, facilisis ullamcorper ultrices ut, egestas ut purus. Vivamus nec neque vitae augue interdum.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 44,
                'name' => "Black dress",
                'slug' => "black-dress",
                'category_id' => 7,
                'description' => 'Aliquam et dignissim arcu. Nulla sit amet vestibulum mauris, quis laoreet dolor. Fusce pretium massa in egestas ultrices. Etiam id leo orci. In dignissim sodales ullamcorper. Cras bibendum faucibus diam. Vestibulum non bibendum ante, sit amet posuere magna. In hac.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 45,
                'name' => "Long puffy black dress",
                'slug' => "long-puffy-black-dress",
                'category_id' => 7,
                'description' => 'Sed dui enim, vulputate placerat posuere gravida, rutrum ac enim. Vivamus nibh enim, accumsan vitae eleifend a, fringilla sed mauris. Praesent imperdiet metus in nulla porttitor maximus. Cras suscipit lorem lacus, vel accumsan quam vehicula a. Proin dapibus euismod enim.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 46,
                'name' => "Short white dress",
                'slug' => "short-white-dress",
                'category_id' => 7,
                'description' => 'Etiam diam tellus, porttitor eu faucibus sit amet, posuere at felis. Praesent sit amet sem et massa sagittis ullamcorper ac eget velit. Ut nec vestibulum libero. Curabitur iaculis venenatis sapien, vitae interdum quam auctor non. Etiam condimentum, magna mattis euismod.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 47,
                'name' => "Yellow dress",
                'slug' => "yellow-dress",
                'category_id' => 7,
                'description' => 'Integer fermentum imperdiet ex eu sollicitudin. Maecenas et viverra sapien. Fusce luctus neque quis tincidunt rhoncus. Maecenas eu egestas nunc. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur scelerisque, mi id blandit sollicitudin, ipsum sapien accumsan leo.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 48,
                'name' => "Long hugging gold dress",
                'slug' => "long-hugging-gold-dress",
                'category_id' => 7,
                'description' => 'Sed sit amet elit maximus, feugiat ipsum nec, finibus lacus. Donec sed metus non sapien fermentum efficitur a vel mauris. Nam viverra iaculis suscipit. Quisque vel consectetur arcu. Nullam eu sodales tortor, eget fringilla quam. Nulla ac iaculis arcu. Pellentesque.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 49,
                'name' => "Short red skirt spread",
                'slug' => "short-red-skirt-spread",
                'category_id' => 7,
                'description' => 'Duis tortor mauris, faucibus eget malesuada nec, commodo sit amet risus. Quisque gravida elit id porttitor aliquam. Aliquam dui erat, viverra eget ligula vitae, malesuada aliquet nulla. Vestibulum tincidunt tempor dui, ac viverra erat aliquam vel. Donec cursus lacus ligula.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 50,
                'name' => "Short white skirt that hugs the waist",
                'slug' => "short-white-skirt-that-hugs-the-waist",
                'category_id' => 7,
                'description' => 'Fusce porttitor leo a lorem viverra efficitur. Fusce eu elit pretium, luctus arcu eu, auctor sapien. Etiam lobortis ac lorem id consequat. Donec eget ligula non urna ullamcorper accumsan in ac purus. Morbi eu malesuada lorem. Nulla malesuada ante vel.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 51,
                'name' => "Long white dress hug",
                'slug' => "long-white-dress-hug",
                'category_id' => 7,
                'description' => 'Cras eu diam nisl. Praesent elit lacus, finibus eget nibh in, consectetur efficitur odio. Duis ut elit imperdiet, varius lectus et, eleifend purus. Curabitur ultrices porta diam ut dignissim. Sed pellentesque sed arcu vitae lobortis. Phasellus luctus blandit justo at.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
        ]);

        //JEAN - id [52-55]
        \DB::table('products')->insert([
            [
                'id' => 52,
                'name' => "Short jean",
                'slug' => "short-jean",
                'category_id' => 8,
                'description' => 'Nunc pharetra dui ac sagittis elementum. Vestibulum at dictum nulla. Sed malesuada risus ac lectus laoreet mollis. Nunc facilisis ipsum non vestibulum tincidunt. Integer rutrum, nunc id egestas pharetra, justo felis aliquet augue, vel consectetur risus ante ut nisi. Duis.',
                'is_featured' => \App\Product::IS_FEATURED,
            ],
            [
                'id' => 53,
                'name' => "Wide legged pants spread",
                'slug' => "wide-legged-pants-spread",
                'category_id' => 8,
                'description' => 'Vivamus sit amet pharetra orci. Nam pulvinar metus semper blandit vehicula. Nulla ipsum justo, suscipit sit amet augue scelerisque, maximus molestie sapien. Nulla rhoncus nunc id pretium condimentum. Morbi et suscipit augue, sed dignissim dui. Phasellus ligula nunc, pulvinar et.',
                'is_featured' => \App\Product::IS_FEATURED,
            ],
            [
                'id' => 54,
                'name' => "Wide tube long jean",
                'slug' => "wide-tube-long-jean",
                'category_id' => 8,
                'description' => 'Etiam id tellus mauris. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Duis lacinia ex et ex efficitur hendrerit. In tincidunt ullamcorper turpis a laoreet. Praesent consectetur non lacus sit amet gravida. Vestibulum urna nisl, fermentum.',
                'is_featured' => \App\Product::IS_FEATURED,
            ],
            [
                'id' => 55,
                'name' => "Long black jean",
                'slug' => "long-black-jean",
                'category_id' => 8,
                'description' => 'Praesent et quam eu lorem aliquet scelerisque. Donec ac erat lacus. Vestibulum fringilla eu erat in aliquam. Aenean vitae feugiat tellus, at vehicula tortor. Aliquam non porttitor urna. Curabitur pellentesque consectetur ligula, sed egestas neque laoreet a. Duis porta convallis.',
                'is_featured' => \App\Product::IS_FEATURED,
            ],
        ]);

        //SKIRT - id [56-58]
        \DB::table('products')->insert([
            [
                'id' => 56,
                'name' => "Jean skirt",
                'slug' => "jean-skirt",
                'category_id' => 9,
                'description' => 'Nulla finibus mi at est bibendum placerat. Proin ornare ipsum non risus mattis pellentesque. Phasellus quis sapien eget elit egestas consequat eu in sapien. Fusce convallis nulla in ligula viverra, nec vehicula lacus sagittis. Quisque cursus imperdiet massa eu bibendum.',
                'is_featured' => \App\Product::IS_FEATURED,
            ],
            [
                'id' => 57,
                'name' => "Patterned skirt",
                'slug' => "patterned-skirt",
                'category_id' => 9,
                'description' => 'Nam a congue enim. Pellentesque id dictum urna. Proin viverra risus sapien, in dapibus augue tristique at. Morbi convallis pretium ullamcorper. Integer tortor lectus, ullamcorper quis mi vel, suscipit consectetur nunc. Nullam eget orci lobortis nisl viverra pretium. Vestibulum molestie.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 58,
                'name' => "Skirt two wire",
                'slug' => "skirt-two-wire",
                'category_id' => 9,
                'description' => 'Vestibulum vestibulum eu purus quis fermentum. Vivamus vitae nibh sit amet mi volutpat ultricies at ac ante. Pellentesque hendrerit mollis ligula vel mattis. Nam elit orci, efficitur non molestie quis, vehicula a arcu. Maecenas efficitur quis ligula in ultricies. Vestibulum.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
        ]);

        //HANDBAG - id [59-71]
        \DB::table('products')->insert([
            [
                'id' => 59,
                'name' => "Multi color bags of choice Gucci",
                'slug' => "multi-color-bags-of-choice-gucci",
                'category_id' => 10,
                'description' => 'Etiam quis dui sagittis, dictum tortor et, tempus nisl. Nullam sodales, massa vitae tincidunt bibendum, ante magna lobortis arcu, eu posuere augue felis in massa. Fusce ante ante, rutrum bibendum commodo et, convallis sit amet erat. Fusce euismod sem lectus.',
                'is_featured' => \App\Product::IS_FEATURED,
            ],
            [
                'id' => 61,
                'name' => "Multi color bags of choice",
                'slug' => "multi-color-bags-of-choice",
                'category_id' => 10,
                'description' => 'Morbi augue mauris, mollis nec iaculis quis, hendrerit non risus. Cras aliquet fermentum orci, id sollicitudin augue fringilla quis. Fusce placerat hendrerit nibh, sagittis lacinia dui placerat a. Integer dignissim sagittis diam, ac tristique dui lacinia in. Nullam sed elit.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 62,
                'name' => "LV handbag set with three pieces",
                'slug' => "lv-handbag-set-with-three-pieces",
                'category_id' => 10,
                'description' => 'Donec eu congue eros. Phasellus tincidunt consectetur neque, at feugiat justo volutpat in. Quisque urna dui, bibendum vitae mattis sit amet, tristique eget mauris. Suspendisse a augue magna. Praesent egestas, ante in viverra fringilla, sem augue pretium mauris, ac blandit.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 63,
                'name' => "LV handbag set with two pieces",
                'slug' => "LV handbag set with two pieces",
                'category_id' => 10,
                'description' => 'Phasellus tristique ligula quis ullamcorper tincidunt. Sed hendrerit ac dolor at dictum. Phasellus sed iaculis ipsum. Mauris est dolor, dapibus sed orci sed, gravida feugiat enim. Vivamus a tellus porttitor, viverra purus quis, pharetra mauris. Maecenas nec tincidunt sapien. Donec.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 64,
                'name' => "Leather bag",
                'slug' => "leather-bag",
                'category_id' => 10,
                'description' => 'Suspendisse nec lacus nulla. Proin aliquam, arcu fermentum volutpat ullamcorper, ex arcu placerat eros, sit amet finibus ante massa sed nisl. In hac habitasse platea dictumst. Nullam mauris nibh, condimentum sed eros eget, rhoncus placerat quam. Cras tellus quam, pellentesque.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 65,
                'name' => "Black handbag",
                'slug' => "black-handbag",
                'category_id' => 10,
                'description' => 'Mauris cursus lacus sem, eget ornare dolor suscipit eget. Ut congue eros in pulvinar semper. Donec consectetur hendrerit tincidunt. Aliquam cursus convallis nisl vitae posuere. Aliquam mollis diam purus, et placerat ante porta sit amet. Sed faucibus sollicitudin ipsum nec.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 66,
                'name' => "Formal wallet for many colors",
                'slug' => "formal-wallet-for-many-colors",
                'category_id' => 10,
                'description' => 'Praesent aliquam libero nunc, sed ornare metus lobortis eu. Curabitur sagittis vehicula sapien, at sodales quam tempus quis. Morbi eros sapien, lacinia consectetur feugiat nec, finibus eu elit. Phasellus eget eleifend libero. Sed egestas turpis sit amet arcu sagittis viverra.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 67,
                'name' => "White handbag",
                'slug' => "white-handbag",
                'category_id' => 10,
                'description' => 'Vestibulum nisi lectus, mollis porta orci quis, rutrum tincidunt erat. Nam eget ligula luctus, consequat sapien in, pellentesque ante. Duis venenatis et metus at feugiat. Morbi vel enim sed mi vestibulum pretium sed vel ex. Nam non sagittis ligula. Nulla.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 68,
                'name' => "LV handbag color brown",
                'slug' => "lv-handbag-color-brown",
                'category_id' => 10,
                'description' => 'Mauris leo metus, eleifend sit amet lacus in, vestibulum mattis eros. Mauris sapien neque, convallis vitae ante non, sollicitudin fringilla risus. Vivamus faucibus et enim non malesuada. Nunc in egestas lacus, at interdum quam. Pellentesque habitant morbi tristique senectus et.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 69,
                'name' => "LV handbag",
                'slug' => "lv-handbag",
                'category_id' => 10,
                'description' => 'Suspendisse ac eros ut tortor porta tincidunt. Integer posuere dui eu metus dignissim blandit. Nunc congue sapien quis rhoncus cursus. Pellentesque interdum lorem eu volutpat commodo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer in dictum ipsum, a condimentum.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 70,
                'name' => "White beaded handbag",
                'slug' => "white-beaded-handbag",
                'category_id' => 10,
                'description' => 'Suspendisse potenti. Proin molestie, purus et interdum ultrices, ligula urna vehicula mauris, quis laoreet lacus erat in felis. Fusce facilisis mattis tempus. Ut sit amet maximus ex, sed porta lorem. Proin pellentesque scelerisque viverra. Nullam cursus orci vitae ipsum faucibus.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 71,
                'name' => "LV phonebag",
                'slug' => "lv-phonebag",
                'category_id' => 10,
                'description' => 'Praesent eget massa pharetra, interdum erat in, consectetur purus. Nulla a nibh arcu. Curabitur eget cursus elit. Ut neque massa, dapibus non magna nec, sodales consectetur augue. Morbi vitae turpis placerat ante aliquet blandit. Fusce ut ipsum vel diam maximus.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
        ]);

        //WALLET - id [72-76]
        \DB::table('products')->insert([
            [
                'id' => 72,
                'name' => "Squeeze hand black",
                'slug' => "squeeze-hand-black",
                'category_id' => 11,
                'description' => 'Quisque condimentum mi at porttitor porttitor. Nam vulputate neque quis lectus sagittis, id molestie metus venenatis. Donec pretium nunc nec consequat consequat. Suspendisse vulputate accumsan enim. Quisque vitae augue at libero mattis tristique. Integer blandit semper ligula quis consequat. Integer.',
                'is_featured' => \App\Product::IS_FEATURED,
            ],
            [
                'id' => 73,
                'name' => "Hand-shaded with two white and black",
                'slug' => "hand-shaded-with-two-white-and-black",
                'category_id' => 11,
                'description' => 'Aenean ac rhoncus nibh, in tempor arcu. Mauris a arcu sit amet metus gravida gravida. Morbi faucibus molestie velit sit amet egestas. Cras quis tempor lacus. Praesent sed eros non nulla tincidunt vestibulum vitae elementum velit. Mauris hendrerit sollicitudin magna.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 74,
                'name' => "Squeeze DIOR",
                'slug' => "squeeze-dior",
                'category_id' => 11,
                'description' => 'Nam aliquam in libero sit amet finibus. Morbi sit amet nulla placerat, rhoncus lectus eu, elementum nibh. Nam congue purus pharetra leo pretium, a dignissim risus hendrerit. Morbi ultricies erat ac pulvinar placerat. Nulla facilisi. Vestibulum at lectus sit amet.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 75,
                'name' => "LV portable money wallet color brown",
                'slug' => "lv-portable-money-wallet-color-brown",
                'category_id' => 11,
                'description' => 'Morbi eget imperdiet metus. Praesent lobortis tempor massa eu lobortis. Suspendisse elementum, turpis non faucibus mollis, lorem enim gravida justo, vel finibus ipsum lectus in turpis. Morbi scelerisque blandit erat, vel bibendum tortor finibus ac. Maecenas tempor ultrices tincidunt. Phasellus.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 76,
                'name' => "LV portable money wallet color black",
                'slug' => "lv-portable-money-wallet-color-black",
                'category_id' => 11,
                'description' => 'Vivamus vel tempus augue. Vivamus vel velit vehicula, finibus nulla vel, euismod massa. Vestibulum at congue nibh. Aenean laoreet, est at posuere tincidunt, purus lacus porta ligula, non ullamcorper ex mi in ex. Cras tristique orci pretium lacus molestie, id.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
        ]);

        //SET - id [77-83]
        \DB::table('products')->insert([
            [
                'id' => 77,
                'name' => "Set of t-shirt and jean skirt",
                'slug' => "set-of-t-shirt-and-jean-skirt",
                'category_id' => 12,
                'description' => 'Suspendisse rhoncus, nunc id varius interdum, arcu urna rutrum arcu, ac dignissim enim quam vel sapien. Fusce efficitur lacus vitae interdum sollicitudin. Quisque lacinia accumsan fermentum. Vestibulum lacinia eros erat, vel commodo sem tempus egestas. Vestibulum vitae diam vel ipsum.',
                'is_featured' => \App\Product::IS_FEATURED,
            ],
            [
                'id' => 78,
                'name' => "Set of clothes with white clothes",
                'slug' => "set-of-clothes-with-white-clothes",
                'category_id' => 12,
                'description' => 'Praesent aliquam sodales tellus, nec commodo neque. Integer faucibus, enim sodales pellentesque luctus, massa dolor sollicitudin massa, vitae blandit odio ex ac ipsum. Proin viverra tortor est, vulputate feugiat metus placerat in. Etiam vel dolor vestibulum, hendrerit nulla id, fringilla.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 79,
                'name' => "Set puffy sleeves and short jean",
                'slug' => "set-puffy-sleeve-and-short-jean",
                'category_id' => 12,
                'description' => 'Aenean et ornare tortor, et porta risus. Integer ac libero ipsum. Aliquam condimentum placerat felis nec facilisis. Suspendisse non ante efficitur, condimentum enim quis, facilisis sapien. Cras facilisis orci eget augue sagittis semper. Morbi nibh ipsum, aliquet vitae placerat sit.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 80,
                'name' => "White shirt and black polka dot skirt",
                'slug' => "white-shirt-and-black-polka-dot-skirt",
                'category_id' => 12,
                'description' => 'Fusce suscipit odio nibh, vel lacinia nibh feugiat sodales. Aenean facilisis massa vel euismod posuere. Phasellus vel viverra neque. Maecenas nunc velit, aliquam id viverra elementum, molestie eget nisl. Donec eleifend quis dolor sit amet mattis. Curabitur at consectetur enim.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 81,
                'name' => "Blue white shirt set and short jean skirt",
                'slug' => "blue-white-shirt-set-and-short-jean-skirt",
                'category_id' => 12,
                'description' => 'Fusce placerat sollicitudin nulla, sed euismod felis mollis ac. Nunc ultricies gravida eros, ac rhoncus est rutrum in. Quisque hendrerit turpis magna, eu malesuada nunc euismod at. Vestibulum mattis varius purus, non condimentum lacus vestibulum non. Nunc aliquam luctus ultrices.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 82,
                'name' => "Set of white shirt and short black shirt",
                'slug' => "set-of-white-shirt-and-short-black-shirt",
                'category_id' => 12,
                'description' => 'Mauris tellus ex, scelerisque eget pulvinar et, lacinia at enim. In nec ultricies magna. Ut at massa sit amet enim vehicula tincidunt. Vivamus quis iaculis tortor. Curabitur in nunc arcu. Nullam maximus pellentesque odio ac ornare. Praesent eu turpis augue.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
            [
                'id' => 83,
                'name' => "Set of off-shoulder shirt and white pant",
                'slug' => "set-of-off-shoulder-shirt-and-white-pant",
                'category_id' => 12,
                'description' => 'In hac habitasse platea dictumst. Curabitur augue tellus, pretium et aliquet nec, congue eget risus. Nam varius fermentum felis, in vehicula erat auctor vitae. Proin ex ex, dignissim sagittis mi id, volutpat euismod eros. Proin lobortis finibus orci eget viverra.',
                'is_featured' => \App\Product::NOT_FEATURED,
            ],
        ]);
    }
}
