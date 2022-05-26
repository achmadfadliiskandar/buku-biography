@extends('template.master')
@section('content')
<div class="row">
    <div class="col-12 d-flex justify-content-center my-5">
        <div class="flip-container">
            <div class="flipper">
                <div class="front artist-1">
                    <!-- front content -->
                </div>
                <div class="back p-2">
                    {{-- <p>You won</p> --}}
                    <h2 class="text-center">Anggota Kelompok</h2>
                    <h2 class="text-center">.</h2>
                    <h2 class="text-center">Group Member</h2>
                    <hr>
                    <h4 class="text-center">Name(absence) / Class</h4>
                    <ul style="font-size: 0.7em;">
                        <li>Achmad Fadli Iskandar(1) / 12 RPL 2</li>
                        <li>Dzaki Ahnaf Zulfikar(10) / 12 RPL 2</li>
                        <li>Faiz Ramadhan(24) / 12 RPL 2</li>
                        <li>Khairul Akbar(19) / 12 RPL 2</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <a href="story" class="btn btn-lg btn-outline-primary w-100 rounded-pill">Baca Disini</a>
    </div>
    <div class="col-6">
        <a href="/" class="btn btn-lg btn-light w-100 rounded-pill">Kembali</a>
    </div>
</div>

@endsection
@section('css')
<style>
/* flip the pane when hovered */

.flip-container.hover .flipper {
    transform: rotateY(180deg);
}

.flip-container,
.front,
.back {
    width: 250px;
    height: 400px;
}


/* flip speed */

.flipper {
    transition: 0.8s;
    transform-style: preserve-3d;
    position: relative;
}


/* hide back of pane during swap */

.front,
.back {
    backface-visibility: hidden;
    position: absolute;
    top: 0;
    left: 0;
}


/* front pane, placed above back */

.front {
    z-index: 2;
    transform: rotateY(0deg);
}


/* back, initially hidden pane */

.back {
    transform: rotateY(180deg);
    background-color: #fff;
    border: 1px solid #000;
}

.artist-1 {
    background: url('{{ url('img.png') }}') no-repeat;
    background-size: cover;
    background-position: center;
}

</style>
@endsection
@section('js')
<script>
  $('.flip-container .flipper').click(function() {
	$(this).closest('.flip-container').toggleClass('hover');
    $(this).css('transform, rotateY(180deg)');
});

</script>
@endsection
