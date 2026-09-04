@extends('admin.layout')

@section('content')
<div class="card border-0 shadow-sm mb-4">
    <div class="card-header bg-white py-3">
        <h5 class="mb-0 fw-bold">Pengaturan Halaman About</h5>
    </div>
    <div class="card-body">


        <form action="{{ route('admin.about.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="accordion mb-4" id="aboutAccordion">
                
                <!-- Who We Are -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="hWhoWeAre">
                        <button class="accordion-button fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#cWhoWeAre" aria-expanded="true">
                            1. Who We Are
                        </button>
                    </h2>
                    <div id="cWhoWeAre" class="accordion-collapse collapse show" data-bs-parent="#aboutAccordion">
                        <div class="accordion-body">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="fw-bold d-block mb-2">Gambar 1</label>
                                    @if($about->who_we_are_img1)
                                        <img id="preview_who_we_are_img1" src="{{ asset('assets/images/' . $about->who_we_are_img1) }}" class="img-thumbnail mb-2" style="max-height: 100px;">
                                        <div id="placeholder_who_we_are_img1" class="bg-light border text-center text-muted mb-2 d-none align-items-center justify-content-center" style="height: 80px; max-width: 150px; border-radius: 5px; ">
                                            <small>Kosong</small>
                                        </div>
                                    @else
                                        <img id="preview_who_we_are_img1" src="" class="img-thumbnail mb-2 d-none" style="max-height: 100px; ">
                                        <div id="placeholder_who_we_are_img1" class="bg-light border text-center text-muted mb-2 d-flex align-items-center justify-content-center" style="height: 80px; max-width: 150px; border-radius: 5px;">
                                            <small>Kosong</small>
                                        </div>
                                    @endif
                                    <div>
                                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('input_who_we_are_img1').click()">Ubah Foto</button>
                                        <input type="file" id="input_who_we_are_img1" class="d-none" name="who_we_are_img1" accept="image/*" onchange="previewImage(this, 'preview_who_we_are_img1', 'placeholder_who_we_are_img1')">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="fw-bold d-block mb-2">Gambar 2</label>
                                    @if($about->who_we_are_img2)
                                        <img id="preview_who_we_are_img2" src="{{ asset('assets/images/' . $about->who_we_are_img2) }}" class="img-thumbnail mb-2" style="max-height: 100px;">
                                        <div id="placeholder_who_we_are_img2" class="bg-light border text-center text-muted mb-2 d-none align-items-center justify-content-center" style="height: 80px; max-width: 150px; border-radius: 5px; ">
                                            <small>Kosong</small>
                                        </div>
                                    @else
                                        <img id="preview_who_we_are_img2" src="" class="img-thumbnail mb-2 d-none" style="max-height: 100px; ">
                                        <div id="placeholder_who_we_are_img2" class="bg-light border text-center text-muted mb-2 d-flex align-items-center justify-content-center" style="height: 80px; max-width: 150px; border-radius: 5px;">
                                            <small>Kosong</small>
                                        </div>
                                    @endif
                                    <div>
                                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('input_who_we_are_img2').click()">Ubah Foto</button>
                                        <input type="file" id="input_who_we_are_img2" class="d-none" name="who_we_are_img2" accept="image/*" onchange="previewImage(this, 'preview_who_we_are_img2', 'placeholder_who_we_are_img2')">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-2">
                                <label class="fw-bold">Teks Konten</label>
                                <textarea class="form-control" rows="5" name="who_we_are_text">{{ $about->who_we_are_text }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Our Values -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="hValues">
                        <button class="accordion-button collapsed fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#cValues">
                            2. Our Values
                        </button>
                    </h2>
                    <div id="cValues" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                        <div class="accordion-body">
                            <div class="mb-3">
                                <label class="fw-bold d-block mb-2">Gambar Cover</label>
                                @if($value->image)
                                    <img id="preview_value_image" src="{{ asset('assets/images/' . $value->image) }}" class="img-thumbnail mb-2" style="max-height: 100px;">
                                    <div id="placeholder_value_image" class="bg-light border text-center text-muted mb-2 d-none align-items-center justify-content-center" style="height: 100px; max-width: 150px; border-radius: 5px; ">
                                        <small>Kosong</small>
                                    </div>
                                @else
                                    <img id="preview_value_image" src="" class="img-thumbnail mb-2 d-none" style="max-height: 100px; ">
                                    <div id="placeholder_value_image" class="bg-light border text-center text-muted mb-2 d-flex align-items-center justify-content-center" style="height: 100px; max-width: 150px; border-radius: 5px;">
                                        <small>Kosong</small>
                                    </div>
                                @endif
                                <div>
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('input_value_image').click()">Ubah Foto</button>
                                    <input type="file" id="input_value_image" class="d-none" name="value_image" accept="image/*" onchange="previewImage(this, 'preview_value_image', 'placeholder_value_image')">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Partnerships Title</label>
                                    <input type="text" class="form-control" name="partnership_title" value="{{ $value->partnership_title }}">
                                    <textarea class="form-control mt-2" rows="3" name="partnership_text">{{ $value->partnership_text }}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Excellence Title</label>
                                    <input type="text" class="form-control" name="excellence_title" value="{{ $value->excellence_title }}">
                                    <textarea class="form-control mt-2" rows="3" name="excellence_text">{{ $value->excellence_text }}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Growth Title</label>
                                    <input type="text" class="form-control" name="growth_title" value="{{ $value->growth_title }}">
                                    <textarea class="form-control mt-2" rows="3" name="growth_text">{{ $value->growth_text }}</textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="fw-bold">Safety Title</label>
                                    <input type="text" class="form-control" name="safety_title" value="{{ $value->safety_title }}">
                                    <textarea class="form-control mt-2" rows="3" name="safety_text">{{ $value->safety_text }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quality Statement -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="hQuality">
                        <button class="accordion-button collapsed fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#cQuality">
                            3. Quality Statement
                        </button>
                    </h2>
                    <div id="cQuality" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                        <div class="accordion-body">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="fw-bold d-block mb-2">Gambar 1</label>
                                    @if($quality->img1)
                                        <img id="preview_quality_img1" src="{{ asset('assets/images/' . $quality->img1) }}" class="img-thumbnail mb-2" style="max-height: 80px;">
                                        <div id="placeholder_quality_img1" class="bg-light border text-center text-muted mb-2 d-none align-items-center justify-content-center" style="height: 80px; max-width: 150px; border-radius: 5px; ">
                                            <small>Kosong</small>
                                        </div>
                                    @else
                                        <img id="preview_quality_img1" src="" class="img-thumbnail mb-2 d-none" style="max-height: 80px; ">
                                        <div id="placeholder_quality_img1" class="bg-light border text-center text-muted mb-2 d-flex align-items-center justify-content-center" style="height: 80px; max-width: 150px; border-radius: 5px;">
                                            <small>Kosong</small>
                                        </div>
                                    @endif
                                    <div>
                                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('input_quality_img1').click()">Ubah Foto</button>
                                        <input type="file" id="input_quality_img1" class="d-none" name="quality_img1" accept="image/*" onchange="previewImage(this, 'preview_quality_img1', 'placeholder_quality_img1')">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="fw-bold d-block mb-2">Gambar 2</label>
                                    @if($quality->img2)
                                        <img id="preview_quality_img2" src="{{ asset('assets/images/' . $quality->img2) }}" class="img-thumbnail mb-2" style="max-height: 80px;">
                                        <div id="placeholder_quality_img2" class="bg-light border text-center text-muted mb-2 d-none align-items-center justify-content-center" style="height: 80px; max-width: 150px; border-radius: 5px; ">
                                            <small>Kosong</small>
                                        </div>
                                    @else
                                        <img id="preview_quality_img2" src="" class="img-thumbnail mb-2 d-none" style="max-height: 80px; ">
                                        <div id="placeholder_quality_img2" class="bg-light border text-center text-muted mb-2 d-flex align-items-center justify-content-center" style="height: 80px; max-width: 150px; border-radius: 5px;">
                                            <small>Kosong</small>
                                        </div>
                                    @endif
                                    <div>
                                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('input_quality_img2').click()">Ubah Foto</button>
                                        <input type="file" id="input_quality_img2" class="d-none" name="quality_img2" accept="image/*" onchange="previewImage(this, 'preview_quality_img2', 'placeholder_quality_img2')">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label class="fw-bold d-block mb-2">Gambar 3 (Badge)</label>
                                    @if($quality->img3)
                                        <img id="preview_quality_img3" src="{{ asset('assets/images/' . $quality->img3) }}" class="img-thumbnail mb-2" style="max-height: 80px;">
                                        <div id="placeholder_quality_img3" class="bg-light border text-center text-muted mb-2 d-none align-items-center justify-content-center" style="height: 80px; max-width: 150px; border-radius: 5px; ">
                                            <small>Kosong</small>
                                        </div>
                                    @else
                                        <img id="preview_quality_img3" src="" class="img-thumbnail mb-2 d-none" style="max-height: 80px; ">
                                        <div id="placeholder_quality_img3" class="bg-light border text-center text-muted mb-2 d-flex align-items-center justify-content-center" style="height: 80px; max-width: 150px; border-radius: 5px;">
                                            <small>Kosong</small>
                                        </div>
                                    @endif
                                    <div>
                                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('input_quality_img3').click()">Ubah Foto</button>
                                        <input type="file" id="input_quality_img3" class="d-none" name="quality_img3" accept="image/*" onchange="previewImage(this, 'preview_quality_img3', 'placeholder_quality_img3')">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="fw-bold">Paragraf 1</label>
                                <textarea class="form-control" rows="5" name="quality_text1">{{ $quality->text1 }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="fw-bold">Paragraf 2</label>
                                <textarea class="form-control" rows="5" name="quality_text2">{{ $quality->text2 }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="fw-bold">Paragraf 3</label>
                                <textarea class="form-control" rows="5" name="quality_text3">{{ $quality->text3 }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Career -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="hCareer">
                        <button class="accordion-button collapsed fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#cCareer">
                            4. Career
                        </button>
                    </h2>
                    <div id="cCareer" class="accordion-collapse collapse" data-bs-parent="#aboutAccordion">
                        <div class="accordion-body">
                            <div class="mb-3">
                                <label class="fw-bold d-block mb-2">Gambar Header</label>
                                @if($career->image)
                                    <img id="preview_career_image" src="{{ asset('assets/images/' . $career->image) }}" class="img-thumbnail mb-2" style="max-height: 100px;">
                                    <div id="placeholder_career_image" class="bg-light border text-center text-muted mb-2 d-none align-items-center justify-content-center" style="height: 100px; max-width: 150px; border-radius: 5px; ">
                                        <small>Kosong</small>
                                    </div>
                                @else
                                    <img id="preview_career_image" src="" class="img-thumbnail mb-2 d-none" style="max-height: 100px; ">
                                    <div id="placeholder_career_image" class="bg-light border text-center text-muted mb-2 d-flex align-items-center justify-content-center" style="height: 100px; max-width: 150px; border-radius: 5px;">
                                        <small>Kosong</small>
                                    </div>
                                @endif
                                <div>
                                    <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('input_career_image').click()">Ubah Foto</button>
                                    <input type="file" id="input_career_image" class="d-none" name="career_image" accept="image/*" onchange="previewImage(this, 'preview_career_image', 'placeholder_career_image')">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="fw-bold">Teks Karir</label>
                                <textarea class="form-control" rows="5" name="career_text">{{ $career->text }}</textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <label class="fw-bold">Teks Tombol</label>
                                    <input type="text" class="form-control" name="career_btn_text" value="{{ $career->btn_text }}">
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="fw-bold">Link Tombol (JobStreet)</label>
                                    <input type="url" class="form-control" name="career_btn_link" value="{{ $career->btn_link }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan About</button>
        </form>
    </div>
</div>
@endsection

@push('styles')

@endpush
@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function previewImage(input, previewId, placeholderId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                var img = document.getElementById(previewId);
                var placeholder = document.getElementById(placeholderId);
                if (img) {
                    img.src = e.target.result;
                    img.style.display = 'block';
                }
                if (placeholder) placeholder.style.setProperty('display', 'none', 'important');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>

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
</script>
@endpush
