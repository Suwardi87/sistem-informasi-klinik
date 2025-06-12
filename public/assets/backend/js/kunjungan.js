let submit_method;

// form create
const modalKunjungan = () => {
    submit_method = 'create';
    resetForm('#formKunjungan');
    resetValidation();
    $('#formKunjungan').modal('show');
    $('.modal-title').html('<i class="fa fa-plus"></i> Create Kunjungan');
    $('.btnSubmit').html('<i class="fa fa-save"></i> Save');
}


// store data
$('#formKunjungan').on('submit', function (e) {
    e.preventDefault();

    startLoading();

    let url = '/backend/kunjungan';
    let method = 'POST';

    const inputForm = new FormData(this);

    if (submit_method == 'edit') {
        url = '/backend/kunjungan/' + $('#id').val();
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
                    window.location.href = '/backend/kunjungan';
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
$('#formUpdateKunjungan').on('submit', function (e) {
    e.preventDefault();

    startLoading();

    const url = '/backend/kunjungan/' + $('#uuid').val();
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
                    window.location.href = '/backend/kunjungan';
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
        text: "Do you want to delete this Kunjungan?",
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
                url: "/backend/kunjungan/" + id,
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

