import re

def process_file(filepath):
    with open(filepath, 'r') as f:
        content = f.read()

    # 1. Fix the @if (has image) placeholders. They currently have `d-flex` and `display: none !important;`
    # We want to change them to `d-none` and remove the inline display.
    # Pattern: d-flex align-items-center justify-content-center" style="height: 80px; max-width: 150px; border-radius: 5px; display: none !important;"
    content = re.sub(
        r'd-flex align-items-center justify-content-center" style="([^"]*?)display:\s*none\s*!important;?"',
        r'd-none align-items-center justify-content-center" style="\1"',
        content
    )
    # Also handle 100px height ones in home/form
    content = re.sub(
        r'd-flex align-items-center justify-content-center" style="([^"]*?)display:\s*none\s*!important;?"',
        r'd-none align-items-center justify-content-center" style="\1"',
        content
    )

    # 2. Fix the @else (no image) img tags. They currently have `display: none;` inline.
    # We want to use `d-none` class instead of inline style.
    content = re.sub(
        r'class="img-thumbnail([^"]*?)" style="([^"]*?)display:\s*none;?"',
        r'class="img-thumbnail\1 d-none" style="\2"',
        content
    )

    # 3. Update the Javascript function.
    js_new = '''function previewImage(input, previewId, placeholderId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var img = document.getElementById(previewId);
                var placeholder = document.getElementById(placeholderId);
                if (img) {
                    img.src = e.target.result;
                    img.classList.remove('d-none');
                    img.style.display = ''; // Clear inline block if any
                }
                if (placeholder) {
                    placeholder.classList.remove('d-flex');
                    placeholder.classList.add('d-none');
                }
            }
            reader.readAsDataURL(input.files[0]);
        }
    }'''

    # Replace the JS function body
    content = re.sub(
        r'function previewImage\(input, previewId, placeholderId\)\s*\{.*?\n\s*\}\n\s*\}\n\s*\}',
        js_new,
        content,
        flags=re.DOTALL
    )

    with open(filepath, 'w') as f:
        f.write(content)


process_file('resources/views/admin/about/form.blade.php')
process_file('resources/views/admin/home/form.blade.php')
print("Fixed CSS classes and JS!")
