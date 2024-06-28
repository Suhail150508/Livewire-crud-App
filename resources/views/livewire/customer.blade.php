
<div class="container text-center">


    <form class="container" wire:submit="test" style="margin-left:15rem">
        <div class="form-group row my-3">
          <label for="inputEmail3" class="col-sm-1 col-form-label">Name</label>
          <div class="col-sm-5">
            <input type="text" wire:model="name" class="form-control" id="inputEmail3" placeholder="Name">
          </div>
        </div>
        <div class="form-group row my-3">
          <label for="inputEmail3" class="col-sm-1 col-form-label">Email</label>
          <div class="col-sm-5">
            <input type="email" wire:model="email" class="form-control" id="inputEmail3" placeholder="Email">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-1 col-form-label">Password</label>
          <div class="col-sm-5">
            <input type="password" wire:model="password" class="form-control" id="inputPassword3" placeholder="Password">
          </div>
        </div>
        <div class="form-group row my-3">
          <div class="col-sm-5 text-center my-5">
            <button type="submit" class="btn btn-primary">Sign in</button>
          </div>
        </div>
      </form>


</div>

