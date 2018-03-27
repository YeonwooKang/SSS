<?php include('top.inc');?>
  <main role="main">
    <div class="text-center album py-5 bg-light">
      <div class="container col-7">
       <form class="form-signin" name="login" method="POST" action="index.php?action=login">
         <img class="mb-5" src="img/logo-big.png" alt="" width="25%" height="25%">
         <h2>LOG IN</h2>
         <p class="lead">
          If you don't have your own account, click <em>Join</em> button at the bottom.
        </p>
         <label for="inputId" class="sr-only">ID</label>
         <input type="text" name="id" id="inputId" class="form-control mb-1" placeholder="ID" required autofocus>
         <label for="inputPassword" class="sr-only">Password</label>
         <input type="password" name="pw" id="inputPassword" class="form-control mb-3" placeholder="Password" required>
         <button class="btn btn-lg btn-primary btn-block" type="submit">LOG IN</button>
         <button class="btn btn-lg btn-secondary btn-block" type="button" onClick="location.href='join.php'">JOIN</button>
        </form>
      </div>
    </div>
  </main>
<?php include('bottom.inc');?>