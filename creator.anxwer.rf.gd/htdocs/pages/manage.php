<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="stylesheet" href="../resources/css/styles.css" >

     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    <title>Manage Post</title>
  </head>
  <body>
  <div id="wrapper">

    <?php 
        include 'dbconfig.php';
                    
        if (isset($_POST['manage']))
        {
            $id = $_POST["id"];
        }

        $result=mysqli_query($connect,"SELECT * FROM articles where `articles`.`id` = $id");
        $data=mysqli_fetch_assoc($result);

        $title=$data['judul'];
        $content=$data['isi'];
        $author=$data['author'];

        
    ?>

    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="../" class="font-weight-bold">
                    Anxwer / articles
                </a>
            </li>
            <li class="onpage">
                <a href="#">Create New Post</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">

            <div class="row border-bottom shadow p-3 tops">
                <div class="col-8 ">

                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><i class="fa fa-ellipsis-v" aria-hidden="true"></i> MENU</a>

                </div>

                <div class="col-4 text-right">
                    <button class="btn btn-primary font-weight-bold text-white" name="update" form="article-update" id="update"> UPDATE !</button>
                </div>
            </div>

            <div class="row shadow mt-3 tops list-data" >
                <div class="col p-3">
                    <form method="POST" enctype="multipart/form-data" action="update.php" id="article-update">
                        <div class="form-row">
                            <div class="col-8">
                                <?php echo ('<input type="hidden" name="id" value="'.$data["id"].'">'); ?>
                            
                                <label for="form-judul">Judul Artikel</label>
                                <input type="text" class="form-control" id="form-judul" name="title" value="<?php echo $title ?>"> 
                            </div>
                            <div class="col">
                                <label for="form-author">Author</label>
                                <input type="text" class="form-control" id="form-author" name="author" value="<?php echo $author ?>">                          
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="form-content">Konten artikel</label>
                            <textarea class="form-control" id="form-content" name="content" style="height: 250px; resize: none;"><?php echo $content ?></textarea>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="file-image">Gambar Artikel</label>
                                <input type="file" class="form-control-file" id="file-image" name="image">  
                            </div>
                            <div class="col">
                                <label for="file-document">Dokumen Terkait</label>
                                <input type="file" class="form-control-file" id="file-document" name="document">                             
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    });

    </script>

   </body>
</html>