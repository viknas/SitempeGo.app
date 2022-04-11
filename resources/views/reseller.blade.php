@extends('layouts.main')

@section('judul')
    <h1>Reseller</h1> 
@endsection

@section('container')
<link rel="stylesheet" href="css/reseller.css">
<div class="content">
    <form class="form">
        <h3 class="sub-judul">Data Reseller</h3>
        <div class="car pb-4">
            <div class="row">
                <div class="col-lg-10">
                    <div class="search">
                        <input type="text" class="form-control"  placeholder="cari berdasarkan nama">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="icon-tambah">
                        <button type="button" class="btn btn-danger"><i class='bx bx-plus'></i></button>
                    </div>     
                </div>
            </div>
        </div>
        
            <table>
                <tr>
                    <th width="2%">No</th>
                    <th width="25%%">Nama Reseller</th>
                    <th width="20%">Nomor hp</th>
                    <th width="53%">Alamat</th>
                </tr>
                <?php 
                    for ($i=1; $i <= 7; $i++){
                        echo "<tr>
                            <td>$i</td>
                            <td>76</td>
                            <td>80</td>
                            <td>81</td>
                        </tr>";
                    }               
                ?>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">sebelumnya</a></li>
                    <?php 
                        for ($k=1; $k <= 7; $k++){
                            echo "<li class='page-item'><a class='page-link' href='#'>$k</a></li>";
                        }               
                    ?>        
                    <li class="page-item"><a class="page-link" href="#">selanjutnya</a></li>
                </ul>
            </nav>
        </div>
    </form>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@endsection

{{--  --}}