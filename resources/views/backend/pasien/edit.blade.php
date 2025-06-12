@extends('backend.layout.main')

@section('title', 'Edit Pasien')

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
                        href="{{ route('backend.pasien.index') }}">Pasien</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a
                        href="{{ route('backend.pasien.edit', $pasien->uuid) }}">@yield('title')</a></li>
                </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">@yield('title')</h1>
                <p class="mb-0">Edit Pasien  </p>
            </div>
            <div>
                <a href="{{ route('backend.pasien.index') }}" class="btn btn-outline-primary"><i
                        class="fas fa-arrow-left me-1"></i> Back</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">@yield('title')</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('backend.pasien.update', $pasien->uuid) }}" method="POST" id="formUpdatePasien">
                @csrf
                @method('PUT')
                <input type="hidden" id="uuid" value="{{ $pasien->uuid }}">

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                name="nama" value="{{ old('nama', $pasien->nama) }}" required>
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nik" class="form-label">NIK</label>
                            <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik"
                                name="nik" value="{{ old('nik', $pasien->nik) }}" required>
                            @error('nik')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select name="jenis_kelamin" id="jenis_kelamin"
                                class="form-select @error('jenis_kelamin') is-invalid @enderror" required>
                                <option value="L" {{ old('jenis_kelamin', $pasien->jenis_kelamin) == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ old('jenis_kelamin', $pasien->jenis_kelamin) == 'P' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            @error('jenis_kelamin')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                id="tanggal_lahir" name="tanggal_lahir"
                                value="{{ old('tanggal_lahir', $pasien->tanggal_lahir) }}" required>
                            @error('tanggal_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat"
                                class="form-control @error('alamat') is-invalid @enderror" rows="3"
                                required>{{ old('alamat', $pasien->alamat) }}</textarea>
                            @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="provinsi_id" class="form-label">Provinsi</label>
                            <select name="provinsi_id" id="provinsi_id"
                                class="form-select @error('provinsi_id') is-invalid @enderror" required>
                                <option value="">Pilih Provinsi</option>
                                @foreach ($provinsis as $provinsi)
                                <option value="{{ $provinsi->id }}" {{ old('provinsi_id', $pasien->provinsi_id) == $provinsi->id ? 'selected' : '' }}>{{ $provinsi->nama }}</option>
                                @endforeach
                            </select>
                            @error('provinsi_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="kabupaten_id" class="form-label">Kabupaten</label>
                            <select name="kabupaten_id" id="kabupaten_id"
                                class="form-select @error('kabupaten_id') is-invalid @enderror" required>
                                <option value="">Pilih Kabupaten</option>
                                @foreach ($kabupatens as $kabupaten)
                                <option value="{{ $kabupaten->id }}" {{ old('kabupaten_id', $pasien->kabupaten_id) == $kabupaten->id ? 'selected' : '' }}>{{ $kabupaten->nama }}</option>
                                @endforeach
                            </select>
                            @error('kabupaten_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon"
                                name="telepon" value="{{ old('telepon', $pasien->telepon) }}" required>
                            @error('telepon')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="float-end">
                    <a href="{{ route('backend.pasien.index') }}" class="btn btn-secondary">Back</a>
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
<script src="{{ asset('assets/backend/js/pasien.js') }}"></script>
@endpush

