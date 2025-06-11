let submit_method;



// form create
const modalProvinsi = () => {
    submit_method = 'create';
    resetForm('#formProvinsi');
    resetValidation();
    $('#formProvinsi').modal('show');
    $('.modal-title').html('<i class="fa fa-plus"></i> Create Provinsi');
    $('.btnSubmit').html('<i class="fa fa-save"></i> Save');
}


// store data
$('#formProvinsi').on('submit', function (e) {
    e.preventDefault();

    startLoading();

    let url = '/backend/provinsi';
    let method = 'POST';

    const inputForm = new FormData(this);

    if (submit_method == 'edit') {
        url = '/backend/provinsi/' + $('#id').val();
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
                    window.location.href = '/backend/provinsi';
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
$('#formUpdateProvinsi').on('submit', function (e) {
    e.preventDefault();

    startLoading();

    const url = '/backend/provinsi/' + $('#uuid').val();
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
                    window.location.href = '/backend/provinsi';
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
                url: "/backend/provinsi/" + id,
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
