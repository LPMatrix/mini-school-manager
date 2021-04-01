<script type="text/javascript">
    @if(Session::has('message'))
        var type = "{{ Session::get('type') }}";
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                positionClass:"toast-top-right"
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                positionClass:"toast-top-right"
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                positionClass:"toast-top-right"
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                positionClass:"toast-top-right"
                break;
        }
    @endif
</script>
