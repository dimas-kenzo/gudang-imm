<!-- Datatables -->
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            dom: 'Bfrtip',
            lengthMenu: [
                [10, 25, 50, -1],
                ['10 rows', '25 rows', '50 rows', 'Show all']
            ],
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print', 'pageLength'
            ]
        });
    });
</script>
<!-- / Datatables -->
