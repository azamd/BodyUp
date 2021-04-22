"use strict";

//table js
$(document).ready(function() {
        $('#table7').DataTable();
         $('#table1').DataTable();
          $('#table2').DataTable();
           $('#table3').DataTable();
            $('#table4').DataTable();
             $('#table5').DataTable();
              $('#table6').DataTable();

//modal
        $(".inline1, .inline2, .inline3, .inline4, .inline5, .inline6, .inline7, .inline8, .inline9, .inline10, .inline11, .inline12, .inline13, .inline14, .inline15, .inline16 ").on('click', function(e) {
            e.preventDefault();
            swal({
                title: "Course Schedule",
                text: "Lorem ipsum dolor Tarun sit amet, consectetur Ravi adipiscing uday elit. Etiam quis",
                allowOutsideClick: false,
                confirmButtonColor: "#fc7070",
                confirmButtonText:"Cancel"

            })
        });

    });