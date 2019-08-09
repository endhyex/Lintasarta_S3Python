<!DOCTYPE html>
<html>
    <head>
        <title>Lintasarta - bucket-sample2</title>
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
                    <a class="nav-link">   |   </a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link">bucket-sample2</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#modalFile">File</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#modalDownload">Download</a>
                    </li>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#modalUpload">Upload</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#" data-toggle="modal" data-target="#modalDelete">Delete</a>
                    </li>
              </ul>
              <a href="{{ url_for('index')}}">
                <button type="button" class="btn btn-light">Home</button>
              </a>
            </div>
        </nav>

        <div style="text-align: center;" class="mt-5">
 
        <img type="image" alt="" src="{{ url_for('static',filename="lintasartalogo.png")}}"/><br><br><br>
        <div style="text-align: center;" class="mt-5">
        <img type="image" alt="" width="280px" src="{{ url_for('static',filename="netapp-logo.png")}}"/>
        </div>
        </div>

            <div class="modal fade" id="modalFile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalFileTitle">bucket-sample2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="input-group mb-3">
                      <input type="text" class="form-control" placeholder="File name" aria-label="File name" aria-describedby="basic-addon2">
                      <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button">Download</button>
                        <button class="btn btn-outline-secondary" type="button">Delete</button>
                      </div>
                    </div>
                  </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
              </div>
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
                  <form action="{{ url_for('uploadsample2')}}" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                        <input type="file" name="file" class="btn btn-light"/>
                        </span>
                    </div>
                    <!-- <div class="input-group mb-3">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile02">
                        <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                      </div>
                    </div> -->
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="upload" value="upload" class="btn btn-primary">Upload</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="modal fade" id="modalDownload" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalDownloadTitle">Download</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="align:center">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="File name" aria-label="File name" aria-describedby="basic-addon2">
                    <!-- <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button">Download</button>
                      <button class="btn btn-outline-secondary" type="button">Delete</button>
                    </div> -->
                  </div>
                  <form action="{{ url_for('deletesample2')}}" method="post" enctype="multipart/form-data">
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="delete" value="delete" class="btn btn-success">Download</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalDeleteTitle">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style="align:center">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="File name" aria-label="File name" aria-describedby="basic-addon2">
                    <!-- <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button">Download</button>
                      <button class="btn btn-outline-secondary" type="button">Delete</button>
                    </div> -->
                  </div>
                  <form action="{{ url_for('deletesample2')}}" method="post" enctype="multipart/form-data">
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="delete" value="delete" class="btn btn-danger">Delete</button>
                  </div>
                  </form>
                </div>
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
                      
                  <form action="{{ url_for('uploadlokalsample2')}}" method="post" enctype="multipart/form-data">
                    <div class="input-group">
                      <input type="file" name="berkas" class="btn btn-light"/>
                      </span>
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

            <div class="modal fade" id="modalFile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalFileTitle">bucket-sample2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                  <h6 class="text-center">Click to open!</h6>

                  <?php 
                  $command = escapeshellcmd('/mnt/c/xampp/htdocs/Lintasarta_S3Python/python/listbucketsample2.py');
                  $output = shell_exec($command);
                  echo $output;
                  ?>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
              </div>
              </div>
            </div>

            <div class="modal fade" id="modalLocalFile" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalFileTitle">Local - Sample2</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                    <?php 
                    $file = 'sample2/';
                    if(is_dir($file)){
                    } else {
                        echo 'Bukan Folder';
                    }
                    if($open = opendir($file)){
                    }
                    while (($file = readdir($open)) !== FALSE){
                        if($file !== '.' && $file !== '..'){
                          echo '<a href="https://bucket.cloud.lintasarta.co.id:8082/bucket-sample2/'.$file.'" target="_blank">'.$file.'<br></a>';
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
            </div> -->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>