<?php include('top.inc');?>
<body class="bg-light">
  <main role="main">
    <div class="container">
      <div class="py-5 text-center">
         <img class="mb-5 form-logo" src="assets/form_logo.png">
         <h2>My page</h2>
         <p class="lead text-muted"><small>
          You can edit your basic and size information.
        </small></p>
      </div>

      <div class="container row">
        <div class="col-md">
          <h4 class="mb-3">Information</h4>
          <form name="mypage" class="mypage" method="POST" action="index.php?action=editinfo">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="id">ID</label>
                <input type="text" class="form-control" id="id" placeholder="ID" value="<?php print $this->u->getId();?>" name="id" readonly>
                <div class="invalid-feedback">
                  Valid ID is required.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="pw">Password</label>
                <input type="password" class="form-control" id="pw" placeholder="******" value="<?php print $this->u->getPw();?>" name="pw" required>
                <div class="invalid-feedback">
                  Valid Password is required.
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-3">
              <label for="name">Name</label>
                <input type="text" class="form-control" id="name" placeholder="Username" name="name" value="<?php print $this->u->getName();?>" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your name is required.
                </div>
              </div>
            </div>

             <hr class="mb-4">
             <h4 class="mb-3">Size</h4>

             <div class="row">
              <div class="col-md-4 mb-3">
                <label for="toplength">Top Length</label>
                <input type="text" class="form-control" id="toplength" placeholder="" name="toplength" value="<?php print $this->u->getTopLength();?>" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="shoulder">Shoulder</label>
                <input type="text" class="form-control" id="shoulder" placeholder="" name="shoulder" value="<?php print $this->u->getShoulder();?>" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
              <label for="chest">Chest</label>
                <input type="text" class="form-control" id="chest" placeholder="" name="chest" value="<?php print $this->u->getChest();?>" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="armhole">Armhole</label>
                <input type="text" class="form-control" id="armhole" placeholder="" name="armhole" value="<?php print $this->u->getArmhole();?>" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="arm">Arm</label>
                <input type="text" class="form-control" id="arm" placeholder="" name="arm" value="<?php print $this->u->getArm();?>" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
              <label for="bottomlength">Bottom Length</label>
                <input type="text" class="form-control" id="bottomlength" placeholder="" name="bottomlength" value="<?php print $this->u->getBottomLength();?>"required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="waist">Waist</label>
                <input type="text" class="form-control" id="waist" placeholder="" name="waist" value="<?php print $this->u->getWaist();?>" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
                <label for="hip">Hip</label>
                <input type="text" class="form-control" id="hip" placeholder="" name="hip" value="<?php print $this->u->getHip();?>" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4 mb-3">
              <label for="thigh">Thigh</label>
                <input type="text" class="form-control" id="thigh" placeholder="" name="thigh" value="<?php print $this->u->getThigh();?>"required>
              </div>
            </div>            

            <div class="row">
              <div class="col-md-4 mb-3">
              <label for="crotch">Crotch</label>
                <input type="text" class="form-control" id="crotch" placeholder="" name="crotch" value="<?php print $this->u->getCrotch();?>"required>
              </div>
            </div>     

            <div class="row">
              <div class="col-md-4 mb-3">
              <label for="height">Height</label>
                <input type="text" class="form-control" id="height" placeholder="" name="height" value="<?php print $this->u->getHeight();?>"required>
              </div>
            </div>    
            <hr class="mb-4">
            <h4 class="mb-3">Order of Priority</h4>
            <p calss="lead text-muted"><small>Please select the parts of size that are more important for you.</small></p>
              <div class="col-md-4 mb-3">
              <label for="height"><strong>Top</strong></label><br>
                	<input type="radio" name="top_priority" value="p_top_length" id="p_top_length"
                	<?php if($this->u->getPriorityTopLength() == true) print 'checked'?> required><label for="p_top_length"> &nbsp;&nbsp;Length</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	<input type="radio" name="top_priority" value="p_arm" id="p_arm"
                	<?php if($this->u->getPriorityArm() == true) print 'checked'?>><label for="p_arm"> &nbsp;&nbsp;Arm</label>
              </div>
              <div class="col-md-4 mb-3">
              <label for="height"><strong>Bottom</strong></label><br>
                	<input type="radio" name="bottom_priority" value="p_bottom_length" id="p_bottom_length"
                	<?php if($this->u->getPriorityBottomLength() == true) print 'checked'?> required><label for="p_bottom_length"> &nbsp;&nbsp;Length</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                	<input type="radio" name="bottom_priority" value="p_crotch" id="p_crotch"
                	<?php if($this->u->getPriorityCrotch() == true) print 'checked'?>><label for="p_crotch"> &nbsp;&nbsp;Crotch</label>
              </div>
            <div class="mb-4 text-center btn-area">
              <button class="btn btn-sub btn-lg" type="submit">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
<?php include('bottom.inc');?>