<!-- CORE PLUGINS-->
<script src="{{asset('/admin')}}/assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('/admin')}}/assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
<script src="{{asset('/admin')}}/assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{asset('/admin')}}/assets/vendors/metisMenu/dist/metisMenu.min.js" type="text/javascript"></script>
<script src="{{asset('/admin')}}/assets/vendors/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>

<!-- PAGE LEVEL PLUGINS-->
<script src="{{asset('/admin')}}/assets/vendors/chart.js/dist/Chart.min.js" type="text/javascript"></script>
<script src="{{asset('/admin')}}/assets/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
<script src="{{asset('/admin')}}/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
<script src="{{asset('/admin')}}/assets/vendors/jvectormap/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>

<!-- Data table PLUGINS-->
<script src="{{asset('/admin')}}/assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>

<!-- CKEditor PLUGINS-->
<script src="{{asset('/admin')}}/assets/vendors/summernote/dist/summernote.min.js" type="text/javascript"></script>

<!-- CORE SCRIPTS-->
<script src="{{asset('/admin')}}/assets/js/app.min.js" type="text/javascript"></script>

<!-- PAGE LEVEL SCRIPTS-->
<script src="{{asset('/admin')}}/assets/js/scripts/dashboard_1_demo.js" type="text/javascript"></script>

<script type="text/javascript">
    $(document).on('change', '#categoryId', function () {
        let categoryId = $(this).val();
        $.ajax({
            method: 'GET',
            url: '{{url('/get-sub-category-by-id')}}',
            data: {id: categoryId},
            dataType: 'json',
            success: function(res) {
                let option = '';
                option += '<option value="" disabled selected> -- Select Sub Category Name -- </option>';
                $.each(res, function (key, value) {
                    option += '<option value="'+value.id+'">'+value.name+'</option>';
                });
                $('#subCategoryId').empty().append(option);
            },
            error: function (e) {
                console.log(e);
            }
        });
    });
    $(function() {
        $('#example-table').DataTable({
            pageLength: 10
        });
    });
    $(function() {
        $('#summernote').summernote();
        $('#summernote_air').summernote({
            airMode: true
        });
    });
</script>
