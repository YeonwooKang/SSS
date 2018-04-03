<?php include('top.inc'); ?>

<?php 

// ProductList
$productList = $this->tList;

// the length of productList
$cnt = $productList->getLength();

?>
   <main role="main">

      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row">
          	<div class="col-md-6">
          		<h2>Top</h2>
          	</div>
          </div>
          <div class="row">
            <?php 
              for($i=0; $i< $cnt; $i++) {

                $p = $productList->get($i);

                echo(
                  '<div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                    <form name="product" method="POST" action="index.php?action=detail">
                      <div class="product-image-container">
                      <input type="image" name="submit" class="card-img-top" src="img/'. $p->getId() .'.png">
                      <div class="overlay">
                        <div class="text">' . $p->getName() . '</div>
                      </div>
                      </div>
                      <div class="product-card-body">
                        <p class="card-text">' . $p->getName() .'<small class="text-muted float-right"> ₩' . $p->getPrice() . '</small></p>

                        <div class="d-flex justify-content-between align-items-center">
                          <div class="btn-group">
                            <input type="hidden" name="pname" value="' . $p->getName() . '" >
                            <input type="hidden" name="price" value="' . $p->getPrice() . '" >
                            <input type="hidden" name="pid" value="' . $p->getId() . '" >
                          </div>
                      </div>
                      </form>
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