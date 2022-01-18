<?= $this->extend('layout/template')?>
<?= $this->section('content')?>
<section class="section">
      <div class="section-header">
        <div class="section-header-back">
            <a href="<?= site_url('siswa')?>" class="btn btn-danger btn-sm"><i class="fas fa-arrow-left"></i> Kembali</a>
          </div>

      </div>

        <div class="section-body">
            <div class="card">
                <br>
                  <h4 align="center">BIODATA PESERTA DIDIK</h4>
                  <h6 align="center">YAYASAN SENTRA ANUGRAH MANDIRI</h6>
              
                  <div class="card-body ">
                      <form>
                <table>
                    <tr>
                        <td>
                            <a href="<?= site_url('siswa/print')?>" class="btn btn-success btn-sm"><i class="fas fa-print"> Print</i></a>
                        </td>
                    </tr>
                </table><br>
                    <label><b> A. DATA SISWA</b></label>
                    <table>
                        <tr>
                            <td style="width: 150px;">NIS</td>
                            <td>:</td>
                            <td style="width: 400px;"><?php echo $siswa[0]['NIS'];?></td>
                        </tr>
                        <tr>
                            <td>Nama Siswa</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['nm_siswa'];?></td>
                        </tr>
                        <tr>
                            <td>NIK</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['NIK'];?></td>
                        </tr>
                        <tr>
                            <td>Tempat Tanggal Lahir</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['tmpt_lhr'];?>, <?php echo $siswa[0]['tgl_lahir'];?></td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['agama'];?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['jns_kelamin'];?></td>
                        </tr>
                        <tr>
                            <td>Transportasi</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['transportasi'];?></td>
                        </tr>
                        <tr>
                            <td>Nomor HP</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['nmr_telp'];?></td>
                        </tr>
                    </table><br>
                    <label><b>B. DATA ALAMAT</b></label>
                    <table>
                        <tr>
                            <td style="width: 150px;">Jenis Tinggal</td>
                            <td>:</td>
                            <td style="width: 400px;"><?php echo $siswa[0]['jns_tinggl'];?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['alamat'];?></td>
                        </tr>
                        <tr>
                            <td>Nama Dusun</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['nm_dusun'];?></td>
                        </tr>
                        <tr>
                            <td>Wilaya</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['wilaya'];?></td>
                        </tr>
                        <tr>
                            <td>Kabupaten / Kota</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['kabupaten_kota'];?></td>
                        </tr>
                        <tr>
                            <td>Kecamatan</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['kecamatan'];?></td>
                        </tr>
                        <tr>
                            <td>Kelurahan</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['kelurahan'];?></td>
                        </tr>
                    </table><br>
                    <label><b>C. DATA ORANG TUA</b></label>
                    <table>
                        <tr>
                            <td style="width: 150px;">Nama Ayah</td>
                            <td>:</td>
                            <td style="width: 400px;"><?php echo $siswa[0]['nm_ayah'];?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Ayah</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['pekerjaan_ayah'];?></td>
                        </tr>
                        <tr>
                            <td>Nama Ibu</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['nm_ibu'];?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan Ibu</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['pekerjaan_ibu'];?></td>
                        </tr>
                    </table><br>
                    <label><b>D. DATA KELAS</b></label>
                    <table>
                        <tr>
                            <td style="width: 150px;">Program Kursus</td>
                            <td>:</td>
                            <td style="width: 400px;"><?php echo $siswa[0]['kelas_kursus'];?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['kelas_masuk'];?></td>
                        </tr>
                        <tr>
                            <td>Tahun Masuk</td>
                            <td>:</td>
                            <td><?php echo $siswa[0]['tahun_masuk'];?></td>
                        </tr>
                    </table>
                    </form>
                  </div>
                         
            </div>
        </div>
</section>
<?= $this->endSection()?>