<?= $this->extend('layout/template')?>
<?= $this->section('content')?>
<section class="section">
      <div class="section-header">
          <div class="section-header-button">
            <a href="<?= site_url('kelas/add')?>" class="btn btn-primary"><i class="fas fa-database"></i> Tambah Data</a>
          </div>
      </div>

        <div class="section-body">
            <div class="card"><br>
                  <h4 align="center">Data Program Kursus</h4>
                  <div id="flash" data-flash="<?= session()->getFlashdata('success'); ?>"></div>
                  <div class="card-body table-responsive">
                    <table class="table table-striped table-md">
                        <tbody>
                          <tr>
                            <th >No</th>
                            <th >Program Kursus</th>
                            <th class="text-center">Opsi</th>
                          </tr>
                            <?php foreach ($kelas as $key => $value) :?>
                            <tr>
                                <td><?= $key +1?></td>
                                <td ><?= $value->kelas_kursus?></td>
                                <td class="text-center" style="width:15%">
                                  <a href="<?= site_url('kelas/edit/'.$value->id_kelas)?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                  <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                  </div>
                         
            </div>
        </div>
</section>
<?= $this->endSection()?>