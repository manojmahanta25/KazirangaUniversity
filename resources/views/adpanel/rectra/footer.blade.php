@if(isset($page) && $page!= 'login')
<footer class="footer">© 2016 KU Admin- All Rights Reserved.</footer>  </div>
@endif
</div>
<script src="{{ URL::asset('adpanel/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('adpanel/js/popper.min.js') }}"></script>
<script src="{{ URL::asset('adpanel/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('adpanel/js/modernizr.min.js') }}"></script>
<script src="{{ URL::asset('adpanel/js/detect.js') }}"></script>
<script src="{{ URL::asset('adpanel/js/fastclick.js') }}"></script>
<script src="{{ URL::asset('adpanel/js/jquery.slimscroll.js') }}"></script>
<script src="{{ URL::asset('adpanel/js/jquery.blockUI.js') }}"></script>
<script src="{{ URL::asset('adpanel/js/waves.js') }}"></script>
<script src="{{ URL::asset('adpanel/js/wow.min.js') }}"></script>
<script src="{{ URL::asset('adpanel/js/jquery.nicescroll.js') }}"></script>
<script src="{{ URL::asset('adpanel/js/jquery.scrollTo.min.js') }}"></script>
<script src="{{ URL::asset('adpanel/plugins/raphael/raphael-min.js') }}"></script>
<script src="{{ URL::asset('adpanel/js/select2.min.js') }}"></script>


@if(isset($dropzone))
    <script src="{{ URL::asset('adpanel/plugins/dropzone/dist/dropzone.js') }}"></script>
    @endif
<!-- Bootstrap File Style -->
<script src="{{ URL::asset('adpanel/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}" type="text/javascript"></script>
@if(isset($editor))

    <script src="{{ URL::asset('adpanel/plugins/summernote/summernote-developer.js') }}"></script>

@endif
@if(isset($validation))
    <script type="text/javascript" src="{{ URL::asset('adpanel/plugins/parsleyjs/parsley.min.js') }}"></script>
    <script type="text/javascript">$(document).ready(function() {
            $('form').parsley();
        });</script>
@endif
@if(isset($datare))
    <script src="{{ URL::asset('adpanel/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('adpanel/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <!-- Buttons examples -->
    <script src="{{ URL::asset('adpanel/plugins/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::asset('adpanel/plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::asset('adpanel/plugins/datatables/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('adpanel/plugins/datatables/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('adpanel/plugins/datatables/vfs_fonts.js') }}"></script>
    <script src="{{ URL::asset('adpanel/plugins/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::asset('adpanel/plugins/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ URL::asset('adpanel/plugins/datatables/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ URL::asset('adpanel/plugins/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ URL::asset('adpanel/plugins/datatables/dataTables.scroller.min.js') }}"></script>
    <!-- Responsive examples -->
    <script src="{{ URL::asset('adpanel/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::asset('adpanel/plugins/datatables/responsive.bootstrap4.min.js') }}"></script>
    <!-- Datatable init js -->
    <script src="{{ URL::asset('adpanel/pages/datatables.init.js') }}"></script>

@endif
<script src="{{ URL::asset('adpanel/js/app.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.tag_selector').select2();
        @if(isset($editor))
        $('.summernote').summernote({
            height: 300, // set editor height

            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor

//        airMode: true
        });
        @endif
    });
</script>
