@extends('backend.layout.main') {{-- atau layout yang kamu pakai --}}

@section('title', 'Data User')
 @push('js')
        {{-- DataTables JS CDN --}}
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src={{ asset('assets/backend/js/helper.js') }}></script>
    <script src={{ asset('assets/backend/js/user.js') }}></script>
        @endpush
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div id="main">

    @include('backend.home.section._header')

    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">@yield('title')</h1>
            <p class="my-3">@yield('title') </p>
            <a href="{{ route('backend.user.create') }}"
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
                <table class="table table-striped table-bordered" width="100%" id="table-user">
                    <thead>
                        <tr>
                            <th width="1%">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Password</th>
                            <th width="1%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                            <td>{{ ($users->currentPage() - 1) * $users->perPage() + $loop->iteration }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->role }}</td>
                            <td>
                                <button type="button" class="btn btn-link p-0 text-decoration-none" data-bs-toggle="collapse" data-bs-target="#collapse-password-{{ $item->id }}">
                                    Lihat password
                                </button>
                                <ul class="list-unstyled collapse" id="collapse-password-{{ $item->id }}">
                                    <li>&bull; {{ $item->visible_password }}</li>
                                </ul>
                            </td>
                            <td>
                                <div class="btn-group">
                                    <button onclick="deleteData(this)" data-uuid="{{ $item->id }}"
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
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

