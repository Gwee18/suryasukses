@extends('admin.layout')

@section('title', 'Edit Halaman Contact Us')
@section('header', 'Edit Konten Halaman')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white py-3">
        <h5 class="m-0 font-weight-bold">Edit Halaman: Contact Us</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.contact.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="alert alert-info py-2" style="font-size: 0.85rem;">
                Atur teks bagian atas, daftar kantor (bisa tambah/hapus), dan info dukungan pelanggan.
            </div>

            <div class="card mb-3 border bg-light">
                <div class="card-body">
                    <h6 class="fw-bold">Teks Hero & Pengantar</h6>
                    <div class="mb-2">
                        <label class="fw-bold">Teks Kecil di Atas Judul Hero <span class="text-muted fw-normal">(opsional)</span></label>
                        <input type="text" class="form-control" name="hero_eyebrow" value="{{ old('hero_eyebrow', $contactPage->hero_eyebrow ?? 'Contact Us') }}" placeholder="Contoh: Contact Us">
                    </div>
                    <div class="mb-2">
                        <label class="fw-bold">Judul Hero <span class="text-muted fw-normal">(opsional)</span></label>
                        <input type="text" class="form-control" name="hero_title" value="{{ old('hero_title', $contactPage->hero_title ?? "We're at your service") }}">
                    </div>
                    <div class="mb-2">
                        <label class="fw-bold">Judul Bagian Bantuan <span class="text-muted fw-normal">(opsional)</span></label>
                        <input type="text" class="form-control" name="intro_title" value="{{ old('intro_title', $contactPage->intro_title ?? "We're here to help you") }}">
                    </div>
                    <div class="mb-2">
                        <label class="fw-bold">Deskripsi Bantuan <span class="text-muted fw-normal">(opsional)</span></label>
                        <textarea class="form-control" name="intro_text" rows="3">{{ old('intro_text', $contactPage->intro_text ?? '') }}</textarea>
                    </div>
                    <div class="mb-0">
                        <label class="fw-bold">Catatan Sebelum Daftar Kantor <span class="text-muted fw-normal">(opsional)</span></label>
                        <input type="text" class="form-control" name="intro_note" value="{{ old('intro_note', $contactPage->intro_note ?? 'Please contact our help-line at these numbers') }}">
                    </div>
                </div>
            </div>

            <h6 class="fw-bold mt-4">Daftar Kantor</h6>
            <div id="offices-wrapper">
                @foreach($offices as $i => $office)
                    <div class="card mb-3 border office-block" data-office-index="{{ $i }}">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start">
                                <h6 class="fw-bold text-primary">Kantor {{ $i + 1 }}</h6>
                                <button type="button" class="btn btn-outline-danger btn-sm" onclick="this.closest('.office-block').remove()">
                                    Hapus Kantor
                                </button>
                            </div>

                            <div class="mb-2">
                                <label class="fw-bold">Nama Kantor <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="offices[{{ $i }}][name]" value="{{ $office->name }}" required>
                            </div>

                            <div class="mb-2">
                                <label class="fw-bold d-block">Nomor Telepon <span class="text-muted fw-normal">(opsional, bisa lebih dari satu)</span></label>
                                <div class="phone-list">
                                    @forelse($office->phones as $phone)
                                        <div class="input-group mb-2 phone-row">
                                            <input type="text" class="form-control" name="offices[{{ $i }}][phones][]" value="{{ $phone->phone }}" placeholder="Contoh: 031 5030450">
                                            <button type="button" class="btn btn-outline-danger" onclick="this.closest('.phone-row').remove()">&times;</button>
                                        </div>
                                    @empty
                                        <div class="input-group mb-2 phone-row">
                                            <input type="text" class="form-control" name="offices[{{ $i }}][phones][]" value="" placeholder="Contoh: 031 5030450">
                                            <button type="button" class="btn btn-outline-danger" onclick="this.closest('.phone-row').remove()">&times;</button>
                                        </div>
                                    @endforelse
                                </div>
                                <button type="button" class="btn btn-outline-primary btn-sm px-3" onclick="addPhoneRow(this)">&#43; Tambah Nomor</button>
                            </div>

                            <div class="mb-2">
                                <label class="fw-bold d-block">Alamat <span class="text-muted fw-normal">(opsional, bisa lebih dari satu baris)</span></label>
                                <div class="address-list">
                                    @forelse($office->addressLines as $line)
                                        <div class="input-group mb-2 address-row">
                                            <input type="text" class="form-control" name="offices[{{ $i }}][address_lines][]" value="{{ $line->line }}" placeholder="Contoh: Jl. Kertajaya 109 Surabaya">
                                            <button type="button" class="btn btn-outline-danger" onclick="this.closest('.address-row').remove()">&times;</button>
                                        </div>
                                    @empty
                                        <div class="input-group mb-2 address-row">
                                            <input type="text" class="form-control" name="offices[{{ $i }}][address_lines][]" value="" placeholder="Contoh: Jl. Kertajaya 109 Surabaya">
                                            <button type="button" class="btn btn-outline-danger" onclick="this.closest('.address-row').remove()">&times;</button>
                                        </div>
                                    @endforelse
                                </div>
                                <button type="button" class="btn btn-outline-primary btn-sm px-3" onclick="addAddressRow(this)">&#43; Tambah Baris Alamat</button>
                            </div>

                            <div class="mb-0">
                                <label class="fw-bold">Link Google Maps <span class="text-muted fw-normal">(opsional)</span></label>
                                <input type="url" class="form-control" name="offices[{{ $i }}][map_url]" value="{{ $office->map_url }}" placeholder="https://goo.gl/maps/...">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button type="button" class="btn btn-primary btn-sm px-3 mb-4" id="add-office-btn">&#43; Tambah Kantor</button>

            <h6 class="fw-bold mt-4">Info Dukungan Pelanggan</h6>
            <div class="card mb-3 border bg-light">
                <div class="card-body">
                    <div class="mb-2">
                        <label class="fw-bold">Judul Bagian PIC <span class="text-muted fw-normal">(opsional)</span></label>
                        <input type="text" class="form-control" name="support_title" value="{{ old('support_title', $contactPage->support_title ?? 'PIC Kantor Surabaya') }}">
                    </div>

                    <div class="mb-2">
                        <label class="fw-bold d-block">Daftar PIC <span class="text-muted fw-normal">(opsional, bisa lebih dari satu)</span></label>
                        <div id="pics-wrapper">
                            @forelse($pics as $pic)
                                <div class="input-group mb-2 pic-row">
                                    <input type="text" class="form-control" name="pics[]" value="{{ $pic->name_phone }}" placeholder="Contoh: Phyllia (081 651 1229)">
                                    <button type="button" class="btn btn-outline-danger" onclick="this.closest('.pic-row').remove()">&times;</button>
                                </div>
                            @empty
                                <div class="input-group mb-2 pic-row">
                                    <input type="text" class="form-control" name="pics[]" value="" placeholder="Contoh: Phyllia (081 651 1229)">
                                    <button type="button" class="btn btn-outline-danger" onclick="this.closest('.pic-row').remove()">&times;</button>
                                </div>
                            @endforelse
                        </div>
                        <button type="button" class="btn btn-outline-primary btn-sm px-3" id="add-pic-btn">&#43; Tambah PIC</button>
                    </div>

                    <div class="mb-2">
                        <label class="fw-bold">Email Dukungan <span class="text-muted fw-normal">(opsional)</span></label>
                        <input type="email" class="form-control" name="support_email" value="{{ old('support_email', $contactPage->support_email ?? 'cs@suryasukses.com') }}">
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-2">
                            <label class="fw-bold">Label WhatsApp</label>
                            <input type="text" class="form-control" name="whatsapp_label" value="{{ old('whatsapp_label', $contactPage->whatsapp_label ?? 'Whatsapp') }}">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="fw-bold">Nomor WhatsApp (teks tampil)</label>
                            <input type="text" class="form-control" name="whatsapp_display" value="{{ old('whatsapp_display', $contactPage->whatsapp_display ?? '+62 81 651 1229') }}">
                        </div>
                        <div class="col-md-4 mb-2">
                            <label class="fw-bold">Link wa.me</label>
                            <input type="url" class="form-control" name="whatsapp_link" value="{{ old('whatsapp_link', $contactPage->whatsapp_link ?? 'https://wa.me/62816511229') }}">
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // ==== Contact Us: repeater kantor, telepon, alamat, PIC ====
    (function() {
        const officesWrapper = document.getElementById('offices-wrapper');
        const addOfficeBtn = document.getElementById('add-office-btn');
        if (officesWrapper && addOfficeBtn) {
            let officeCounter = officesWrapper.querySelectorAll('.office-block').length;

            addOfficeBtn.addEventListener('click', function() {
                const index = officeCounter++;
                const wrapper = document.createElement('div');
                wrapper.innerHTML = `
                <div class="card mb-3 border office-block" data-office-index="${index}">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                            <h6 class="fw-bold text-primary">Kantor Baru</h6>
                            <button type="button" class="btn btn-outline-danger btn-sm" onclick="this.closest('.office-block').remove()">Hapus Kantor</button>
                        </div>
                        <div class="mb-2">
                            <label class="fw-bold">Nama Kantor <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="offices[${index}][name]" required>
                        </div>
                        <div class="mb-2">
                            <label class="fw-bold d-block">Nomor Telepon <span class="text-muted fw-normal">(opsional, bisa lebih dari satu)</span></label>
                            <div class="phone-list">
                                <div class="input-group mb-2 phone-row">
                                    <input type="text" class="form-control" name="offices[${index}][phones][]" placeholder="Contoh: 031 5030450">
                                    <button type="button" class="btn btn-outline-danger" onclick="this.closest('.phone-row').remove()">&times;</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-primary btn-sm px-3" onclick="addPhoneRow(this)">&#43; Tambah Nomor</button>
                        </div>
                        <div class="mb-2">
                            <label class="fw-bold d-block">Alamat <span class="text-muted fw-normal">(opsional, bisa lebih dari satu baris)</span></label>
                            <div class="address-list">
                                <div class="input-group mb-2 address-row">
                                    <input type="text" class="form-control" name="offices[${index}][address_lines][]" placeholder="Contoh: Jl. Kertajaya 109 Surabaya">
                                    <button type="button" class="btn btn-outline-danger" onclick="this.closest('.address-row').remove()">&times;</button>
                                </div>
                            </div>
                            <button type="button" class="btn btn-outline-primary btn-sm px-3" onclick="addAddressRow(this)">&#43; Tambah Baris Alamat</button>
                        </div>
                        <div class="mb-0">
                            <label class="fw-bold">Link Google Maps <span class="text-muted fw-normal">(opsional)</span></label>
                            <input type="url" class="form-control" name="offices[${index}][map_url]" placeholder="https://goo.gl/maps/...">
                        </div>
                    </div>
                </div>`;
                officesWrapper.appendChild(wrapper.firstElementChild);
            });
        }

        const picsWrapper = document.getElementById('pics-wrapper');
        const addPicBtn = document.getElementById('add-pic-btn');
        if (picsWrapper && addPicBtn) {
            addPicBtn.addEventListener('click', function() {
                const row = document.createElement('div');
                row.className = 'input-group mb-2 pic-row';
                row.innerHTML = `
                    <input type="text" class="form-control" name="pics[]" placeholder="Contoh: Nama (0812xxxxxxx)">
                    <button type="button" class="btn btn-outline-danger" onclick="this.closest('.pic-row').remove()">&times;</button>
                `;
                picsWrapper.appendChild(row);
            });
        }
    })();

    function addPhoneRow(btn) {
        const officeBlock = btn.closest('.office-block');
        const index = officeBlock.getAttribute('data-office-index');
        const container = btn.closest('.mb-2').querySelector('.phone-list');
        const row = document.createElement('div');
        row.className = 'input-group mb-2 phone-row';
        row.innerHTML = `
            <input type="text" class="form-control" name="offices[${index}][phones][]" placeholder="Contoh: 031 5030450">
            <button type="button" class="btn btn-outline-danger" onclick="this.closest('.phone-row').remove()">&times;</button>
        `;
        container.appendChild(row);
    }

    function addAddressRow(btn) {
        const officeBlock = btn.closest('.office-block');
        const index = officeBlock.getAttribute('data-office-index');
        const container = btn.closest('.mb-2').querySelector('.address-list');
        const row = document.createElement('div');
        row.className = 'input-group mb-2 address-row';
        row.innerHTML = `
            <input type="text" class="form-control" name="offices[${index}][address_lines][]" placeholder="Contoh: Jl. Kertajaya 109 Surabaya">
            <button type="button" class="btn btn-outline-danger" onclick="this.closest('.address-row').remove()">&times;</button>
        `;
        container.appendChild(row);
    }
</script>
@endpush