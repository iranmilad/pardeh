@section('js')
<script>
    document.addEventListener("DOMContentLoaded",function(){
        window.$SWAL({
            msg: "{{$msg}}",
            title: "{{$title}}",
            icon: "{{$icon}}",
            confirmButtonText: "{{$confirmButtonText}}",
        })
    })
</script>
@endsection