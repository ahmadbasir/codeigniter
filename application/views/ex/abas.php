<div class="container">
<div class="row">
  <div class="col l12 s12">
    <a href="<?php base_url();?>">
      <div class="card blue hoverable" >
        <div class="card-content">
          <span class="card-title white-text">Daftar Mahasiswa</span>
        </div>
      </div>
    </a>
  </div>
  <?php foreach ($MHS as $mhs) { ?>
  <div class="col l4 m4 s12">
    <div class="card hoverable">
      <div class="card-content">
        <span class="card-title" style="text-transform: uppercase;">
          <?php echo $mhs['nama']; ?>
        </span>
      </div>
      <div class="card-action">
        <a href="<?php echo base_url();?>abas/#">
          <b style="text-transform: uppercase;"><?php echo $mhs['nim']; ?></b>
        </a>
        <a style="text-transform: uppercase;" href="<?php echo base_url();?>abas/#">
          <?php echo $mhs['kelompok']; ?>
        </a>
        <a href="<?php base_url();?>abas/update/<?php echo $mhs['id'];?>">edit</a>
      </div>
    </div>
  </div>
  <?php } ?>
</div>
<div class="row">
  <div class="col s12 m12 l6">
    <?php echo validation_errors(); ?>
    <?php echo form_open('abas'); ?>
    <div class="card hoverable">
      <div class="card-content">
        <div class="card-title input-field">
          <input style="text-transform: uppercase;" type="text" name="nama" required class="active validate" value="" id="nama">
          <label for="nama">Nama</label>
        </div>
        <div class="card-title input-field">
          <input style="text-transform: uppercase;" type="text" name="nim" id="nim" required value="">
          <label for="nim">Nim</label>
        </div>
        <div style="text-transform: uppercase;" class="card-title input-field">
          <input type="text" name="kelompok" required id="kelompok" value="">
          <label for="kelompok">Kelompok</label>
        </div>
      </div>
      <div class="card-action">
        <input type="submit" class="btn" name="submit" value="Daftar">
        <a href="#" class="right red-text"><b>INPUT MAHASISWA</b></a>
      </div>
    </div>
    <?php echo form_close(); ?>
  </div>
</div>
<div class="row">
  <div class="col l4 m6 s12">
    <ul class="collapsible" data-collapsible="accordion">
      <li>
        <div class="collapsible-header">
          <span class="new blue badge">
            <?php echo $jumlah; ?>
          </span>
          <i class="material-icons">person_pin</i>Jumlah Mahasiswa
        </div>
        <div class="collapsible-body white">
          <?php foreach ($MHS as $mhs) { ?>
            <a href="#" class="teal-text">
              <?php echo $mhs['nama'] ?><br>
            </a>
          <?php } ?>
        </div>
      </li>
      <li>
        <div class="collapsible-header"><span class="badge">1</span><i class="material-icons">place</i>Second</div>
        <div class="collapsible-body white"><p>Lorem ipsum dolor sit amet.</p></div>
      </li>
    </ul>
  </div>
</div>
</div>
