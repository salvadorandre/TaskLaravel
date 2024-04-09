<script>
    document.addEventListener('save-task', function() {

        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Your work has been saved",
            showConfirmButton: false,
            timer: 1500
        });
    });

    document.addEventListener('update-task', function() { 
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Your work has been update",
            showConfirmButton: false,
            timer: 1500
        });
    });

    document.addEventListener('destroy-task', function() { 
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "Your work has been delete",
            showConfirmButton: false,
            timer: 1500
        });
    });


    document.addEventListener('open-modal-delete', function() { 
        $('#exampleModalDelete').modal('show'); 
    });
    
    document.addEventListener('open-modal-edit', function() { 
        $('#exampleModalEdit').modal('show'); 
    });

    document.addEventListener('close-modal', function() {
        $('#exampleModal').modal('hide');
        $('#exampleModalEdit').modal('hide'); 
        $('#exampleModalDelete').modal('hide'); 
    });
</script>
