@extends('admin.layout')

@section('content')
<div class="card border-0 shadow-sm mb-4">
    <div class="card-header bg-white py-3">
        <h5 class="mb-0 fw-bold">Pengaturan Halaman Home</h5>
    </div>
    <div class="card-body">


        <form action="{{ route('admin.home.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
                        <div class="mb-3">
                <label class="form-label fw-bold">Teks Hero (Judul) <span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="hero_title" value="{{ $home->hero_title ?? 'Suryasukses Group,' }}" required>
            </div>
            
            <div class="mb-4">
                <label class="form-label fw-bold">Teks Hero (Sub-judul) <span class="text-danger">*</span></label>
                <textarea class="form-control" name="hero_text" rows="3" required>{{ $home->hero_text }}</textarea>
            </div>

            <div class="mb-4">
                <h5 class="fw-bold mb-3">Slider</h5>
                @if(isset($sliders))
                @foreach($sliders as $slider)
                <div class="card mb-3 border bg-light">
                    <div class="card-body">
                        <h6 class="fw-bold">Slider {{ $slider->order }}</h6>
                        <div class="row">
                            <div class="col-md-3 border-end">
                                <label class="fw-bold d-block mb-2">Icon</label>
                                @if($slider->icon)
                                    <img id="preview_slider_icon_{{ $slider->id }}" src="{{ asset('assets/images/' . $slider->icon) }}" class="img-thumbnail mb-2" style="max-height: 100px; background-color: #d1d5db;">
                                    <div id="placeholder_slider_icon_{{ $slider->id }}" class="bg-secondary border text-center text-white mb-2 d-none align-items-center justify-content-center" style="height: 100px; max-width: 100px; border-radius: 5px;">
                                        <small>Kosong</small>
                                    </div>
                                @else
                                    <img id="preview_slider_icon_{{ $slider->id }}" src="" class="img-thumbnail mb-2 d-none" style="max-height: 100px; background-color: #d1d5db;">
                                    <div id="placeholder_slider_icon_{{ $slider->id }}" class="bg-secondary border text-center text-white mb-2 d-flex align-items-center justify-content-center" style="height: 100px; max-width: 100px; border-radius: 5px;">
                                        <small>Kosong</small>
                                    </div>
                                @endif
                                <div>
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('input_slider_icon_{{ $slider->id }}').click()">Ubah Icon</button>
                                    <input type="file" id="input_slider_icon_{{ $slider->id }}" class="d-none" name="sliders[{{ $slider->id }}][icon]" accept="image/*" onchange="previewImage(this, 'preview_slider_icon_{{ $slider->id }}', 'placeholder_slider_icon_{{ $slider->id }}')">
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="mb-2">
                                    <label class="fw-bold">Judul</label>
                                    <input type="text" class="form-control" name="sliders[{{ $slider->id }}][title]" value="{{ $slider->title }}" required>
                                </div>
                                <div class="mb-2">
                                    <label class="fw-bold">Deskripsi</label>
                                    <textarea class="form-control" rows="3" name="sliders[{{ $slider->id }}][description]" required>{{ $slider->description }}</textarea>
                                </div>
                                <div class="mb-2">
                                    <label class="fw-bold">Link URL</label>
                                    <input type="text" class="form-control" name="sliders[{{ $slider->id }}][link]" value="{{ $slider->link }}" required>
                                </div>
                                
                                <div class="mb-2 mt-4 p-3 border rounded bg-white">
                                    <label class="fw-bold d-block mb-2">Slider Images (Bisa pilih lebih dari 1)</label>
                                    
                                    <div class="d-flex flex-wrap gap-2 mb-3">
                                        @foreach($slider->images as $img)
                                        <div class="position-relative" style="width: 120px;" id="slider_image_wrapper_{{ $img->id }}">
                                            <img src="{{ asset('assets/images/' . $img->image) }}" class="img-thumbnail w-100" style="height: 100px; object-fit: cover;">
                                            <button type="button" class="btn btn-danger btn-sm position-absolute top-0 end-0 m-1 p-0 px-1" onclick="deleteSliderImage({{ $img->id }})">&times;</button>
                                        </div>
                                        @endforeach
                                    </div>

                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('input_slider_images_{{ $slider->id }}').click()">Tambah Foto</button>
                                    <input type="file" id="input_slider_images_{{ $slider->id }}" class="d-none" name="sliders[{{ $slider->id }}][new_images][]" accept="image/*" multiple onchange="updateFileCount(this, 'file_count_{{ $slider->id }}')">
                                    <span id="file_count_{{ $slider->id }}" class="ms-2 text-muted" style="font-size: 0.85rem;"></span>
                                    <div class="mt-1"><small class="text-muted">Pilih beberapa foto sekaligus untuk ditambahkan ke koleksi foto ini.</small></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>

            <div class="mb-4">
                <h5 class="fw-bold mb-3">Banner Card</h5>
                @foreach($cards as $card)
                <div class="card mb-3 border bg-light">
                    <div class="card-body">
                        <h6 class="fw-bold">Banner Card {{ $card->order }}</h6>
                        <div class="row">
                            <div class="col-md-4 border-end">
                                @if($card->image)
                                    <img id="preview_card_{{ $card->id }}" src="{{ asset('assets/images/' . $card->image) }}" class="img-thumbnail mb-2" style="max-height: 120px;">
                                    <div id="placeholder_card_{{ $card->id }}" class="bg-light border text-center text-muted mb-2 d-none align-items-center justify-content-center" style="height: 100px; max-width: 150px; border-radius: 5px; ">
                                        <small>Kosong</small>
                                    </div>
                                @else
                                    <img id="preview_card_{{ $card->id }}" src="" class="img-thumbnail mb-2 d-none" style="max-height: 120px; ">
                                    <div id="placeholder_card_{{ $card->id }}" class="bg-light border text-center text-muted mb-2 d-flex align-items-center justify-content-center" style="height: 100px; max-width: 150px; border-radius: 5px;">
                                        <small>Kosong</small>
                                    </div>
                                @endif
                                <div>
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('input_card_{{ $card->id }}').click()">Ubah Foto</button>
                                    <input type="file" id="input_card_{{ $card->id }}" class="d-none" name="cards[{{ $card->id }}][image]" accept="image/*" onchange="previewImage(this, 'preview_card_{{ $card->id }}', 'placeholder_card_{{ $card->id }}')">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="mb-2">
                                    <label class="fw-bold">Judul</label>
                                    <input type="text" class="form-control" name="cards[{{ $card->id }}][title]" value="{{ $card->title }}" required>
                                </div>
                                <div class="mb-2">
                                    <label class="fw-bold">Deskripsi</label>
                                    <textarea class="form-control" rows="3" name="cards[{{ $card->id }}][description]" required>{{ $card->description }}</textarea>
                                </div>
                                <div class="mb-2">
                                    <label class="fw-bold">Link URL</label>
                                    <input type="text" class="form-control" name="cards[{{ $card->id }}][link]" value="{{ $card->link }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

                        <div id="deleted_images_container"></div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan Home</button>
        </form>
    </div>
</div>
@endsection


@push('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    function deleteSliderImage(id) {
        if(confirm('Hapus foto ini saat disimpan?')) {
            document.getElementById('slider_image_wrapper_' + id).style.display = 'none';
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'delete_slider_images[]';
            input.value = id;
            document.getElementById('deleted_images_container').appendChild(input);
        }
    }
    $(document).ready(function() {
        $('.summernote').summernote({
            height: 150,
            toolbar: [
                ['font', ['bold', 'underline', 'clear']],
                ['para', ['ul', 'ol', 'paragraph']]
            ]
        });
    });

    function previewImage(input, previewId, placeholderId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var img = document.getElementById(previewId);
                var placeholder = document.getElementById(placeholderId);
                if (img) {
                    img.src = e.target.result;
                    img.classList.remove('d-none');
                    img.style.display = 'block';
                }
                if (placeholder) {
                    placeholder.classList.remove('d-flex');
                    placeholder.classList.add('d-none');
                }
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function updateFileCount(input, displayId) {
        var count = input.files ? input.files.length : 0;
        var display = document.getElementById(displayId);
        if (display) {
            display.textContent = count > 0 ? count + ' file(s) selected' : '';
        }
    }
</script>
@endpush
