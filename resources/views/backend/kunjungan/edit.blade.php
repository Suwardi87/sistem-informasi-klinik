@extends('backend.layout.main')

@section('title', 'Edit Kunjungan')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/backend') }}/vendors/apexcharts/apexcharts.css">
@endpush

@section('content')
<div id="main">

    @include('backend.home.section._header')

    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a href="{{ route('backend.main') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a
                        href="{{ route('backend.kunjungan.index') }}">Kunjungan</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a
                        href="{{ route('backend.kunjungan.edit', $kunjungan->uuid) }}">@yield('title')</a></li>
                </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">@yield('title')</h1>
                <p class="mb-0">Edit Kunjungan  </p>
            </div>
            <div>
                <a href="{{ route('backend.kunjungan.index') }}" class="btn btn-outline-primary"><i
                        class="fas fa-arrow-left me-1"></i> Back</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">@yield('title')</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('backend.kunjungan.update', $kunjungan->uuid) }}" method="POST" id="formUpdateKunjungan">
                @csrf
                @method('PUT')
                <input type="hidden" id="uuid" value="{{ $kunjungan->uuid }}">

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="pasien_id" class="form-label">Pasien</label>
                            <select name="pasien_id" id="pasien_id" class="form-select @error('pasien_id') is-invalid @enderror" required>
                                <option value="">Pilih Pasien</option>
                                @foreach ($pasiens as $pasien)
                                    <option value="{{ $pasien->id }}" {{ old('pasien_id', $kunjungan->pasien_id) == $pasien->id ? 'selected' : '' }}>{{ $pasien->nama }}</option>
                                @endforeach
                            </select>
                            @error('pasien_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tanggal_kunjungan" class="form-label">Tanggal Kunjungan</label>
                            <input type="datetime-local" class="form-control @error('tanggal_kunjungan') is-invalid @enderror" id="tanggal_kunjungan"
                                name="tanggal_kunjungan" value="{{ old('tanggal_kunjungan', $kunjungan->tanggal_kunjungan) }}" required>
                            @error('tanggal_kunjungan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="jenis_kunjungan" class="form-label">Jenis Kunjungan</label>
                            <select name="jenis_kunjungan" id="jenis_kunjungan" class="form-select @error('jenis_kunjungan') is-invalid @enderror" required>
                                <option value="">Pilih Jenis Kunjungan</option>
                                <option value="baru" {{ old('jenis_kunjungan', $kunjungan->jenis_kunjungan) == 'baru' ? 'selected' : '' }}>Baru</option>
                                <option value="lama" {{ old('jenis_kunjungan', $kunjungan->jenis_kunjungan) == 'lama' ? 'selected' : '' }}>Lama</option>
                            </select>
                            @error('jenis_kunjungan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select @error('status') is-invalid @enderror" required>
                                <option value="">Pilih Status</option>
                                <option value="menunggu" {{ old('status', $kunjungan->status) == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
                                <option value="periksa" {{ old('status', $kunjungan->status) == 'periksa' ? 'selected' : '' }}>Periksa</option>
                                <option value="selesai" {{ old('status', $kunjungan->status) == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                <option value="dibatalkan" {{ old('status', $kunjungan->status) == 'dibatalkan' ? 'selected' : '' }}>Dibatalkan</option>
                            </select>
                            @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="float-end">
                    <a href="{{ route('backend.kunjungan.index') }}" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-primary btnSubmit">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection

@push('js')
<script src="{{ asset('assets/backend') }}/vendors/apexcharts/apexcharts.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/pages/dashboard.js"></script>
<script src="{{ asset('assets/backend/library/jquery/jquery-3.7.1.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/backend/js/helper.js') }}"></script>
<script src="{{ asset('assets/backend/js/kunjungan.js') }}"></script>
@endpush

