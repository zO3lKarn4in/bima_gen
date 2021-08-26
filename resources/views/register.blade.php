@extends('layouts.register') 
@section('content')
   
    <div class="content-wrapper" style="min-height: 517px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Register</h1>
          </div> 
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid"> 
          
    <div class="rf-register-form" >         
        <form class="rg-form" action="{{ route('save_register')}}" method="POST"> 
            <!-- <div class="row">
                <div class="col-md-10">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text">nama printing</span>
                  </div>
                  <input type="text" class="form-control" placeholder="nama printing">
                </div>
                </div>
            </div> -->
        <div class="rf-input-container"><i class="fa fa-star fa fa-user rf-icon"></i><input type="text" class="form-control rf-input-field" placeholder="Nama Printing" required oninvalid="this.setCustomValidity('Nama Tidak Boleh Kosong')" oninput="setCustomValidity('')" name="nama_printing"/></div>
        <div class="rf-input-container"><i class="fas fa-city rf-icon"></i><input type="text" class="form-control rf-input-field" placeholder="Nama Kota" required oninvalid="this.setCustomValidity('Kota Tidak Boleh Kosong')" oninput="setCustomValidity('')" name="nama_kota"/></div>
        <div class="rf-input-container"><i class="fa fa-laptop rf-icon"></i><input type="number" class="form-control rf-input-field" placeholder="NO HP" required oninvalid="this.setCustomValidity('Nomor Tidak Boleh Kosong')" oninput="setCustomValidity('')" name="no_hp"/></div>
     <div class="rf-input-container"><i class="fa fa-envelope rf-icon"></i><input type="email" class="form-control rf-input-field" placeholder="Masukkan Email" required name="email"/></div>
     <br>
       
        
    <di v class="rf-input-container"></di>
    <div class="container">
        <div class="form-row">
            <div class="col-md-12">
                <h1 style="font-family: Roboto, sans-serif;font-size: 20px;text-align: center;">Mesin Produksi Yang Dimiliki</h1>
            </div>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">

            <label class="checkbox">
                <input type="checkbox"name="mesin_dimiliki[]" value="mesin laser A3+"/><span class="checkbox-check"></span>
                   Mesin Laser A3+
                </label>
            </div>
            <div class="col-md-6">
                <input type="checkbox" name="mesin_dimiliki[]" value="Outdoor Printing"/><span class="checkbox-check"></span>
                Outdoor Printing
            </label>
        </div>
        <div class="col-md-6">
            <label class="checkbox"><label class="checkbox"><input type="checkbox" name="mesin_dimiliki[]" value="Indoor Printing"/><span class="checkbox-check"></span>
                Indoor Printing
            </label>
        </div>
        <div class="col-md-6">
            <label class="checkbox"><input type="checkbox" name="mesin_dimiliki[]" value="Sublimasi"/><span class="checkbox-check"></span>
                Sublimasi
            </label>
        </div>
        <div class="col-md-6">
            <label class="checkbox"><input type="checkbox" name="mesin_dimiliki[]" value="DTF"/><span class="checkbox-check"></span>
                DTF
            </label>
        </div>
        <div class="col-md-6">
            <label class="checkbox"><input type="checkbox" name="mesin_dimiliki[]" value="UV"/><span class="checkbox-check"></span>
                UV
            </label>
        </div>
        <div class="col-md-6">
            <label class="checkbox"><input type="checkbox" name="mesin_dimiliki[]" value="Offset"/><span class="checkbox-check"></span>
                Offset
            </label>
        </div>
        </div>
    <!-- <div class="container">
        <div class="form-row"> -->
            <br>
        <select name="jumlah_karyawan" class="form-select" aria-label="Default select example">
  <option selected>jumlah karyawan</option>
  <option value=" Kurang Dari 5 karyawan"> Kurang Dari 5 karyawan </option>
  <option value="5-30 karyawan">5-30 karyawan</option>
  <option value=" Lebih Dari 30 karyawan"> Lebih Dari 30 karyawan</option>
</select><!-- </div>
    </div> -->
            <br>
            <br>
        
    <!-- <header></header> -->
    <input class="btn btn-outline-primary" type="submit" value="Register" />
</form></div><!-- End: Register form -->
          </div>
    </section>
    <!-- /.content -->
  </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>
@endsection
