+<hr>
<section class="page-section potofolio" id="portofolio">
    <div class="container">
      <form action="<?= base_url('index.php/Auth/proses_login')?>" method="post">
        <div class="form-group">
          <label for="">username</label>
          <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">masukan username kamu</small>
        </div>
        
  
        <div class="form-group">
          <label for="">password</label>
          <input type="text" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <small id="helpId" class="text-muted">masukan password anda</small>
        </div>

        <button type="submit" class="btn btn-primary">login</button>
</form>
</div>
</section>
    
        