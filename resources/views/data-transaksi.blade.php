<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Data Pelanggan - Admin Blue Springs Laundry</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/favicon.png" rel="icon">
  <link href="../assets/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Blue Springs Laundry</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              Kamu Mendapat 4 Nontifikasi Baru
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Lihat Semua</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Data Transaksi</h4>
                <p>ada transaksi baru yang belum di cek</p>
                <p>30 min. yang lalu</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Data Cucian</h4>
                <p>ada transaksi baru yang GAGAL!</p>
                <p>1 jam. yang lalu</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Data Pelanggan</h4>
                <p>data pelanggan berhasil di tambahkan</p>
                <p>2 hari. yang lalu</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Data Paket</h4>
                <p>ada data paket baru</p>
                <p>4 minggu. yang lalu</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Tampilkan Semua Nontifikasi</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Aulia Fathurohman</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Aulia Fathurohman</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/blue-springs-laundry/users-profile">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/blue-springs-laundry/users-profile">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            

            <li>
              <a class="dropdown-item d-flex align-items-center" href="/blue-springs-laundry/login">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed" href="/blue-springs-laundry/dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="/blue-springs-laundry/data-pelanggan">
        <i class="bi bi-menu-button-wide"></i><span>Data Pelanggan</span>
      </a>
    </li><!-- End data user Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="/blue-springs-laundry/data-cucian">
        <i class="bi bi-journal-text"></i><span>Data Cucian</span>
      </a>

    </li><!-- End Tables Nav -->

    <li class="nav-item">
      <a class="nav-link" href="/blue-springs-laundry/data-transaksi">
        <i class="bi bi-bar-chart"></i><span>Data Transaksi</span>
      </a>

    </li><!-- End Charts Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="/blue-springs-laundry/data-paket">
        <i class="bi bi-gem"></i><span>Data Paket</span>
      </a>

    </li><!-- End Icons Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="/blue-springs-laundry/users-profile">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->
  </ul>

</aside><!-- End Sidebar-->

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Data Cucian</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/blue-springs-laundry/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Data Cucian</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8" style="flex: 0 0 auto; width: 100%;">
          <div class="row">


            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Hari ini</a></li>
                    <li><a class="dropdown-item" href="#">Bulan ini</a></li>
                    <li><a class="dropdown-item" href="#">Tahun ini</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Transaksi Terbaru <span>| Hari Ini</span></h5>
                  <button class="btn" type="submit" style="background-color: #2db326; border-color: white; color: white; text-emphasis-color: white-space; position: relative; left: 800px; top: 38px;" data-bs-toggle="modal" data-bs-target="#addTransactionModal"><i class="ri-add-circle-line"></i> Tambah</button>
                  <!-- Add Modal -->
                  <div class="modal fade" id="addTransactionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Transaction Form</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/blue-springs-laundry/data-transaksi/create" method="POST">
                          @csrf
                          <div class="modal-body">
                            <div class="form-floating mb-3">
                              <input type="hidden" class="form-control" name="id_transaksi" readonly>
                            </div>
                            <div class="form-floating mb-3">
                              <select type="text" class="form-select" name="id_cucian" placeholder="Select a laundry">
                                <option selected>Select available laundry</option>
                                @foreach ($createTransaksi as $laundryData)
                                  <option value=" {{$laundryData->id_cucian}}">[ID] {{$laundryData->id_cucian}} --- [OWNER] {{$laundryData->nama}}</option>
                                @endforeach
                              </select>
                              <label for="floatingLevel">Laundry</label>
                            </div>
                            <div class="form-floating mb-3">
                              <input onchange="hargafix();" type="number" class="form-control" id="floatingWeight" name="total_berat" placeholder="Total weight">
                              <label for="floatingWeight">Total Weight (Kg)</label>
                            </div>
                            <div class="form-floating mb-3">
                              <input onchange="hargafix();" type="number" class="form-control" id="floatingFee" name="ongkir" placeholder="Fee">
                              <label for="floatingFee">Shipping Cost</label>
                            </div>
                            <div class="form-floating mb-3">
                              <input onchange="hargafix();" type="number" class="form-control" id="floatingDiscount" name="diskon" placeholder="Discount">
                              <label for="floatingDiscount">Discount</label>
                            </div>
                            <div class="row">
                              <div class="col">
                                <div class="form-floating mb-3">
                                  <input onchange="return hargafix();" type="number" class="form-control" id="floatingTotalPrice" name="total_harga" placeholder="Total price">
                                  <label for="floatingTotalPrice">Total Price</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="addTransactionData"><i class="fa-solid fa-pen-to-square"></i> Save</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Close</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th style="text-align: center" scope="col">No</th>
                        <th style="text-align: center" scope="col">ID Transaksi</th>
                        <th style="text-align: center" scope="col">ID Cucian</th>
                        <th style="text-align: center" scope="col">Total Harga</th>
                        <th style="text-align: center" scope="col">Total Berat</th>
                        <th style="text-align: center" scope="col">Ongkir</th>
                        <th style="text-align: center" scope="col">Diskon</th>
                        <th style="text-align: center" scope="col">Tanggal Masuk</th>
                        <th style="text-align: center" scope="col">Tanggal Keluar</th>
                        <th style="text-align: center" scope="col">Action</th>
                      </tr>
                    </thead>
                    <?php
                    $no = 1;
                    ?>
                      <tbody>
                        @foreach ($view as $transactionData)
                        <td style="text-align: center"><?= $no++ ?></td>
                        <td style="text-align: center">{{$transactionData->id_transaksi}}</td>
                        <td style="text-align: center">{{$transactionData->id_cucian}}</td>
                        <td style="text-align: center">{{$transactionData->total_harga}}</td>
                        <td style="text-align: center">{{$transactionData->total_berat}}</td>
                        <td style="text-align: center">{{$transactionData->ongkir}}</td>
                        <td style="text-align: center">{{$transactionData->diskon}}</td>
                        <td style="text-align: center"><?= DATE('F j, Y, g:i a', strtotime($transactionData->tanggal_masuk)) ?></td>
                        <td style="text-align: center"><?= DATE('F j, Y, g:i a', strtotime($transactionData->tanggal_keluar)) ?></td>
                        <td style="text-align: center"><button class="btn btn-info delete" style="background-color: #31D2F2; border-color: white; color: white; text-emphasis-color: white-space;" data-bs-toggle="modal" data-bs-target="#editTransactionModal<?= $no ?>"><i class="ri-edit-2-line"></i> Edit</button> <button class="btn btn-info delete" style="background-color: rgb(255, 0, 0); border-color: white; color: white; text-emphasis-color: white-space;" data-bs-toggle="modal" data-bs-target="#deleteTransactionModal<?= $no ?>"><i class="ri-delete-bin-2-line"></i> Delete</button></td>
                      </tbody>
                      <!-- Edit Modal -->
                      <div class="modal fade" id="editTransactionModal<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Transaction Form</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="/blue-springs-laundry/data-transaksi/{{$transactionData->id_transaksi}}" method="POST">
                              @method('put')
                              @csrf
                              <div class="modal-body">
                                <div class="form-floating mb-3">
                                  <input type="hidden" class="form-control" name="id_transaksi" value="{{$transactionData->id_transaksi}}" readonly>
                                </div>
                                <div class="form-floating mb-3">
                                  <select type="text" class="form-select" name="id_cucian" placeholder="Select a laundry">
                                      <option selected value="{{$transactionData->id_cucian}}">[ID] {{$transactionData->id_cucian}}</option>
                                  </select>
                                  <label for="floatingLevel">Laundry</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input type="number" class="form-control"  id="floatingWeight" name="total_berat" placeholder="Total weight" value="{{$transactionData->total_berat}}">
                                  <label for="floatingWeight">Total Weight</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input type="number" class="form-control" id="floatingFee" name="ongkir" placeholder="Fee" value="{{$transactionData->ongkir}}">
                                  <label for="floatingFee">Shipping Cost</label>
                                </div>
                                <div class="form-floating mb-3">
                                  <input type="number" class="form-control"  id="floatingDiscount" name="diskon" placeholder="Discount" value="{{$transactionData->diskon}}">
                                  <label for="floatingDiscount">Discount</label>
                                </div>
                                <div class="row">
                                  <div class="col">
                                    <div class="form-floating mb-3">
                                      <input type="number" class="form-control" onchange="return hargafix();" id="floatingTotalPrice" name="total_harga" placeholder="Total price" value="{{$transactionData->total_harga}}">
                                      <label for="floatingTotalPrice">Total Price</label>
                                    </div>
                                  </div>
                                </div>
                                {{-- <div class="row">
                                  <div class="col">
                                <div class="form-floating mb-3">
                                <section id="section-date">
                                  <label for="tanggal">Tanngal Keluar</label>
                                  <input style="width: 100%" height="2cm" id="tanggal" type="date" name="tanggal_keluar" value="{{$transactionData->tanggal_keluar}}">
                                </section>
                                </div>
                              </div>
                                </div> --}}
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="updateTransactionData"><i class="fa-solid fa-pen-to-square"></i> Update</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- Delete Modal -->
                      <div class="modal fade" id="deleteTransactionModal<?= $no ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">Transaction Data Deletion Confirmation</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="/blue-springs-laundry/data-transaksi/{{$transactionData->id_transaksi}}" method="POST">
                              @method('delete')
                              @csrf
                              <div class="modal-body">
                                <div class="form-floating mb-3">
                                  <input type="hidden" class="form-control" name="id_transaksi" value="{{$transactionData->id_transaksi}}" readonly>
                                </div>
                                
                                  <h5 class="text-center">Are you sure you want to delete this transaction data?<br><span class="text-danger">[ID] => {{$transactionData->id_cucian}}</span><br><span class="text-danger"></span></h5>
                              
                                
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" name="deleteTransactionData"><i class="fa-solid fa-user-xmark"></i> Delete</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="fa-solid fa-circle-xmark"></i> Close</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->


          </div>
        </div><!-- End Left side columns -->



      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.min.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.min.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

  <script>
    function hargafix(){
      var totalberat = document.getElementById("floatingWeight").value;
      var ongkir = document.getElementById("floatingFee").value;
      var diskon = document.getElementById("floatingDiscount").value;
      var totalharga = totalberat + ongkir - diskon;
      
      return totalharga;
    }
    document.querySelector("input[type='time']").addEventListener("input", function() {
  if (/^([0-1][0-9]|2[0-3]):[0-5][0-9]$/.exec(this.value)) {
    const minute = Number(this.value.substring(3,5));
    const hour = Number(this.value.substring(0,2)) % 12 + (minute / 60);
    this.style.backgroundImage = `url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><circle cx='20' cy='20' r='18.5' fill='%239ed' stroke='%23111' stroke-width='3' /><path d='M20,4 20,8 M4,20 8,20 M36,20 32,20 M20,36 20,32' stroke='%23bbb' stroke-width='1' /><g fill='%23111' stroke='%23111' stroke-width='2'><circle cx='20' cy='20' r='2' /><path d='M20,24 20,5' style='transform:rotate(${360 * minute / 60}deg); transform-origin: 50% 50%;' /><path d='M20,24 20,8' style='transform:rotate(${360 * hour / 12}deg); transform-origin: 50% 50%;' /></g></svg>")`;
  } else {
    this.style.backgroundImage = `url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><circle cx='20' cy='20' r='18.5' fill='none' stroke='%23111' stroke-width='3' /><path d='M20,4 20,8 M4,20 8,20 M36,20 32,20 M20,36 20,32' stroke='%23bbb' stroke-width='1' /><g fill='%23111' stroke='%23111' stroke-width='2'><circle cx='20' cy='20' r='2' /><path d='M20,24 20,5' style='transform:rotate(120deg); transform-origin: 50% 50%;' /><path d='M20,24 20,8' style='transform:rotate(20deg); transform-origin: 50% 50%;' /></g></svg>")`;
  }
});

document.querySelector("input[type='password']").addEventListener("input", function() {
  if (this.value.length >= 8) {
    this.style.backgroundImage = `url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><g fill='white' stroke='%23111' stroke-width='3'><path d='M10,20 C10,5 10,1.5 20,1.5 30,1.5 30,5 30,13' /><path d='M5,20 35,20 35,38.5 5,38.5Z M20,27 20,33' fill='%23fc5' /><circle cx='20' cy='27' r='1' /></g></svg>")`;
  } else {
    this.style.backgroundImage = `url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><g fill='white' stroke='%23111' stroke-width='3'><path d='M10,20 C10,5 10,1.5 20,1.5 30,1.5 30,5 30,20' /><path d='M5,20 35,20 35,38.5 5,38.5Z M20,27 20,33' /><circle cx='20' cy='27' r='1' /></g></svg>")`;
  }
});
  </script>
  <style>
    input[type="date"] {
  padding-left: 1.5em;
  padding-right: 0;
  background-repeat: no-repeat;
  background-position: 0.25em center;
  background-size: 1em;
  background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='40' height='40'><g stroke='%23111' stroke-width='1' fill='none'><path d='M2,5 38,5 38,10 2,10Z' fill='%23aaa' /><path d='M2,5 38,5 38,10 2,10 2,15 38,15 38,20 2,20 2,25 38,25 38,30 2,30 2,35 38,35 33,35 33,5 28,5 28,35 23,35 23,5 18,5 18,35 13,35 13,5 8,5 8,35' /><path d='M01.5,4.5 1.5,35.5 38.5,35.5 38.5,4.5Z' stroke-width='3'/></g></svg>");
}
  </style>
</body>

</html>