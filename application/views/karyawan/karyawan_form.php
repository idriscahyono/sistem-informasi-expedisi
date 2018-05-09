<?php $this->load->view('template/header'); ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
     Karyawan
    </div>
    <br>
    <div>
        <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('Nama') ?></label>
            <input type="text" class="form-control" name="Nama" id="Nama" placeholder="Nama" value="<?php echo $Nama; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Jenis Kelamin <?php echo form_error('JenisKelamin') ?></label>
            <input type="text" class="form-control" name="JenisKelamin" id="JenisKelamin" placeholder="JenisKelamin" value="<?php echo $JenisKelamin; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Alamat <?php echo form_error('Alamat') ?></label>
            <input type="text" class="form-control" name="Alamat" id="Alamat" placeholder="Alamat" value="<?php echo $Alamat; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">No Hp <?php echo form_error('NoHp') ?></label>
            <input type="text" class="form-control" name="NoHp" id="NoHp" placeholder="NoHp" value="<?php echo $NoHp; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Email <?php echo form_error('Email') ?></label>
            <input type="text" class="form-control" name="Email" id="Email" placeholder="Email" value="<?php echo $Email; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Username <?php echo form_error('Username') ?></label>
            <input type="text" class="form-control" name="Username" id="Username" placeholder="Username" value="<?php echo $Username; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Password <?php echo form_error('Password') ?></label>
            <input type="text" class="form-control" name="Password" id="Password" placeholder="Password" value="<?php echo $Password; ?>" />
        </div>
        <input type="hidden" name="ID" value="<?php echo $ID; ?>" /> 
        <button type="submit" class="btn btn-success"><?php echo $button ?></button> 
        <a href="<?php echo site_url('karyawan') ?>" class="btn btn-danger">Cancel</a>
    </form>
    </div>
  </div>
</div>
<!--main content end-->
<?php $this->load->view('template/footer'); ?>