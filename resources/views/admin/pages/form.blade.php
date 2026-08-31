@extends('admin.layout')

@section('title', 'Edit Halaman')
@section('header', 'Edit Konten Halaman')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3">
        <h5 class="m-0 font-weight-bold">Edit Halaman: {{ $page->title }}</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.pages.update', $page->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            @if($page->slug != 'home')
            <div class="row">
                <div class="col-md-6 mb-3">
                    @php
                        $defaultSub = '';
                        if ($page->slug == 'about') $defaultSub = 'About Us';
                        elseif ($page->slug == 'about-quality') $defaultSub = 'Our culture of perfections';
                    @endphp
                    <label class="form-label fw-bold">Teks Kecil di Atas Judul (Sub-heading) <span class="text-muted fw-normal">(opsional)</span></label>
                    <input type="text" class="form-control" name="content[sub_heading]" value="{{ $page->content['sub_heading'] ?? $defaultSub }}" placeholder="Contoh: About Us, Our culture...">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="title" class="form-label fw-bold">Judul Halaman Utama <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $page->title) }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            @endif

            @if($page->slug == 'home')
                <div class="accordion mb-4" id="homeAccordion">
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingHero">
                            <button class="accordion-button fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseHero" aria-expanded="true" aria-controls="collapseHero">
                                <i class="fas fa-image me-2"></i> 1. Bagian Atas (Hero)
                            </button>
                        </h2>
                        <div id="collapseHero" class="accordion-collapse collapse show" aria-labelledby="headingHero" data-bs-parent="#homeAccordion">
                            <div class="accordion-body">
                    <div class="mb-3">
                        <label for="home_title" class="form-label fw-bold">Judul Halaman (Teks Hero Utama) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="home_title" name="title" value="{{ old('title', $page->title) }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Teks Hero Sambutan <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="content[hero_text]" rows="2" required>{{ $page->content['hero_text'] ?? '' }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Background Hero (Gambar/Video) <span class="text-muted fw-normal">(opsional)</span></label>
                        <div class="alert alert-info py-2 mb-2" style="font-size: 0.85rem;">Jika dikosongkan, akan menggunakan video default bawaan sistem. Bisa berupa foto (.jpg/.png) atau video (.mp4/.webm).</div>
                        
                        <div class="border rounded p-3 mb-2 text-center" style="background-color: #f8f9fa;">
                            <label class="fw-bold d-block mb-2">Pratinjau Saat Ini:</label>
                            @php
                                $heroBg = $page->content['hero_bg'] ?? null;
                                $isBgVideo = !$heroBg || Str::endsWith(strtolower($heroBg), ['.mp4', '.webm']);
                            @endphp
                            
                            <div id="hero_preview_container">
                                @if($isBgVideo)
                                    <video autoplay muted loop playsinline style="max-height: 200px; max-width: 100%; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); margin-bottom: 15px;">
                                        <source src="{{ $heroBg ? asset('assets/images/' . $heroBg) : asset('assets/videos/videoplayback.webm') }}" type="{{ $heroBg && Str::endsWith(strtolower($heroBg), '.mp4') ? 'video/mp4' : 'video/webm' }}">
                                    </video>
                                @else
                                    <img src="{{ asset('assets/images/' . $heroBg) }}" style="max-height: 200px; max-width: 100%; object-fit: contain; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); margin-bottom: 15px;">
                                @endif
                            </div>
                            <br>
                            <button type="button" class="btn btn-primary btn-sm px-4 rounded-pill" onclick="document.getElementById('input_hero_bg').click()">
                                Ubah Video/Foto
                            </button>
                            <input type="file" id="input_hero_bg" name="content_images[hero_bg]" accept="image/*,video/mp4,video/webm" class="d-none" onchange="previewHeroBg(this)">
                        </div>

                        <div id="hero_custom_file_text" class="mt-2 text-success" style="font-size: 0.85rem;">
                            @if(isset($page->content['hero_bg']))
                                File kustom terpasang: <strong>{{ basename($page->content['hero_bg']) }}</strong>
                            @endif
                        </div>
                    </div>

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingProduct">
                            <button class="accordion-button collapsed fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseProduct" aria-expanded="false" aria-controls="collapseProduct">
                                <i class="fas fa-box-open me-2"></i> 2. 5 Kategori Produk Unggulan
                            </button>
                        </h2>
                        <div id="collapseProduct" class="accordion-collapse collapse" aria-labelledby="headingProduct" data-bs-parent="#homeAccordion">
                            <div class="accordion-body">
                    <div class="alert alert-info py-2" style="font-size: 0.85rem;">
                        Upload foto (Slider) bersifat opsional. Jika Anda mengupload file baru, foto yang lama akan ditimpa.
                    </div>
                    @foreach([
                        1 => ['title' => 'Bottles and Caps', 'desc' => 'Recyclable bottles that deliver pristine quality to fulfill customers` needs.', 'icon' => 'home/bawah-slide1.png'],
                        2 => ['title' => 'Drinking Cups & Lids', 'desc' => 'Our disposable cups are light-weight and cost efficient. We also offer multiple decoration options.', 'icon' => 'home/bawah-slide-5.png'],
                        3 => ['title' => 'Specialty Nonwoven', 'desc' => 'A versatile product that can be printed or luminated. Its naturally porous, light-weight and eco-friendly characteristics make spunbond a multipurpose product.', 'icon' => 'home/bawah-slide2.png'],
                        4 => ['title' => 'Housewares', 'desc' => 'We provide customers with qualified household products, innovative design, and prompt delivery at a very competitive price. Each products are designed to comfort and ease your life.', 'icon' => 'home/bawah-slide3.png'],
                        5 => ['title' => 'Roofing System', 'desc' => 'Roofing sheets manufactured from UPVC, designed to suit a diverse range of applications in various markets.', 'icon' => 'home/bawah-slide4.png'],
                    ] as $i => $default)
                        <div class="card mb-3 border bg-light">
                            <div class="card-body">
                                <h6 class="fw-bold text-primary">Kategori Produk {{ $i }}</h6>
                                <div class="row">
                                    <div class="col-md-3 border-end">
                                        @include('admin.pages._image_upload', ['name' => 'prod_icon_'.$i, 'label' => 'Ikon Kategori', 'default' => $default['icon']])
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <label class="fw-bold">Judul Produk <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="content[prod_title_{{ $i }}]" value="{{ $page->content['prod_title_'.$i] ?? $default['title'] }}" required>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <label class="fw-bold">Link Detail <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="content[prod_link_{{ $i }}]" value="{{ $page->content['prod_link_'.$i] ?? route('product') }}" required>
                                            </div>
                                        </div>
                                        <div class="mb-2">
                                            <label class="fw-bold">Deskripsi Singkat <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="content[prod_desc_{{ $i }}]" rows="2" required>{{ $page->content['prod_desc_'.$i] ?? $default['desc'] }}</textarea>
                                        </div>
                                        <div class="mb-2">
                                            <label class="fw-bold d-block">Foto-foto Produk (Slider)</label>
                                            @if(isset($page->content['prod_img_'.$i]) && is_array($page->content['prod_img_'.$i]) && count($page->content['prod_img_'.$i]) > 0)
                                                <div class="mt-2 p-2 border rounded bg-white mb-2">
                                                    <label class="form-label mb-2 fw-semibold text-muted" style="font-size: 0.85rem;">Foto Terpasang (Klik ikon silang merah untuk menghapus):</label>
                                                    <div class="d-flex flex-wrap gap-2">
                                                        @foreach($page->content['prod_img_'.$i] as $idx => $img)
                                                            <div class="position-relative border rounded p-1" id="prod_img_{{ $i }}_{{ $idx }}" style="background: #f8f9fa; width: 80px; height: 80px;">
                                                                <img src="{{ asset('assets/images/' . $img) }}" style="width: 100%; height: 100%; object-fit: cover; border-radius: 3px;">
                                                                <button type="button" class="btn btn-danger btn-sm position-absolute rounded-circle p-0 d-flex align-items-center justify-content-center" 
                                                                    style="top: -5px; right: -5px; width: 20px; height: 20px; font-size: 14px; font-weight: bold; line-height: 1;"
                                                                    onclick="document.getElementById('prod_img_{{ $i }}_{{ $idx }}').remove()">
                                                                    &times;
                                                                </button>
                                                                <input type="hidden" name="content[prod_img_{{ $i }}][]" value="{{ $img }}">
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                            <button type="button" class="btn btn-outline-primary btn-sm px-3" onclick="document.getElementById('input_prod_img_{{ $i }}').click()">
                                                &#43; Tambah Foto Baru
                                            </button>
                                            <span class="text-muted ms-2" style="font-size: 0.85rem;">(Bisa pilih lebih dari satu foto)</span>
                                            <input type="file" id="input_prod_img_{{ $i }}" class="d-none" name="content_images[prod_img_{{ $i }}][]" multiple accept="image/*" onchange="previewMultipleImages(this, 'preview_new_prod_img_{{ $i }}')">
                                            <div id="preview_new_prod_img_{{ $i }}" class="d-flex flex-wrap gap-2 mt-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingCards">
                            <button class="accordion-button collapsed fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCards" aria-expanded="false" aria-controls="collapseCards">
                                <i class="fas fa-th-large me-2"></i> 3. Informasi 4 Kartu Tengah (Info Cards)
                            </button>
                        </h2>
                        <div id="collapseCards" class="accordion-collapse collapse" aria-labelledby="headingCards" data-bs-parent="#homeAccordion">
                            <div class="accordion-body">
                    @foreach([
                        1 => ['title' => 'Get to Know SAP', 'desc' => 'Established in 1990, we are uniquely positioned to provide customers with the best, on-trend products.', 'img' => 'home/d1f20f2452homesec-1.jpg', 'link' => route('about')],
                        2 => ['title' => 'Our Markets', 'desc' => 'Combining three-decade experience and a fully dedicated team, we are ready to serve a wide range of industries.', 'img' => 'home/f49e0c021bhomesec-2.jpg', 'link' => route('markets.beverage')],
                        3 => ['title' => 'SAP Solutions', 'desc' => 'Transform your idea into realization with our design team. Discover value-added, customized solutions.', 'img' => 'home/9fadce803chomesec-3.jpg', 'link' => route('solutions')],
                        4 => ['title' => 'SAP Career', 'desc' => 'Join us. Grow together. Get in touch now to explore exciting opportunities.', 'img' => 'home/2008b6a72chomesec-4.jpg', 'link' => route('about.career')]
                    ] as $i => $default)
                        <div class="card mb-3 border bg-light">
                            <div class="card-body">
                                <h6 class="fw-bold">Kartu {{ $i }}</h6>
                                <div class="row">
                                    <div class="col-md-4">
                                        @include('admin.pages._image_upload', ['name' => 'info_img_'.$i, 'label' => 'Gambar Kartu', 'default' => $default['img']])
                                    </div>
                                    <div class="col-md-8">
                                        <div class="mb-2">
                                            <label class="fw-bold">Judul Kartu <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="content[info_title_{{ $i }}]" value="{{ $page->content['info_title_'.$i] ?? $default['title'] }}" required>
                                        </div>
                                        <div class="mb-2">
                                            <label class="fw-bold">Deskripsi Kartu <span class="text-danger">*</span></label>
                                            <textarea class="form-control" name="content[info_desc_{{ $i }}]" rows="2" required>{{ $page->content['info_desc_'.$i] ?? $default['desc'] }}</textarea>
                                        </div>
                                        <div class="mb-2">
                                            <label class="fw-bold">Link (URL) Tujuan <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="content[info_link_{{ $i }}]" value="{{ $page->content['info_link_'.$i] ?? $default['link'] }}" placeholder="Contoh: https://... atau /about" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingNews">
                            <button class="accordion-button collapsed fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNews" aria-expanded="false" aria-controls="collapseNews">
                                <i class="fas fa-newspaper me-2"></i> 4. Bagian Berita (News & Articles)
                            </button>
                        </h2>
                        <div id="collapseNews" class="accordion-collapse collapse" aria-labelledby="headingNews" data-bs-parent="#homeAccordion">
                            <div class="accordion-body">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Judul Bagian Berita <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="content[news_title]" value="{{ $page->content['news_title'] ?? 'News and Articles' }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Pilih Berita yang Ditampilkan <span class="text-danger">*</span></label>
                        <div class="alert alert-info py-2" style="font-size: 0.85rem;">
                            Centang <strong>maksimal 4 berita</strong> yang ingin ditampilkan di halaman depan.
                        </div>
                        <div class="border rounded p-3" style="max-height: 250px; overflow-y: auto; background-color: #f8f9fa;">
                            @php
                                $selectedNews = $page->content['selected_news'] ?? [];
                                if (empty($selectedNews) && count($posts) > 0) {
                                    $selectedNews = $posts->take(4)->pluck('id')->toArray();
                                }
                            @endphp
                            @foreach($posts as $post)
                                <div class="form-check mb-2">
                                    <input class="form-check-input border-secondary news-checkbox" type="checkbox" name="content[selected_news][]" value="{{ $post->id }}" id="news_{{ $post->id }}" {{ in_array($post->id, $selectedNews) ? 'checked' : '' }}>
                                    <label class="form-check-label w-100 cursor-pointer" for="news_{{ $post->id }}">
                                        <strong>{{ $post->title }}</strong> 
                                        <span class="text-muted" style="font-size: 0.85rem;">({{ \Carbon\Carbon::parse($post->published_at)->format('d M Y') }})</span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const checkboxes = document.querySelectorAll('.news-checkbox');
                            function updateCheckboxes() {
                                const checkedCount = document.querySelectorAll('.news-checkbox:checked').length;
                                checkboxes.forEach(cb => {
                                    if (!cb.checked) {
                                        cb.disabled = checkedCount >= 4;
                                    }
                                });
                            }
                            checkboxes.forEach(cb => {
                                cb.addEventListener('change', updateCheckboxes);
                            });
                            // Initial check on load
                            updateCheckboxes();
                        });
                    </script>

                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingVideo">
                            <button class="accordion-button collapsed fw-bold bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVideo" aria-expanded="false" aria-controls="collapseVideo">
                                <i class="fas fa-video me-2"></i> 5. Bagian Video Bawah
                            </button>
                        </h2>
                        <div id="collapseVideo" class="accordion-collapse collapse" aria-labelledby="headingVideo" data-bs-parent="#homeAccordion">
                            <div class="accordion-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Judul Video <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="content[video_title]" value="{{ $page->content['video_title'] ?? 'SAP Corporate Profile Video' }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Link YouTube (Embed URL) <span class="text-danger">*</span></label>
                            <input type="url" class="form-control" name="content[video_url]" value="{{ $page->content['video_url'] ?? 'https://www.youtube.com/embed/Aj2C4Xp-GMM?autoplay=1' }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Sub-judul Video <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="content[video_subtitle]" rows="2" required>{{ $page->content['video_subtitle'] ?? 'Sharing our passion, realizing your ideas and visions.' }}</textarea>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            @elseif($page->slug == 'about')
                @include('admin.pages._image_upload', ['name' => 'image_1', 'label' => 'Gambar Banner Atas', 'default' => 'about/bca40e3401new.jpg'])
                @include('admin.pages._image_upload', ['name' => 'image_2', 'label' => 'Gambar Konten Samping', 'default' => 'about/248abe37b4banners_whowe.jpg'])
                <div class="mb-3">
                    <label class="form-label fw-bold">Konten Sejarah & Visi Misi <span class="text-danger">*</span></label>
                    <textarea class="form-control summernote-editor" name="content[main_text]" required>{!! $page->content['main_text'] ?? '' !!}</textarea>
                </div>
            @elseif($page->slug == 'about-values')
                @include('admin.pages._image_upload', ['name' => 'image_1', 'label' => 'Gambar Banner Atas', 'default' => 'about/3b5fb3dfb6_OPS6411.jpg'])
                <div class="alert alert-info">Silakan isi nilai-nilai inti (Core Values) perusahaan di bawah ini.</div>
                @foreach(['partnerships', 'excellence', 'growth', 'safety'] as $val)
                    @php $titleKey = 'title_' . $val; @endphp
                    <div class="card mb-3 border">
                        <div class="card-header bg-light fw-bold text-capitalize">Section: {{ ucfirst($val) }}</div>
                        <div class="card-body">
                            <div class="mb-2">
                                <label class="fw-bold">Judul Sub-bagian</label>
                                <input type="text" class="form-control" name="content[{{ $titleKey }}]" value="{{ $page->content[$titleKey] ?? ucfirst($val) }}" required>
                            </div>
                            <div>
                                <label class="fw-bold">Deskripsi</label>
                                <textarea class="form-control" name="content[{{ $val }}]" rows="3" required>{{ $page->content[$val] ?? '' }}</textarea>
                            </div>
                        </div>
                    </div>
                @endforeach
            @elseif($page->slug == 'about-quality')
                @include('admin.pages._image_upload', ['name' => 'image_1', 'label' => 'Gambar Konten 1', 'default' => 'about/b1b1e898fbLayer-43.jpg'])
                @include('admin.pages._image_upload', ['name' => 'image_2', 'label' => 'Gambar Konten 2', 'default' => 'about/ea8e93cbf2Layer-44.jpg'])
                @include('admin.pages._image_upload', ['name' => 'image_3', 'label' => 'Gambar Sertifikasi', 'default' => 'about/f8f77a1e23Layer-42.png'])
                <div class="mb-3">
                    <label class="form-label fw-bold">Teks Quality Statement 1 (Atas) <span class="text-danger">*</span></label>
                    <textarea class="form-control summernote-editor" name="content[quality_1]" required>{!! $page->content['quality_1'] ?? '' !!}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Teks Quality Statement 2 (Tengah) <span class="text-danger">*</span></label>
                    <textarea class="form-control summernote-editor" name="content[quality_2]" required>{!! $page->content['quality_2'] ?? '' !!}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Teks Quality Statement 3 (Bawah) <span class="text-danger">*</span></label>
                    <textarea class="form-control summernote-editor" name="content[quality_3]" required>{!! $page->content['quality_3'] ?? '' !!}</textarea>
                </div>
            @elseif($page->slug == 'about-career')
                @include('admin.pages._image_upload', ['name' => 'image_1', 'label' => 'Gambar Banner Atas', 'default' => 'about/3b5fb3dfb6_OPS6411.jpg'])
                <div class="mb-3">
                    <label class="form-label fw-bold">Teks Informasi Karir <span class="text-danger">*</span></label>
                    <textarea class="form-control summernote-editor" name="content[career_text]" required>{!! $page->content['career_text'] ?? '' !!}</textarea>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Teks Tombol Karir <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="content[career_btn_text]" value="{{ $page->content['career_btn_text'] ?? 'Join Our Team' }}" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label fw-bold">Warna Tombol Karir <span class="text-danger">*</span></label>
                        <input type="color" class="form-control form-control-color w-100" name="content[career_btn_color]" value="{{ $page->content['career_btn_color'] ?? '#0056b3' }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-bold">Link Tombol Karir (URL) <span class="text-danger">*</span></label>
                    <input type="url" class="form-control" name="content[career_link]" value="{{ $page->content['career_link'] ?? '' }}" required>
                </div>
            @else
                <div class="mb-3">
                    <label class="form-label fw-bold">Konten (Teks & Gambar) <span class="text-danger">*</span></label>
                    <textarea class="form-control summernote-editor" name="content[main]" required>{!! $page->content['main'] ?? '' !!}</textarea>
                </div>
            @endif

            @if($page->slug != 'home')
                <div class="card mb-4 border-info">
                    <div class="card-header bg-info text-white fw-bold"><i class="fas fa-video me-2"></i> Bagian Video Bawah (Opsional)</div>
                    <div class="card-body">
                        <div class="alert alert-light border py-2 mb-3" style="font-size: 0.85rem;">Jika dikosongkan, bagian video tidak akan ditampilkan di halaman ini. Cocok untuk halaman About.</div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Judul Video</label>
                                <input type="text" class="form-control" name="content[video_title]" value="{{ $page->content['video_title'] ?? 'SAP Corporate Profile Video' }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-bold">Link YouTube (Embed URL)</label>
                                <input type="url" class="form-control" name="content[video_url]" value="{{ $page->content['video_url'] ?? 'https://www.youtube.com/embed/Aj2C4Xp-GMM' }}">
                            </div>
                        </div>
                        <div class="mb-2">
                            <label class="form-label fw-bold">Sub-judul Video</label>
                            <textarea class="form-control" name="content[video_subtitle]" rows="2">{{ $page->content['video_subtitle'] ?? 'Sharing our passion, realizing your ideas and visions.' }}</textarea>
                        </div>
                    </div>
                </div>
            @endif

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<style>
    /* Fix Summernote fullscreen transparent background and height bug */
    .note-editor.note-frame.fullscreen {
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        width: 100vw !important;
        height: 100vh !important;
        background: #ffffff !important;
        z-index: 9999 !important;
    }
    .note-editor.note-frame.fullscreen .note-editable {
        height: calc(100vh - 45px) !important;
        background: #ffffff !important;
        max-height: none !important;
    }
    
    /* Berikan jarak (margin) default pada gambar di dalam editor */
    .note-editable img {
        margin: 10px;
        max-width: 100%;
        height: auto;
    }
</style>
@endpush

@push('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
<script>
    $(document).ready(function() {
        $('.summernote-editor').summernote({
            placeholder: 'Tulis konten halaman di sini...',
            tabsize: 2,
            height: 400,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    });

    function previewImage(input, previewId) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById(previewId).src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function previewMultipleImages(input, previewContainerId) {
        var container = document.getElementById(previewContainerId);
        container.innerHTML = ''; // Clear previous previews
        
        if (input.files && input.files.length > 0) {
            // Add a small label
            var label = document.createElement('div');
            label.className = 'w-100 mb-1 fw-semibold text-primary';
            label.style.fontSize = '0.85rem';
            label.innerHTML = 'Foto Baru yang Akan Diunggah:';
            container.appendChild(label);

            Array.from(input.files).forEach(function(file) {
                if (!file.type.startsWith('image/')) return;
                
                var reader = new FileReader();
                reader.onload = function(e) {
                    var wrapper = document.createElement('div');
                    wrapper.className = 'border rounded p-1 border-primary';
                    wrapper.style.background = '#e7f1ff';
                    wrapper.style.width = '80px';
                    wrapper.style.height = '80px';
                    
                    var img = document.createElement('img');
                    img.src = e.target.result;
                    img.style.width = '100%';
                    img.style.height = '100%';
                    img.style.objectFit = 'cover';
                    img.style.borderRadius = '3px';
                    
                    wrapper.appendChild(img);
                    container.appendChild(wrapper);
                }
                reader.readAsDataURL(file);
            });
        }
    }

    function previewHeroBg(input) {
        if (input.files && input.files[0]) {
            var file = input.files[0];
            var reader = new FileReader();
            var container = document.getElementById('hero_preview_container');
            
            reader.onload = function(e) {
                if (file.type.startsWith('video/')) {
                    container.innerHTML = '<video autoplay muted loop playsinline style="max-height: 200px; max-width: 100%; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); margin-bottom: 15px;">' +
                                          '<source src="' + e.target.result + '" type="' + file.type + '">' +
                                          '</video>';
                } else if (file.type.startsWith('image/')) {
                    container.innerHTML = '<img src="' + e.target.result + '" style="max-height: 200px; max-width: 100%; object-fit: contain; border-radius: 5px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); margin-bottom: 15px;">';
                }
                
                var textEl = document.getElementById('hero_custom_file_text');
                if (textEl) {
                    textEl.innerHTML = 'File baru siap diunggah: <strong>' + file.name + '</strong>';
                    textEl.className = 'mt-2 text-primary';
                }
            }
            reader.readAsDataURL(file);
        }
    }

    // Auto-expand accordion if a required field inside it is invalid
    document.addEventListener('DOMContentLoaded', function() {
        const formElements = document.querySelectorAll('input[required], textarea[required], select[required]');
        formElements.forEach(function(element) {
            element.addEventListener('invalid', function(e) {
                const accordionCollapse = e.target.closest('.accordion-collapse');
                if (accordionCollapse && !accordionCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(accordionCollapse, {
                        toggle: false
                    });
                    bsCollapse.show();
                    
                    // Add a slight delay to allow the accordion to open before scrolling
                    setTimeout(() => {
                        e.target.scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }, 350);
                }
            });
        });
    });
</script>
@endpush
