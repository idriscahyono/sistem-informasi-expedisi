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
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
                <?php echo anchor(site_url('karyawan/create'),'Create', 'class="btn btn-success"'); ?>
            </div>
            <div class="col-md-4 text-center">
                <div style="margin-top: 8px" id="message">
                    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
                </div>
            </div>
            <div class="col-md-1 text-right">
            </div>
     <!--        <div class="col-md-3 text-right">
         <form action="<?php echo site_url('karyawan/index'); ?>" class="form-inline" method="get">
             <div class="input-group">
                 <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                 <span class="input-group-btn">
                     <?php 
                         if ($q <> '')
                         {
                             ?>
                             <a href="<?php echo site_url('karyawan'); ?>" class="btn btn-default">Reset</a>
                             <?php
                         }
                     ?>
                   <button class="btn btn-warning" type="submit">Search</button>
                 </span>
             </div>
         </form>
     </div> -->
        </div>
        <table class="table table-bordered" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>No Hp</th>
        <th>Email</th>
        <th>Username</th>
        <th>Password</th>
        <th>Action</th>
            </tr><?php
            foreach ($karyawan_data as $karyawan)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $karyawan->Nama ?></td>
            <td><?php echo $karyawan->JenisKelamin ?></td>
            <td><?php echo $karyawan->Alamat ?></td>
            <td><?php echo $karyawan->NoHp ?></td>
            <td><?php echo $karyawan->Email ?></td>
            <td><?php echo $karyawan->Username ?></td>
            <td><?php echo $karyawan->Password ?></td>
            <td style="text-align:center" width="200px">
                <?php 
                echo anchor(site_url('karyawan/read/'.$karyawan->ID),'Read'); 
                echo ' | '; 
                echo anchor(site_url('karyawan/update/'.$karyawan->ID),'Update'); 
                echo ' | '; 
                echo anchor(site_url('karyawan/delete/'.$karyawan->ID),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?>
            </td>
        </tr>
                <?php
            }
            ?>
        </table>
<!--         <div class="row">
    <div class="col-md-6">
        <a href="#" class="btn btn-info">Total Record : <?php echo $total_rows ?></a>
    </div>
    <div class="col-md-6 text-right">
        <?php echo $pagination ?>
    </div>
</div> -->
    </div>
  </div>
</div>
<!--main content end-->
<?php $this->load->view('template/footer'); ?>