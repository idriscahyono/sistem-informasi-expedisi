<?php $this->load->view('template/headerHome'); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php echo form_open('user/login'); ?>
<div class="container">
    <div class="row">
        <div class="col text-center" >
            <h1 class="text-center">Login Page</h1>
            <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-danger btn-block">Login</button>
        </div>
    </div>
</div>
    
<?php echo form_close(); ?>