<div class="mb-3">
    <label class="form-label fw-bold">{{ $label }} <span class="text-danger">*</span></label>
    <div class="border rounded p-3 text-center position-relative" style="background-color: #f8f9fa;">
        @php
            $fallback = isset($default) ? asset('assets/images/' . $default) : 'https://placehold.co/600x400?text=Pilih+Foto';
            $imagePath = isset($page->content[$name]) && $page->content[$name] ? asset('assets/images/' . $page->content[$name]) : $fallback;
        @endphp
        <img id="preview_{{ $name }}" src="{{ $imagePath }}" style="max-height: 200px; max-width: 100%; object-fit: contain; margin-bottom: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <br>
        <button type="button" class="btn btn-primary btn-sm px-4 rounded-pill" onclick="document.getElementById('input_{{ $name }}').click()">
            <i class="fas fa-camera me-1"></i> Ubah Foto
        </button>
        <input type="file" id="input_{{ $name }}" name="content_images[{{ $name }}]" accept="image/*" class="d-none" onchange="previewImage(this, 'preview_{{ $name }}')">
    </div>
</div>
