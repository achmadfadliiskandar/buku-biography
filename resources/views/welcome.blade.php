@extends('template.master')
@section('content')
<div class="mt-5 pt-5">
    <b class="h3 d-block text-center mt-5 font-weight-bold" id="demo"></b>
    <a href="{{ url('start') }}" class="btn btn-lg w-100 btn-primary rounded-pill mt-5">Mulai</a>
</div>
@endsection
@section('js')
<script>
    var i = 0;
    var txt = 'Selamat Datang!.';
    var speed = 50;

    function typeWriter() {
        if (i < txt.length) {
            document.getElementById("demo").innerHTML += txt.charAt(i);
            i++;
            setTimeout(typeWriter, speed);
        }
    }
    typeWriter();

</script>
@endsection
@section('css')
<style>
    .position-relative-example {
        height: 200px;
        width: 100%;
        background-color: #f5f5f5;
    }

    .position-relative-example div {
        width: 2em;
        height: 2em;
        background-color: #343a40;
        border-radius: .25rem;
    }

</style>
@endsection
