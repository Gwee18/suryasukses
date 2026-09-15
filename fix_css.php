<?php

function process_file($filepath) {
    $content = file_get_contents($filepath);

    // 1. Fix the @if (has image) placeholders.
    // They currently have `d-flex` and `display: none !important;` (or similar)
    // We want to change them to `d-none` and remove the inline display.
    $content = preg_replace(
        '/d-flex align-items-center justify-content-center" style="([^"]*?)display:\s*none\s*!important;?"/',
        'd-none align-items-center justify-content-center" style="$1"',
        $content
    );

    // 2. Fix the @else (no image) img tags. They currently have `display: none;` inline.
    // We want to use `d-none` class instead of inline style.
    $content = preg_replace(
        '/class="img-thumbnail([^"]*?)" style="([^"]*?)display:\s*none;?"/',
        'class="img-thumbnail$1 d-none" style="$2"',
        $content
    );

    // 3. Update the Javascript function.
    $js_new = 'function previewImage(input, previewId, placeholderId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var img = document.getElementById(previewId);
                var placeholder = document.getElementById(placeholderId);
                if (img) {
                    img.src = e.target.result;
                    img.classList.remove(\'d-none\');
                    img.style.display = \'\';
                }
                if (placeholder) {
                    placeholder.classList.remove(\'d-flex\');
                    placeholder.classList.add(\'d-none\');
                }
            }
            reader.readAsDataURL(input.files[0]);
        }
    }';

    // Replace the JS function body
    $content = preg_replace(
        '/function previewImage\(input, previewId, placeholderId\)\s*\{.*?\n\s*\}\n\s*\}\n\s*\}/s',
        $js_new,
        $content
    );

    file_put_contents($filepath, $content);
}

process_file('resources/views/admin/about/form.blade.php');
process_file('resources/views/admin/home/form.blade.php');
echo "Fixed CSS classes and JS!\n";
