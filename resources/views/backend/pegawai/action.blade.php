                <a href="{{ route('backend.pegawai.edit', $pegawai->uuid) }}" class="btn btn-sm btn-primary">
                    <i class="fas fa-edit"></i>
                </a>
                <a href="{{ route('backend.pegawai.show', $pegawai->uuid) }}" class="btn btn-sm btn-info">
                    <i class="fas fa-eye"></i>
                </a>
                <button type="button" class="btn btn-sm btn-danger" onclick="deleteData(this)" data-id="{{ $pegawai->uuid }}">
                    <i class="fas fa-trash-alt"></i>
                </button>

@push('js')
<script src="{{ asset('assets/backend') }}/vendors/apexcharts/apexcharts.min.js"></script>
<script src="{{ asset('assets/backend') }}/js/pages/dashboard.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/backend/js/helper.js') }}"></script>
{{-- <script src="{{ asset('assets/backend/js/pegawai.js') }}"></script> --}}
<script>
    
</script>
@endpush
