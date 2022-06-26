
<?php 
    // For jQuery datatables initialistion with downloadable reports 
    // e.g. PDF, Print, CSV
    // Some of these could take time to load due to their size and availability
    ?>
    

  <script type="text/javascript"
    language="javascript"
    src="incl/js/datatables.buttons.min.js"></script>

  <script type="text/javascript"
    language="javascript"
    src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js">
  </script>
      

  <script type="text/javascript"
    language="javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

  <script type="text/javascript"
    language="javascript"
    src="incl/js/pdfmake.min.js"></script>

  <script type="text/javascript"
    language="javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    

  <script type="text/javascript" language="javascript"
    src="incl/js/datatables.buttons.html5.min.js"></script>

  <script type="text/javascript"
    language="javascript"
    src="incl/js/datatables.buttons.print.min.js"></script>


  <script>
    $(document).ready(function () {

      $('table.display').DataTable({
        // "scrollX": true,
        pageLength: 20,
        dom: 'frtipB',
        buttons: [{
            extend: 'pdf',
            text: 'PDF Report'
          },
          {
            extend: 'excel',
            text: 'Excel Report'
          },
          {
            extend: 'csv',
            text: 'CSV Report'
          },
          {
            extend: 'print',
            text: 'Print'
          }
        ],
        "order": [
          [0, "desc"]
        ],
        responsive: {
          details: false
        }
      });

      
      setTimeout(function(){
      $('.dataTables_paginate a.current').addClass('paginate_button_style');
        }, 2000);

    });    

  </script>
