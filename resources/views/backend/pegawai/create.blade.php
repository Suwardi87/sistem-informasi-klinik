@extends('backend.layout.main')

@section('title', 'Create Pegawai')

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
                        href="{{ route('backend.pegawai.index') }}">Pegawai</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a
                        href="{{ route('backend.pegawai.create') }}">@yield('title')</a></li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">@yield('title')</h1>
                <p class="mb-0">Create Pegawai  </p>
            </div>
            <div>
                <a href="{{ route('backend.pegawai.index') }}" class="btn btn-outline-primary"><i
                        class="fas fa-arrow-left me-1"></i> Back</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h4 class="card-title">@yield('title')</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('backend.pegawai.store') }}" method="POST" id="formPegawai"
                class="needs-validation">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="user_id" class="form-label">User</label>
                            <select name="user_id" id="user_id"
                                class="form-select select-single @error('user_id') is-invalid @enderror" required>
                                <option value="" hidden>-- choose --</option>
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ old('user_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama"
                                name="nama" value="{{ old('nama') }}" required>
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="nip" class="form-label">NIP</label>
                            <input type="text" class="form-control @error('nip') is-invalid @enderror" id="nip"
                                name="nip" value="{{ old('nip') }}" required>
                            @error('nip')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="jabatan" class="form-label">Jabatan</label>
                            <input type="text"
                                class="form-control @error('jabatan') is-invalid @enderror" id="jabatan"
                                name="jabatan" value="{{ old('jabatan') }}" required>
                            @error('jabatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="telepon" class="form-label">Telepon</label>
                            <input type="text"
                                class="form-control @error('telepon') is-invalid @enderror" id="telepon"
                                name="telepon" value="{{ old('telepon') }}" required>
                            @error('telepon')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea name="alamat" id="alamat"
                                class="form-control @error('alamat') is-invalid @enderror" rows="3"
                                required>{{ old('alamat') }}</textarea>
                            @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="float-end">
                    <a href="{{ route('backend.pegawai.index') }}" class="btn btn-secondary">Back</a>
                    <button type="submit" class="btn btn-primary btnSubmit">Submit</button>
                </div>
            </form>
        </div>
    </div>

    @include('backend.home.section._footer')
</div>
@endsection

@push('js')
<script src="{{ asset('assets/backend') }}/vendors/apexcharts/apexcharts.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/pages/dashboard.js"></script>
<script src="{{ asset('assets/backend/library/jquery/jquery-3.7.1.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/backend/js/helper.js') }}"></script>
<script src="{{ asset('assets/backend/js/pegawai.js') }}"></script>
@endpush