 $(document).ready(function() {
        //table tools example
        var table = $('#table1').DataTable();
        var tt = new $.fn.dataTable.TableTools(table,{"sSwfPath": "vendors/datatables/extensions/TableTools/swf/copy_csv_xls.swf"});
        
        $('div.tools').append(tt.fnContainer());

        //total number of existing rows
        var counter = 18;

        $('#addButton').on('click', function() {
            table3.row.add([
                counter,
                counter + ' new',
                counter + ' user',
                counter + '_unique_user',
                counter + '_unique_user@domain.com'
            ]).draw();

            counter++;
        });
        
               
    });
