function closeModal(modal){
    Swal.fire({
        text: "Are you sure you would like to close?",
        icon: "warning",
        showCancelButton: !0,
        buttonsStyling: !1,
        confirmButtonText: "Yes, close it!",
        cancelButtonText: "No, return",
        customClass: { confirmButton: "btn btn-primary", cancelButton: "btn btn-active-light" },
        }).then(function(result) {
            if (result.value) {
                $(modal).modal('hide');
            }
    });
}