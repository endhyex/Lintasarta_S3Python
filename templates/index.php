<!DOCTYPE html>
<html>
    <head>
        <title>Lintasarta - Login</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="icon" href="https://www.lintasarta.net/wp-content/themes/lintasarta-theme/assets/img/xfavicon.png.pagespeed.ic.EF0N1Nw6py.png">
        
    </head>
    <body>
        <section class="row justify-content-center">
            <div id="frm">
            <!-- <form action="" method="POST"> -->
                <a href="https://www.lintasarta.net/en/">
                    <img class="mt-5 mb-5" src="{{ url_for('static',filename="lintasartalogo.png")}}" alt="" height="170" width="375">
                </a>
                    <div>
                    <h2 class="h3 mb-3 font-weight-normal">Please sign in</h2>
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" name="user" id="user" class="form-control mb-1" placeholder="Username" required="">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="pass" id="pass" class="form-control mb-3" placeholder="Password" required="">
                    
                    </div>
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me"> Remember me
                        </label>
                    </div>
                <a href="{{ url_for('home')}}">    
                <!-- <a href="home.php"> -->
                    <button class="btn btn-primary btn-block" type="submit" name="submit">Sign in</button>
                </a>
            <!-- </form> -->
            </div>
        </section>
        <span><?php echo $error; ?></span>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>