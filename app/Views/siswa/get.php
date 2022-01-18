<?= $this->extend('layout/template')?>
<?= $this->section('content')?>
<section class="section">
    <div class="section-header">

        <a href="<?= site_url('siswa/add')?>" class="btn btn-primary"><i class="fas fa-database"></i> Registrasi</a>
        <div id="flash" data-flash="<?= session()->getFlashdata('success'); ?>"></div>
        <div class="section-header-breadcrumb">
            <a href="<?= site_url('alumni/add')?>" class="btn btn-primary"><i class="fas fa-plus"></i> Alumni Peserta
                Didik </a>
        </div>


    </div>


    <div class="section-body">
        <div class="card">
            <div class="card-header">
                <h4 align="center">BUKU INDUK</h4>

            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md" id="myTable">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>NIS</th>
                            <th>Nama Siswa</th>
                            <th>J. Kelamin</th>
                            <th>Agama</th>
                            <th>Alamat</th>
                            <th>Kelas</th>
                            <th class="text-center">Opsi</th>
                        </tr>

                        <?php foreach ($siswa as $key => $value) :?>
                        <tr>
                            <td><?= $key +1?></td>
                            <td><?= $value->NIS?></td>
                            <td><?= $value->nm_siswa?></td>
                            <td><?= $value->jns_kelamin?></td>
                            <td><?= $value->agama?></td>
                            <td><?= $value->alamat?></td>
                            <td><?= $value->kelas_masuk?></td>
                            <td class="text-center" style="width: 95px;">
                                <a href="<?= site_url('siswa/edit/'.$value->NIS)?>" class="btn btn-warning btn-sm"><i
                                        class="fas fa-pencil-alt"></i></a>
                                <a href="<?= site_url('siswa/detail/'.$value->NIS)?>" class="btn btn-primary btn-sm"><i
                                        class="fas fa-eye"></i></i></a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>

        </div>

    </div>
    </div>
</section>
<?= $this->endSection()?>