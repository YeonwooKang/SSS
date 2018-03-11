<?php include('top.inc'); ?>

<?php // 샘플 데이터 (나중에 DB에서 연동해와야함)

$product = array(
  "Long cotton skirt",
  "Wool coat",
  "Cotton shorts",
  "Basic T-shirt",
  "Basic skinny jeans",
  "H skirt",
  "A skirt",
  "Medium length skirt",
  "Silky dress");

$price = array(
  "24.50",
  "21.30",
  "9.99",
  "10.25",
  "15.50",
  "24.50",
  "21.30",
  "9.99",
  "10.25");
?>
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">S.S.S.</h1>
          <p class="lead text-muted">S.S.S.(Smart Size Solution) is a solution for online shopping mall. It helps your customers to choose a correct size of clothes as it calculates from the size recommendation algorithm. </p>
          <p>
            <a href="#" class="btn btn-primary my-2"><<</a>
            <a href="#" class="btn btn-secondary my-2">>></a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
            <?php 
              for($i=0; $i<9; $i++) {
                echo(
                  '<div class="col-md-4">
                  <div class="card mb-4 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Image" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text">' . $product[$i] .'</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-outline-secondary" onClick="showDetail()">Detail</button>
                        </div>
                        <small class="text-muted"> $' . $price[$i] . '</small>
                      </div>
                    </div>
                  </div>
                </div>');
              }
            ?>

          </div>
        </div>
      </div>

    </main>

<?php include('bottom.inc'); ?>