<?php include('top.inc');?>
<body class="bg-light">
    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Join form</h2>
        <p class="lead">
          Please input your information to enjoy our service.
        </p>
      </div>

      <div class="container row">
        <div class="col-md">
          <h4 class="mb-3">User Information</h4>
          <form class="join" name="join" action="index.php?action=join" method="POST">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" placeholder="ID" value="" name="id" required>
                <div class="invalid-feedback">
                  Valid ID is required.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="pw">Password</label>
                <input type="password" class="form-control" id="pw" placeholder="******" value="" name="pw" required>
                <div class="invalid-feedback">
                  Valid Password is required.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
              <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="name" required>
                <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <hr class="mb-4">
            <div class="mb-4 text-center">
              <button class="btn btn-primary btn-lg" type="submit">Join</button>
              <button class="btn btn-secondary btn-lg" type="reset">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>

<?php include('bottom.inc');?>
