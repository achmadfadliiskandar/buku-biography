@extends('template.master')
@section('css')
    
@endsection
@section('content')
<br>
<h3 class="text-center">
Table Of Content
</h3>
<br>
<ul class="list-group list-group-light list-group-numbered shadow-sm">
    <li class="list-group-item px-3 border-0">
      <a href="story/jhon_dalton" class="text-dark">Siapa Jhon Dalton?</a>
    </li>
    <li class="list-group-item px-3 border-0">
      <a href="story/perjalanan_hidup_jhon_dalton" class="text-dark">Perjalanan Hidup Jhon Dalton</a>
    </li>
    <li class="list-group-item px-3 border-0">
        <a href="story/teori_atom_jhon_dalton" class="text-dark">Teori Atom Jhon Dalton</a>
      </li>
      <li class="list-group-item px-3 border-0">
        <a href="story/referensi_jhon_dalton" class="text-dark">Referensi</a>
      </li>
      <li class="list-group-item px-3 border-0">
        <a href="story/ringkasan_jhon_dalton" class="text-dark">Ringkasan</a>
      </li>
  </ul>
  <br>
  <a href="/start">Kembali</a>
@endsection