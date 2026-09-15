<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$page = \App\Models\Page::where('slug', 'home')->first();
$content = $page->content ?? [];
$defaultProducts = [
    1 => ['images' => ['home/bottle001-new.png', 'home/bottle002.jpg']],
    2 => ['images' => ['home/drinking-cups001-new.png', 'home/drinking-cups002.jpg']],
    3 => ['images' => ['home/cover-specialty.jpg']],
    4 => ['images' => ['home/cover-garden.jpg', 'home/cover-cleaningware.jpg', 'home/cover-racks.jpg', 'home/cover-kitchenware.jpg', 'home/cover-sealware.jpg', 'home/cover-bathroom.jpg']],
    5 => ['images' => ['home/cover-roofing-suryasukses.jpg']]
];
foreach([1,2,3,4,5] as $i) {
    if (!isset($content['prod_img_'.$i])) {
        $content['prod_img_'.$i] = $defaultProducts[$i]['images'];
    }
}
$page->content = $content;
$page->save();
echo "Patched successfully.\n";
