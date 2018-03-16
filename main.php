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

      <section>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="holder.js/300px500?theme=thumb&bg=55595c&fg=eceeef&text=Image1" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="holder.js/300px500?theme=thumb&bg=55595c&fg=eceeef&text=Image2" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="holder.js/300px500?theme=thumb&bg=55595c&fg=eceeef&text=Image3" alt="Thrid slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
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
        
        <nav class= aria-label="Page navigation example">
          <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
    </main>

<?php include('bottom.inc'); ?>