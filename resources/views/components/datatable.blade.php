<script src="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
<script src="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
<script src="https://appsrv1-147a1.kxcdn.com/azia-pro/lib/select2/js/select2.min.js"></script>
<script>
    $(function() {
        'use strict'

        $('.datatable').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: "@lang('locale.search')...",
                sSearch: '',
            }
        });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });
    });
</script>