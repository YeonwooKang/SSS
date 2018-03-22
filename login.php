<?php include('top.inc');?>
  <main role="main">
    <div class="text-center album py-5 bg-light">
      <div class="container col-7">
       <form class="form-signin" name="login" method="POST" action="index.php?action=login">
         <img class="mb-5" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
         <h1 class="h3 mb-3 font-weight-normal">Please log in</h1>
         <label for="inputId" class="sr-only">ID</label>
         <input type="text" name="id" id="inputId" class="form-control mb-1" placeholder="ID" required autofocus>
         <label for="inputPassword" class="sr-only">Password</label>
         <input type="password" name="pw" id="inputPassword" class="form-control mb-3" placeholder="Password" required>
         <button class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
         <button class="btn btn-lg btn-secondary btn-block" type="button" onClick="location.href='join.php'">Join</button>
        </form>
      </div>
    </div>
  </main>
<?php include('bottom.inc');?>