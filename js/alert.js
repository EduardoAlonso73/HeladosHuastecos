function alertDelete(){
    swal({
            title: "Proceso en contrición?",
            text: "Lorem ipsum, dolor sit amet consectetur adipisicing elit!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi quic", {
                    icon: "success",
                });
            } else {
                swal("Your imaginary file is safe!");
            }
        });
   }