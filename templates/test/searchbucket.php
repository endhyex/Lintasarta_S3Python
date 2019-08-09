<?php 
  // session_start(); 

  // if (!isset($_SESSION['username'])) {
  // $_SESSION['msg'] = "You must log in first";
  // header('location: login.php');
  // }
  // if (isset($_GET['logout'])) {
  // 	session_destroy();
  // 	unset($_SESSION['username']);
  // 	header("location: login.php");
  // }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Lintasarta - Home</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="https://www.lintasarta.net/wp-content/themes/lintasarta-theme/assets/img/xfavicon.png.pagespeed.ic.EF0N1Nw6py.png">

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <a class="navbar-brand" href="https://www.lintasarta.net/en/">Lintasarta</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">   |   </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Documentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url_for('viewbucket')}}">View Bucket</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#modalCreateBucket">Create Bucket</a>
                </li> 
                <!-- <li class="nav-item">
                    <a class="nav-link" href="{{ url_for('bucket')}}" >Bucket</a>
                </li>  -->
                               
                <!-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bucket
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ url_for('bucket')}}">bucket-sample1</a>
                  </div>
                </li> -->
              </ul>
              <a href="{{ url_for('index')}}">
                <button type="button" class="btn btn-danger">Sign out</button>
              </a>
            </div>
        </nav>

        <div class="container">

          <div class="row mt-5 justify-content-center">
            <div class="col-md-8">
              <h1 class="text-center">Search Bucket</h1>
              <form action="{{ url_for('searchbucket')}}" method="POST">
                <div class="input-group mb-3">
                  <input type="text" name="bucketName" class="form-control" placeholder="Bucket Name" aria-label="Bucket Name" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <button class="btn btn-secondary" type="submit" value='submit' id="search-button">Search</button>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="row mt-5 justify-content-center">
            <div class="col-md-8 text-center">
              <div class="card col-md-8" style="width: 350px; margin:0 auto;">
                <div class="card-body">
                  <h3 class="card-title">{{bucketName}}</h3>
                  <p class="card-text"> Definition.. </p>
                  <a href="#" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#modalOpen">Open</a>
                  <a href="#" class="btn btn-outline-danger btn-block" data-toggle="modal" data-target="#modalDelete">Delete</a>
                </div>
              </div>
            </div>
          </div>

        </div>

          <div class="modal fade" id="modalCreateBucket" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalCreateBucketTitle">Create Bucket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">                      
                  <form action="{{ url_for('createbucket')}}" method="POST">
                    <div class="input-group mb-3">
                      <input type="text" name="newBucket" class="form-control" placeholder="Enter new bucket name.." aria-label="Enter new bucket name.." aria-describedby="basic-addon2">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" value="upload" class="btn btn-primary">Create</button>
                  </div>
                  </form>
                </div>
              </div>
          </div>

          <div class="modal fade" id="modalOpen" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalOpenTitle">Open Bucket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="align:center">
                  <p>Please type in the name of the bucket to confirm.</p>
                  <form action="{{ url_for('bucket')}}" method="POST">
                    <div class="input-group mb-3">
                      <input type="text" name="bucketName" class="form-control" placeholder="Enter bucket name.." aria-label="Enter bucket name.." aria-describedby="basic-addon2">
                    </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="submit" value="submit" class="btn btn-primary">Open</button>
                    </div>
                  </form>
                </div>
              </div>
          </div>

          <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalDeleteTitle">Delete Bucket</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="align:center">
                  <p>Please type in the name of the bucket to confirm.</p>
                  <form action="{{ url_for('deletebucket')}}" method="POST">
                    <div class="input-group mb-3">
                      <input type="text" name="deleteBucketName" class="form-control" placeholder="Enter bucket name.." aria-label="Enter bucket name.." aria-describedby="basic-addon2">
                    </div>
                      
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                      <button type="submit" value="submit" class="btn btn-danger">Delete</button>
                    </div>
                  </form>
                </div>
              </div>
          </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>