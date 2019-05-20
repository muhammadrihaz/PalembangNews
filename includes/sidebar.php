  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

  <div class="col-md-4">

    <!-- Search Widget -->
    <div class="card mb-4">
      <h5 class="card-header">Search</h5>
      <div class="card-body">
        <form name="search" action="search.php" method="post">
          <div class="input-group">

            <input type="text" name="searchtitle" class="form-control" placeholder="Cari Berita..." required>
            <span class="input-group-btn">
              <button class="btn btn-info" type="submit">Go!</button>
            </span>
        </form>
      </div>
    </div>
  </div>

  <!-- Categories Widget -->
  <div class="card my-4">
    <h5 class="card-header">Kategori</h5>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6">
          <ul class="list-unstyled mb-0">
            <li><i class="fas fa-thumbtack"></i>
              <a href="#">contoh kategori</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Side Widget -->
  <div class="card my-4">
    <h5 class="card-header">Recent News</h5>
    <div class="card-body">
      <ul class="list-unstyled mb-0">
        <li>
          <i class="far fa-newspaper"></i>
          <a href="#">Contoh Berita</a>
        </li>
      </ul>
    </div>
  </div>

  </div>