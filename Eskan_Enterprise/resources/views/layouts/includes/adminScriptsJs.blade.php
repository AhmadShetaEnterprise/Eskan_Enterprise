        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('frontendd/js/bootstrap.bundle.min.js') }}" defer></script>
        <script src="{{ asset('frontendd/js/jquery-3.5.1.slim.min.js') }}" defer></script>
        <script src="{{ asset('frontendd/js/jquery-3.6.0.min.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <script>
            $(document).ready(function () {
                alert('hi');
            })
            jQuery(document).ready(function($){
    //----- Open model CREATE -----//
                alert('hi');

                jQuery('#btn-add').click(function () {
                    jQuery('#btn-save').val("add");
                    jQuery('#myForm').trigger("reset");
                    jQuery('#formModal').modal('show');
            });
        </script>
