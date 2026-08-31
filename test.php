<?php
require __DIR__ . '/vendor/autoload.php';
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

$page = App\Models\Page::where('slug', 'about-career')->first();
$content = $page->content;

// Clean up the career text by removing the button HTML
$content['career_text'] = preg_replace('/<p><a class="btn join-team-btn[^>]*>.*?<\/a><\/p>/is', '', $content['career_text']);

// Set defaults if not present
if (!isset($content['career_btn_text'])) $content['career_btn_text'] = 'Join Our Team';
if (!isset($content['career_btn_color'])) $content['career_btn_color'] = '#0056b3';
if (!isset($content['career_link'])) $content['career_link'] = 'https://id.jobstreet.com/companies/suryasukses-group-168535852924657';

$page->content = $content;
$page->save();
echo "Done DB updates";
