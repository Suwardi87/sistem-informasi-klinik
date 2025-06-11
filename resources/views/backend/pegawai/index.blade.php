@extends('backend.layout.main') {{-- atau layout yang kamu pakai --}}

@section('title', 'Data Pegawai')

@push('css')
{{-- DataTables CSS CDN --}}
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css">

@endpush

@section('content')
<div id="main">

    @include('backend.home.section._header')

    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">@yield('title')</h1>
            <p class="my-3">@yield('title') </p>
            <a href="{{ route('backend.pegawai.create') }}"
                class="btn btn-outline-primary d-inline-flex my-2 align-items-center">
                <i class="fas fa-plus me-2"></i>
                Create @yield('title')
            </a>
        </div>
    </div>

    {{-- table --}}
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive-sm">
                <table class="table table-striped table-bordered table-striped" width="100%">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>User</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Telepon</th>
                            <th>Alamat</th>

                            <th width="1%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pegawais as $item)
                        <tr>
                            <td>{{ ($pegawais->currentPage() - 1) * $pegawais->perPage() + $loop->iteration }}</td>
                            {{-- <td>{{ $item->komoditas->nama }}</td> --}}
                            {{-- <td>{{ $item->musimTanam->nama }}</td> --}}
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nip }}</td>
                            <td>{{ $item->jabatan }}</td>
                            <td>{{ $item->telepon }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('backend.pegawai.show', $item->uuid) }}"
                                        class="btn btn-sm btn-info">
                                        <i class="fas fa-eye"></i>
                                    </a>


                                    <a href="{{ route('backend.pegawai.edit', $item->uuid) }}"
                                        class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button onclick="deleteData(this)" data-uuid="{{ $item->uuid }}"
                                        class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
                <div class="d-flex justify-content-end mt-3">
                    {{ $pegawais->links() }}
                </div>
            </div>

            {{-- @include('backend.order._modal-download') --}}
            @include('backend.home.section._footer')

        </div>

        @endsection

       @push('js')
        {{-- DataTables JS CDN --}}
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src={{ asset('assets/backend/js/helper.js') }}></script>
    <script src={{ asset('assets/backend/js/pegawai.js') }}></script>
        @endpush
