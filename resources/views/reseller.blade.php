@extends('layouts.main')

@section('judul')
    <h1>Reseller</h1> 
@endsection

@section('container')
<link rel="stylesheet" href="css/reseller.css">
<div class="content">
    <h3 class="sub-judul">Data Reseller</h3>
    <div class="row height d-flex justify-content-center align-items-center">
        <div class="col">
            <div class="form"> 
                <i class='bx bx-search-alt'>
                    <input type="text" class="form-control form-input" placeholder="Search anything..." >
                </i> 
            </div>        
        </div>
        <div class="col">
            <button type="button" class="btn btn-danger">Danger</button>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection