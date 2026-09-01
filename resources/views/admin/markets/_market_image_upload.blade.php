<div class="mb-3">
    <label class="form-label fw-bold">{{ $label }}</label>
    <div class="border rounded p-3 text-center position-relative" style="background-color: #f8f9fa;">
        @php
            // Extract a clean ID for JS
            $cleanId = str_replace(['[', ']'], ['_', ''], $name);
            $fallback = 'https://placehold.co/600x400?text=Pilih+Foto';
            $imagePath = $default ? asset('assets/images/' . $default) : $fallback;
        @endphp
        <img id="preview_{{ $cleanId }}" src="{{ $imagePath }}" style="max-height: 200px; max-width: 100%; object-fit: contain; margin-bottom: 15px; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <br>
        <button type="button" class="btn btn-primary btn-sm px-4 rounded-pill" onclick="document.getElementById('input_{{ $cleanId }}').click()">
            <i class="fas fa-camera me-1"></i> Ubah Foto
        </button>
        <input type="file" id="input_{{ $cleanId }}" name="{{ $name }}" accept="image/*" class="d-none" onchange="previewImage(this, 'preview_{{ $cleanId }}')">
    </div>
</div>