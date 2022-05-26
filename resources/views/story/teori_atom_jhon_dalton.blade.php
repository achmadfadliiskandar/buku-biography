@extends('template.master')
@section('content')
<div class="mt-2">

    <br>
    <h1 class="text-center"><b>Teori Dan Penemuan Atom <br> Jhon Dalton</b></h1>
    <br>
    <hr>
    <div class="mb-4 mt-2">
        <h3> Model Atom Dalton</h3>
        <div class="text-center mb-3">
            <img src="{{ url('penemuan1.png') }}"
                class="w-75 img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
        </div>
        <p style="text-indent: 1em; text-align:justify;">John Dalton (1776-1844) adalah ilmuwan yang pertama kali mengembangkan model atom antara tahun 1803 hingga 1808.</p>
        <p style="text-indent: 1em; text-align:justify;">Hipotesis Dalton digambarkan dengan model atom sebagai bola pejal seperti tolak peluru. Teori atom Dalton didasarkan pada anggapan: Semua benda terbuat dari atom Atom-atom tidak dapat dibagi maupun dipecah menjadi bagian lain Atom-atom tidak dapat dicipta maupun dihancurkan Atom-atom dari unsur tertentu adalah indentik satu terhadap lainnya dalam ukuran, massa, dan sifat-sifat yang lain, namun mereka berbeda dari atom-atom dari unsur-unsur yang lain Perubahan kimia merupakan penyatuan atau pemisahan dari atom-atom yang tak dapat dibagi, sehingga atom tidak dapat diciptakan atau dimusnahkan Sayangnya, teori Dalton tidak dapat menjelaskan bagaimana atom sebagai bola pejal dapat menghantarkan arus listrik. Padahal, listrik adalah elektron yang bergerak. Ia tak sempat membuktikan partikel lain yang menghantarkan arus listrik. Teori Dalton dianut hingga ratusan tahun kemudian hingga akhirnya dipatahkan oleh ilmuwan setelahnya.</p>
    </div>
    <br>
    <hr>
    <div class="mb-4 mt-2">
        <h3> Model Atom Modern</h3>
        <p style="text-indent: 1em; text-align:justify;">Setelah abad ke-20, pemahaman mengenai atom makin terang benderang. Model atom modern yang kita yakini sekarang adalah penyempurnaan oleh Erwin Schrodinger pada 1926. Schrodinger menjelaskan partikel tak hanya gelombang, melainkan gelombang probabilitas. Kulit-kulit elektrin bukan kedudukan yang pastu dari suatu elektron, namun hanya suatu probabilitas atau kebolehjadian saja. Sebelumnya, Werner Heisenberg juga mengembangkan teori mekanika kuantum dengan prinsip ketidakpastian.</p>
    </div>
    <br>
    <hr>
    <div class="mb-4 mt-2">
        <h3> Berat Atom </h3>
        <div class="text-center mb-3">
            <img src="{{ url('penemuan2.png') }}"
                class="w-75 img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}" alt="">
        </div>
        <p style="text-indent: 1em; text-align:justify;">Dalton menerbitkan tabel bobot atom relatif pertamanya yang mengandung enam elemen (hidrogen, oksigen, nitrogen, karbon, sulfur, dan fosfor), relatif terhadap berat atom hidrogen yang secara konvensional diambil sebagai 1.Karena ini hanya bobot relatif, mereka tidak memiliki satuan berat yang melekat padanya. Dalton tidak memberikan indikasi dalam tulisan ini bagaimana dia sampai pada angka-angka ini, tetapi dalam buku catatan laboratoriumnya, tertanggal 6 September 1803, adalah daftar di mana ia menetapkan bobot relatif atom-atom dari sejumlah elemen, yang berasal dari analisis air, amonia, karbon dioksida, dll. oleh para ahli kimia waktu itu.</p>
        <p style="text-indent: 1em; text-align:justify;">Perluasan gagasan ini ke zat pada umumnya harus membawanya ke hukum proporsi berganda, dan perbandingan dengan eksperimen dengan cemerlang mengkonfirmasi deduksinya.Dalam makalah "On the Proportion of the Several Gases in the Atmosphere", yang dibacakannya pada November 1802, hukum proporsi berganda tampaknya diantisipasi dalam kata-kata:
        <ul>
            <li>
                Unsur-unsur oksigen dapat bergabung dengan bagian tertentu dari gas nitrous atau dengan dua kali bagian itu, tetapi tanpa kuantitas perantara.
            </li>
            <li>
                Tetapi ada alasan untuk menduga bahwa kalimat ini mungkin telah ditambahkan beberapa saat setelah pembacaan makalah, yang tidak diterbitkan hingga 1805.
            </li>
        </ul>
        </p>
    </div>
    <a class="btn btn-dark mb-4" href="/story">Kembali</a>
</div>
@endsection
