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
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bucket
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{ url_for('bucketsample1')}}">bucket-sample1</a>
                    <a class="dropdown-item" href="{{ url_for('bucketsample2')}}">bucket-sample2</a>
                  </div>
                </li>
              </ul>
              <a href="logout.php">
                <button type="button" class="btn btn-danger">Sign out</button>
              </a>
            </div>
        </nav>

        <div style="text-align: center;" class="mt-5">
 
        <img type="image" alt="" src="images/lintasartalogo.png"/><br><br><br>
        <div style="text-align: center;" class="mt-5">
        <img type="image" alt="" width="280px" src="images/netapp-logo.png"/>
        </div>
        </div>

            <!-- <div class="modal fade" id="modalUpload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalUploadTitle">Upload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      
                  <form action="{{ url_for('uploadsample2')}}" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                        <input type="file" name="file" class="btn btn-light"/>
                        </span>
                    </div>

                    <hr align="center">

                    <div class="btn-group mx-auto" role="group" aria-label="Button group with nested dropdown">
                          
                          <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle mr-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              User
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                              <a class="dropdown-item" href="#">User_1</a>
                              <a class="dropdown-item" href="#">User_2</a>
                            </div>
                          </div>

                          <div class="btn-group" role="group">
                            <button id="btnGroupDrop2" type="button" class="btn btn-light dropdown-toggle mr-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Bucket
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                              <a class="dropdown-item" href="#">Bucket_1</a>
                              <a class="dropdown-item" href="#">Bucket_2</a>
                            </div>

                            
                          </div>
                        
                          <div class="btn-group" role="group">
                            <button id="btnGroupDrop3" type="button" class="btn btn-light dropdown-toggle mr-3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Region
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop3">
                              <a class="dropdown-item" href="#">ID_TBS</a>
                              <a class="dropdown-item" href="#">ID_TechnoPark</a>
                            </div>
                          </div>
                        </div>

                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="upload" value="upload" class="btn btn-primary">Upload</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="modal fade" id="modalLocalUpload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalUploadTitle">Local Upload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      
                  <form action="uploadlokal.php" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                        <input type="file" name="berkas" class="btn btn-light"/>
                        </span>
                    </div>

                    <hr align="center">
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="upload" value="upload" class="btn btn-primary">Upload</button>
                  </div>
                  </form>
                </div>
              </div>
            </div> -->

            <!-- <div class="modal fade" id="modalDownload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalDownloadTitle">File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      
                  <?php 

                  $folder = 'file/';

                  if(is_dir($folder)){
                  } else {
                      echo 'Bukan Folder';
                  }

                  if($open = opendir($folder)){

                  }

                  while (($folder = readdir($open)) !== FALSE){
                      if($folder !== '.' && $folder !== '..'){
                          echo '<strong>File     : </strong>'
                          .$folder. '<br>';
                      }
                  }

                  closedir($open);

                  ?>

                  <a href="file/" class="text-center" target="_blank"><br>OPEN FOLDER</a>

                  </div>
                  
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                  </form>
                </div>
              </div>
            </div> -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>