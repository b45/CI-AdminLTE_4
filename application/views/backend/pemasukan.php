<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

            <div class="content-wrapper">
                <section class="content-header">
                    <h3>Pemasukan</h3>
                    <!-- <?php echo $pagetitle; ?> -->
                    <!-- <?php echo $breadcrumb; ?> -->
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Laporan Pemasukan Barang Per Dokumen Pabean</h3>
                                </div>
                                <div class="box-body">
                                    <form action="" method="post">
                                        <div class="form-group fg_left">
                                            <label for="periode">Periode Tanggal</label>
                                            <label for="pemisah">:</label>
                                            <select name="realisasi" id="">
                                                <option value="realisasi">Realisasi </option>
                                            </select>
                                            <!-- <label for="sd">s/d</label> -->
                                            <input type="date" name="periodeAwal">
                                            <label for="sd">s/d</label>
                                            <input type="date" name="periodeAkhir">
                                            <br>
                                            <label for="jenisDokumen">Jenis Dokumen</label>
                                            <label for="pemisah2">:</label>
                                            <select name="jDokumen" id="">
                                                <option value="jdoc">Ini Jenis Dokumen</option>
                                                <option value="lol">lol</option>
                                            </select><br>
                                            <label for="tampilan">Tampilan</label>
                                            <label for="pemisah3">:</label>
                                            <select name="dtPerHalaman " id="">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                    <option value="200">200</option>
                                                </select>
                                            <label for="dataPerHalaman">Data Per Halaman</label>
                                        </div>
                                        <div class="form-group fg_right">
                                            <label for="kodeBarang">Kode Barang</label>
                                            <label for="pemisah4">:</label>
                                            <input type="text" name="kodeBarang" id="kodeBarang"><br>
                                            <label for="lokasiBarang">Lokasi Barang</label>
                                            <label for="pemisah5">:</label>
                                            <select name="lokasiBarang" id="lokasiBarang">
                                                <option value="gudang">Gudang</option>
                                                <option value="toko">Toko</option>
                                            </select><br>
                                            <label for="melalui">Melalui</label>
                                            <label for="pemisah6">:</label>
                                            <input type="radio" name="rMelaluiWeb" value="web" checked> Web
                                            <input type="radio" name="rMelaluiEmail" value="email"> Email <br>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="proses" class="btn">Proses</button>                                    
                                        </div>

                                    </form>
                                    <div class="cetak">
                                        <label for="noteCetak">#)Cetak dilakukan per halaman.</label><br>
                                        <a class="fa fas fa-file-pdf" href="#"> Cetak PDF </a>
                                        <a class="fa fas fa-file-excel" href="#"> Cetak Excel </a>                                    </div>
                                    <table class="table table-striped table-hover table-condensed">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">No</th>
                                                <th rowspan="2">Jenis Dokumen</th>
                                                <th colspan="2">Dokumen Pabean</th>
                                                <th colspan="2">Bukti/Dok. Penerimaan</th>
                                                <th rowspan="2">Pemasok/Pengirim</th>
                                                <th rowspan="2">Kode Barang</th>
                                                <th rowspan="2">Nama Barang</th>
                                                <th rowspan="2">Satuan</th>
                                                <th rowspan="2">Jumlah</th>
                                                <th rowspan="2">Nilai Barang</th>
                                                <tr>
                                                    <th>Nomor</th>
                                                    <th>Tanggal</th>
                                                    <th>Nomor</th>
                                                    <th>Tanggal</th>
                                                </tr>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        </tbody>
                                    </table>










                                </div>
                            </div>
                         </div>
                    </div>
                </section>
            </div>
