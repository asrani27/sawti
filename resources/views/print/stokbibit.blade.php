<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->

  <!-- Font Awesome -->
  <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body>
  
  <table class="tgj"  width='100%'>
    <tr>
      <td width=100></td>
      <td align=center class="judul"><b><font size="5">
        PT Candi Arta<br /></font></b>
        <b>Jl. Desa tajau pecah ,RT.12 RW. 03 dusun batu brajang, Kec. Batu Ampar, Kabupaten Tanah Laut, Kalimantan Selatan 70882<br></b>
      </td>
      <td width=100></td>
    </tr>
  </table>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        Tanggal : {{\Carbon\Carbon::today()->format('d/m/Y')}}
        <address>
          <strong>PT Candi Arta</strong><br>
          Phone: 0878-2134-5432<br>
          Email: candiarta@gmail.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <br><br><br>
        <address>
            <h3><strong>LAPORAN STOK</strong></h3>
            
        </address>
      </div>
      <!-- /.col -->
      {{-- <div class="col-sm-4 invoice-col">
        <b>No Transaksi {{$data->no_transaksi}}</b><br>
        <br>
        <b>Order ID:</b> {{$data->id}}<br>
        <b>Tgl Pembayaran:</b> {{$data->created_at}}<br>
        <b>Tipe Pembayaran:</b> CASH
      </div> --}}
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped table-sm">
          <thead>
          <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Stok</th>
          </tr>
          </thead>
          @php
          $no =1;
          @endphp
          <tbody>
              @foreach ($data as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->kode}}</td>
                    <td>{{$item->jenis}}</td>
                    <td>{{$item->stok}}</td>
                </tr>
              @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    {{-- <div class="row">
      <!-- accepted payments column -->
      <div class="col-6">
        <p class="lead">Terima Kasih Telah Berbelanja:</p>
      </div>
      <!-- /.col -->
      <div class="col-6">
        <p class="lead">Total Pembayaran</p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Grand Total:</th>
              <td>@currency($data->penjualan_detail->sum('subtotal'))</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div> --}}
    <!-- /.row -->
  </section>
  <!-- /.content -->
  <br/>
<table width="100%">
  <tr>
    <td width="70%"></td>
    <td style="text-align: center">
      <strong>
      Pimpinan<br/><br/><br/>

      Rudy Susanto
    </strong>
    </td>
  </tr>
</table>
</div>
<!-- ./wrapper -->

<script type="text/javascript"> 
  window.addEventListener("load", window.print());
</script>
</body>
</html>
