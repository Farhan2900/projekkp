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
                <h4 align="center">Data Siswa</h4>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-striped table-md" id="myTable">
                    <tbody>
                        <tr>
                            <th>No</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Akses</th>
                            <th class="text-center">Opsi</th>
                        </tr>
                        <?php foreach ($siswa as $key => $value) :?>
                        <tr>
                            <td><?= $key +1?></td>
                            <td><?= $value->NIK?></td>
                            <td><?= $value->nm_siswa?></td>
                            <td><?= $value->username?></td>
                            <td><?= $value->password?></td>
                            <td><?= $value->email?></td>
                            <td><?= $value->akses?></td>

                            <td class="text-center" style="width: 95px;">
                                <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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