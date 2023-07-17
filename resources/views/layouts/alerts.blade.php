<script>
    toastr.options = {
        closeButton: true,
        progressBar: true,
        enableHtml: true
    }
    
    @if(Session::has('success'))
        toastr.success("{!! Session::get('success') !!}");
    @endif
    
    @if(Session::has('warning'))
        toastr.warning("{!! Session::get('warning') !!}");
    @endif
 
</script>
