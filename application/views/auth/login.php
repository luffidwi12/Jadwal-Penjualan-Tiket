<div class="container">
<form>
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
  <div class="text-center">
    <a class="small" href="">Forgot Password?</a>
</div>

<div class="text-center">
    <a class="small" href="<?= base_url('auth/registration'); ?>">Create an Acount</a>
</div>
</form>
    
</div>
