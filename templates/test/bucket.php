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
        <title>Lintasarta - Dashboard</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="https://www.lintasarta.net/wp-content/themes/lintasarta-theme/assets/img/xfavicon.png.pagespeed.ic.EF0N1Nw6py.png">
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
                    <a class="nav-link" href="home.php">Dashboard</a>
                </li>
                <!-- <!-- <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#modalDownload">File</a>
                </li>  -->
                <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#modalUpload">Upload</a>
                </li>
              </ul>
              <a href="logout.php">
                <button type="button" class="btn btn-danger">Sign out</button>
              </a>
            </div>
        </nav>

        <div style="justify-content-center" class="mt-5">
 
        <button type="button" class="btn btn-secondary btn-lg ml-5" data-toggle="modal" data-target="#modalBucketDhika">Bucket Dhika</button>

        <button type="button" class="btn btn-secondary btn-lg ml-5" data-toggle="modal" data-target="#modalBucketAldo">Bucket Aldo</button>

        <button type="button" class="btn btn-secondary btn-lg ml-5" data-toggle="modal" data-target="#modalFileLokal">File Lokal</button>
        
        </div>

        <div class="modal fade" id="modalUpload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalUploadTitle">Upload</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      
                  <form action="{{ url_for('uploaddhika')}}" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                        <input type="file" name="file" class="btn btn-light"/>
                        </span>
                    </div>

                    <hr align="center">

                    <div class="btn-group mx-auto" role="group" aria-label="Button group with nested dropdown">
                          
                          <!-- <div class="btn-group" role="group">
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
                          </div> -->
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

            <div class="modal fade" id="modalBucketDhika" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalBucketDhikaTitle">Bucket Dhika</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                  <h6 class="text-center">Click to open!</h6>

                  <!-- <a class="nav-link" href="https://bucket.cloud.lintasarta.co.id:8082/bucket-dhika/Lintasarta v2.png" target="_blank">Lintasarta V2.png</a>

                  <a class="nav-link" href="https://bucket.cloud.lintasarta.co.id:8082/bucket-dhika/Lintasarta.png" target="_blank"><br>Lintasarta.png</a>

                  <a class="nav-link" href="https://bucket.cloud.lintasarta.co.id:8082/bucket-dhika/Object_Storage_101.pdf" target="_blank"><br>Object_Storage_101.pdf</a>

                  <a class="nav-link" href="https://bucket.cloud.lintasarta.co.id:8082/bucket-dhika/StorageGRID-UAT-LA.docx" target="_blank"><br>StorageGRID-UAT-LA.docx</a>

                  <a class="nav-link" href="https://bucket.cloud.lintasarta.co.id:8082/bucket-dhika/Whitepaper-Understanding-Object-Storage-and-How-to-Use-It.pdf" target="_blank"><br>Whitepaper-Understanding-Object-Storage-and-How-to-Use-It.pdf</a> -->

                  <?php 
                  $file = 'file/';
                  if(is_dir($file)){
                  } else {
                      echo 'Bukan Folder';
                  }
                  if($open = opendir($file)){
                  }
                  while (($file = readdir($open)) !== FALSE){
                      if($file !== '.' && $file !== '..'){
                        echo '<a href="https://bucket.cloud.lintasarta.co.id:8082/bucket-dhika/'.$file.'" target="_blank">'.$file.'<br></a>';
                      }
                  }
                  closedir($open);
                  ?>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
          </div>

            <div class="modal fade" id="modalBucketAldo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalBucketAldoTitle">Bucket Aldo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                  <h6 class="text-center">Click to open!</h6>

                  <a class="nav-link" href="https://36.37.122.158:8082/bucket-aldo/Civil War II 000 (2016) GetComics.INFO.cbr" target="_blank">Civil War II 000 (2016) GetComics.INFO.cbr</a>

                  <a class="nav-link" href="https://36.37.122.158:8082/bucket-aldo/jdk-11.0.2_windows-x64_bin.exe" target="_blank">jdk-11.0.2_windows-x64_bin.exe</a>

                  <a class="nav-link" href="https://36.37.122.158:8082/bucket-aldo/modelsim-pe_student_edition.exe" target="_blank">modelsim-pe_student_edition.exe</a>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="modalFileLokal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalFileLokalTitle">File</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                  <h6 class="text-center">Click to open!</h6>
                      
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
                          echo '<a href="file/'.$folder.'" target="_blank">'.$folder.'<br></a>';
                      }
                  }

                  closedir($open);

                  ?>

                  <hr>
                  <a href="file/" class="" target="_blank">OPEN FOLDER</a>

                  </div>
                  
                  <div class="modal-footer">
                    <!-- <button type="button" class="text-align: center;" data-dismiss="modal">Close</button> -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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