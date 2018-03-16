<?php include('top.inc');?>
<body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>My Page</h2>
        <p class="lead"></p>
      </div>


      <div class="container row">
        <div class="col-md">
          <h4 class="mb-3">User Information</h4>
          <form class="mypage" novalidate>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">ID</label>
                <input type="text" class="form-control" id="firstName" placeholder="ID" value="" required>
                <div class="invalid-feedback">
                  Valid ID is required.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Password</label>
                <input type="text" class="form-control" id="firstName" placeholder="******" value="" required>
                <div class="invalid-feedback">
                  Valid Password is required.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
              <label for="username">User Name</label>
                <input type="text" class="form-control" id="username" placeholder="Username" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

             <hr class="mb-4">
             <h4 class="mb-3">Size</h4>

             <div class="row">
              <div class="col-md-4 mb-3">
                <label for="toplength">Top Length</label>
                <input type="text" class="form-control" id="toplength" placeholder="" value="" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="shoulder">Shoulder</label>
                <input type="text" class="form-control" id="shoulder" placeholder="" value="" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
              <label for="chest">Chest</label>
                <input type="text" class="form-control" id="chest" placeholder="" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="armhole">Armhole</label>
                <input type="text" class="form-control" id="armhole" placeholder="" value="" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="arm">Arm</label>
                <input type="text" class="form-control" id="arm" placeholder="" value="" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
              <label for="bottomlength">Bottom Length</label>
                <input type="text" class="form-control" id="bottomlength" placeholder="" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="waist">Waist</label>
                <input type="text" class="form-control" id="waist" placeholder="" value="" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="hip">Hip</label>
                <input type="text" class="form-control" id="hip" placeholder="" value="" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
              <label for="thigh">Thigh</label>
                <input type="text" class="form-control" id="thigh" placeholder="" required>
              </div>
            </div>            

            <div class="row">
              <div class="col-md-4 mb-3">
              <label for="crotch">Crotch</label>
                <input type="text" class="form-control" id="crotch" placeholder="" required>
              </div>
            </div>        


            <hr class="mb-4">
            <div class="mb-4 text-center">
              <button class="btn btn-primary btn-lg" type="submit">Modify</button>
            </div>
          </form>
        </div>
      </div>
    </div>

<?php include('bottom.inc');?>