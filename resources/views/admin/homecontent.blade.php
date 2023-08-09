@extends('admin.home')

@section ('admincontent')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            openBtn("cuenta");
            activeBtn("inicio");
        });
    </script>
@endsection