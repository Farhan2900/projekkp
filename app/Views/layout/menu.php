<?php if(session()->get('akses') == 'Admin') :?>
<li class="menu-header">Navbar Menu</li>
<li><a class="nav-link" href="<?= site_url()?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
<li class="nav-item dropdown">
    <a href="#" class="nav-link has-dropdown"><i class="fas fa-users-cog"></i><span>Administrasi</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= site_url('admin/instruktur')?>">Instruktur</a></li>
        <li><a class="nav-link" href="<?= site_url('admin/siswa')?>">Siswa</a></li>
        <li><a class="nav-link" href="<?= site_url('admin/Programkursus')?>">Program Kursus</a></li>
        <li><a class="nav-link" href="<?= site_url('admin/kelas')?>">Kelas Kursus</a></li>
    </ul>
<li><a class="nav-link" href="<?= site_url('siswa')?>"><i class="fas fa-users"></i></i> <span>Peserta
            Didik</span></a></li>
<li><a class="nav-link" href="<?= site_url('alumni')?>"> <i class="fas fa-graduation-cap"></i> <span>Data
            Alumni</span></a></li>
<?php endif;?>

<?php if(session()->get('akses') =='Siswa') :?>
<li class="menu-header">Navbar Menu</li>
<li><a class="nav-link" href="<?= site_url()?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>

<?php endif;?>