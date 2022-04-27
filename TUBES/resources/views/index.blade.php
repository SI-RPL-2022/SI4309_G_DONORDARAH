@extends('layout.app')
@section('content')
    <div class="px-5 pb-5">
        <div class="row justify-content-center px-2">
            <div class="col-10">
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <div class="card">
                            <div class="card-header bg-red100 text-light text-right">
                                <b> JUMLAH STOK DARAH PMI </b>
                            </div>
                            <div class="card-body p-1">
                                <canvas id="chart" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-12 mt-5 text-center">
                        <div class="container">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset('assets/files/carousel.png') }}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('assets/files/carousel.png') }}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('assets/files/carousel.png') }}" alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                        </div>
                    <div class="col-md-4 col-sm-12 mt-5 text-center">
                        <div class="card h-100">
                            <div class="card-header bg-red100 text-light text-left">
                                <b> Cari Stok Darah </b> 
                            </div>
                            <form action="" class="overflow-auto p-3">
                                <div class="card-body py-0 pt-3">
                                    <div class="form-group text-left">
                                        <label for="bloodType">Golongan Darah</label>
                                        <select class="form-control" id="bloodType">
                                            <option>A+</option>
                                            <option>AB</option>
                                            <option>B</option>
                                            <option>O</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body py-0">
                                    <div class="form-group text-left">
                                        <label for="component">Pilih Komponen</label>
                                        <select class="form-control" id="component">
                                            <option>-Pilih Komponen-</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body py-0">
                                    <div class="form-group text-left">
                                        <label for="province">Pilih Provinsi</label>
                                        <select class="form-control" id="province">
                                            <option>-Pilih Provinsi-</option>
                                        </select>
                                    </div>
                                </div>
                                <a href="{{ route('blood-stock') }}" type="button" class="btn btn-danger">CARI</a>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mt-5 text-center">
                        <div class="card h-100">
                            <div class="card-header bg-red100 text-light text-left">
                                <b> Kegiatan Donor </b> | 17 - 1 - 2022
                            </div>
                            <div class="card-body">
                                <ol class="text-left">
                                    <li><a href="">Kegiatan di Provinsi Bali</a></li>
                                    <li><a href="">Kegiatan di Provinsi Banten</a></li>
                                    <li><a href="">Kegiatan di Provinsi Jawa Barat</a></li>
                                    <li><a href="">Kegiatan di Provinsi Jawa Tengah</a></li>
                                    <li><a href="">Kegiatan di Provinsi Jawa Timur</a></li>
                                    <li><a href="">Kegiatan di Provinsi Lampung</a></li>
                                    <li><a href="">Kegiatan di Provinsi Sulawesi Barat</a></li>
                                    <li><a href="">Kegiatan di Provinsi Sumatera Selatan</a></li>
                                    <li><a href="">Kegiatan di Provinsi Sumatera Utara</a></li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-8 col-sm-12 mt-5 text-center">
                        <div class="card">
                            <div class="card-header bg-red100 text-light text-left">
                                FAQ's
                            </div>
                            <div class="card-body text-left">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header bg-red100" id="headingOne">
                                            <p class="text-light mb-0" type="button" data-toggle="collapse"
                                               data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Mengapa Harus Bayar Saat Kita Butuh Darah dari PMI?
                                            </p>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                Biaya yang kita keluarkan perkantong darah sebenarnya adalah biaya penggantian
                                                pemeliharaan darah, supaya kondisinya tetap sama seperti saat berada dalam tubuh
                                                kita. Biaya ini yang kita kenal dgn nama <b>"BPPD"</b> atau Biaya Penggantian
                                                Pengelolaan
                                                Darah.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">

                                        <div class="card-header bg-red100" id="headingTwo">
                                            <p class="text-light mb-0" type="button" data-toggle="collapse"
                                               data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                                Mengapa Kita Perlu Donor Darah?
                                            </p>
                                        </div>

                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <b>Kebutuhan yang besar </b>: Setiap delapan detik, ada satu orang yang
                                                membutuhkan
                                                transfusi darah di Indonesia. <br>
                                                <b>Pemeriksaan kesehatan gratis </b>: Sebelum mendonorkan darah, petugas akan
                                                memeriksa
                                                suhu tubuh, denyut nadi, tekanan darah dan kadar hemoglobin Anda. <br>
                                                <b>Tidak menyakitkan </b>: Ya Anda memang akan merasa sakit. Namun, rasa sakit
                                                itu
                                                tidak
                                                seberapa dan akan hilang dengan cepat.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">

                                        <div class="card-header bg-red100" id="headingThree">
                                            <p class="text-light mb-0" type="button" data-toggle="collapse"
                                               data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                                Kenapa Ketika Membutuhkan Darah Prosesnya Lama ?
                                            </p>
                                        </div>