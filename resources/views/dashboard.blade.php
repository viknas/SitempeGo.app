@extends('layouts.main')

@section('judul')
  <h1>Dashboard</h1>
@endsection


@section('container')
<link rel="stylesheet" href="css/dashboard.css">

<div class="row row-cols-lg-2 row-cols-md-2 row-cols-sm-1 row-cols-xs-1">
  <div class="col">
    <div class="row">
      <div class="col-12 harga1">
        <h1>Rp 0</h1>
      </div>
      <div class="col-12 mHari">
        <H4>Pendapatan hari ini</H4>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="row">
      <div class="col-12 harga2">
        <h1>Rp 0</h1>
      </div>
      <div class="col-12 mBulan">
        <H4>Pendapatan bulan ini</H4>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="row">
      <div class="col-12 harga3">
        <h1>Rp 0</h1>
      </div>
      <div class="col-12 lHari">
        <H4>Pengeluaran hari ini</H4>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="row">
      <div class="col-12 harga4">
        <h1>Rp 0</h1>
      </div>
      <div class="col-12 lBulan">
        <H4>Pengeluaran bulan ini</H4>
      </div>
    </div>
  </div>
  
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection