<script>
    @if(Session::has('toasts'))
        @foreach(Session::get('toasts') as $toast)
            toastr.{{ $toast['level'] }}('{{ $toast['message'] }}');
        @endforeach
    @endif
</script>
