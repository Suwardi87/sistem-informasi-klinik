let submit_method;

$(document).ready(function () {
    PegawaiDataTable();
});

// form create
const modalPegawai = () => {
    submit_method = 'create';
    resetForm('#formPegawai');
    resetValidation();
    $('#formPegawai').modal('show');
    $('.modal-title').html('<i class="fa fa-plus"></i> Create Pegawai');
    $('.btnSubmit').html('<i class="fa fa-save"></i> Save');
}


// store data
$('#formPegawai').on('submit', function (e) {
    e.preventDefault();

    startLoading();

    let url = '/backend/pegawai';
    let method = 'POST';

    const inputForm = new FormData(this);

    if (submit_method == 'edit') {
        url = '/backend/pegawai/' + $('#id').val();
        inputForm.append('_method', 'PUT');
    }

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: method,
        url: url,
        data: inputForm,
        contentType: false,
        processData: false,
        success: function (response) {
            resetValidation();
            stopLoading();

            Swal.fire({
                icon: 'success',
                title: "Success!",
                text: response.message,
            }).then(result => {
                if (result.isConfirmed) {
                    window.location.href = '/backend/pegawai';
                }
            });
        },
        error: function (jqXHR, response) {
            console.log(response.message);
            toastError(jqXHR.responseText);
        }
    });
});


// update data
$('#formUpdatePegawai').on('submit', function (e) {
    e.preventDefault();

    startLoading();

    const url = '/backend/pegawai/' + $('#uuid').val();
    const method = 'PUT';

    const inputForm = new FormData(this);
    inputForm.append('_method', method);

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        url: url,
        data: inputForm,
        contentType: false,
        processData: false,
        success: function (response) {
            resetValidation();
            stopLoading();

            Swal.fire({
                icon: 'success',
                title: "Success!",
                text: response.message,
            }).then(result => {
                if (result.isConfirmed) {
                    window.location.href = '/backend/pegawai';
                }
            })
        },
        error: function (jqXHR, response) {
            console.log(response.message);
            toastError(jqXHR.responseText);
        }
    });
});


// delete data
const deleteData = (e) => {
    let id = e.getAttribute('data-uuid');

    Swal.fire({
        title: "Are you sure?",
        text: "Do you want to delete this Provinsi?",
        icon: "question",
        confirmButtonColor: "#d33",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Delete",
        cancelButtonText: "Cancel",
        allowOutsideClick: false,
        showCancelButton: true,
        showCloseButton: true
    }).then((result) => {
        if (result.value) {
            startLoading();

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "DELETE",
                url: "/backend/pegawai/" + id,
                dataType: "json",
                success: function (response) {
                    stopLoading();
                    toastSuccess(response.message);
                    setTimeout(() => {
                        window.location.reload();
                    }, 1000);
                },
                error: function (response) {
                    console.log(response);
                }
            });
        }
    })
}
