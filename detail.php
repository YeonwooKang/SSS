<?php include('top.inc'); ?>

    <main role="main">
    <div class="album py-5 bg-light">
        <div class="container">
          <div class="row py-5">
             <div class="col-md-6">
                  <div class="card mb-6 box-shadow">
                    <img class="card-img-top" data-src="holder.js/100px400?theme=thumb&bg=55595c&fg=eceeef&text=Image" alt="Card image cap">
                  </div>
              </div>
              <div class="col-md-6">
                 <h1 class="jumbotron-heading">Product</h1>
                 <p class="lead text-muted">Price: $</p>
                 <p class="lead text-muted">Color: </p>
                 <div class="py-3">
                 <h3>Size</h3>
                  <select class="form-control form-control-lg col-md-3">
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                  </select>
                  </div>
                  <table class="table table-sm py-3">
                    <thead>
                      <tr>
                        <th scope="col">Size</th>
                        <th scope="col">기장</th>
                        <th scope="col">어깨</th>
                        <th scope="col">가슴</th>
                        <th scope="col">암홀</th>
                        <th scope="col">소매</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">S</th>
                        <td>39</td>
                        <td>46.5</td>
                        <td>17</td>
                        <td>62</td>
                        <td>62</td>
                      </tr>
                      <tr>
                        <th scope="row">M</th>
                        <td>40</td>
                        <td>49.5</td>
                        <td>19</td>
                        <td>63</td>
                        <td>64</td>
                      </tr>
                      <tr>
                        <th scope="row">L</th>
                        <td>42</td>
                        <td>52.5</td>
                        <td>21</td>
                        <td>63</td>
                        <td>66</td>
                      </tr>
                    </tbody>
                </table>
                <div class="text-center py-5">
                  <button type="button" class="btn btn-primary">Buy now</button>
                  <button type="button" class="btn btn-secondary">Add to cart</button>
                </div>
              </div>
          </div>
          <div class="row">
          <h1>Detail Cuts</h1>
          </div>
        </div>
    </div>
    </main>

<?php include('bottom.inc'); ?>