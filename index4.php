<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <!--this code below gets rid of all the error that were being generated on loading this php code-->
        <?php ini_set('display_errors', 0);
        ini_set('display_startup_errors', 0);
        error_reporting(-1);
        ?>

    <link href="/frontend/css/bootstrap.min.css" rel="stylesheet" media="screen" type="text/css">
    <link href="/frontend/style.css" rel="stylesheet" media="screen" type="text/css">
    <link rel="stylesheet" href="/frontend/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/bootstrap-grid.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/bootstrap-reboot.css" type="text/css">
    <link rel="stylesheet" href="/frontend/css/bootstrap-reboot.min.css" type="text/css">
    

        <title>Complaint Status System - App</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/frontend/img/favicon.png">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="coverpage.html">ODPP COMPLAINT STATUS <small class="text-muted">web app</small></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="coverpage.html">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">File Update Search</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.html">About Complaint Process</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Website</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container">
            <div class="text-center mt-5">
                <img src="/frontend/img/smallogo.png" alt="Logo">
                <h2>Please search below using the ODPP number provided.</h2><br>
                <!--<p class="lead">Please search below using the ODPP number provided.</p><br><br>-->
            </div>
        

        <form method="post" action="index4.php">
          <div class="form-group">
            <label for="dppfilenumber">Please type in the ODPP file number below and click submit:</label>
            <input type="text" name="DPP" class="form-control" id="dppfilenumber" placeholder="DPP file number">
            <small id="searchHelp" class="form-text text-muted">*search by DPP file number e.g <mark>CTH-1164-2016</mark></small>
          </div>

          <button type="submit" name="dppfilenumber" class="btn btn-primary btn-block" value="submit">Click here to submit</button>
        </form>
        <br>
      
              <!-- Button trigger modal -->
        <button type="button" class="btn btn-secondary btn-block" data-toggle="modal" data-target="#exampleModalCenter">
          Click here to contact us
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">How to reach us-</h5><small id="searchHelp" class="form-text text-muted"> *if you submitted a complaint but see no results</small>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                <div class="modal-body">
                  <h5>Visit our Facebook page</h5>
                  <p>Click<a href="#" class="Facebook" title="Tooltip"> here</a></p>
                  <hr>
                  <h5>Visit our Twitter account</h5>
                  <p>Click<a href="#" class="Twitter" title="Tooltip"> here</a></p>
                  </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </div>



      <div class="container">
        <div class="table-responsive table-hover">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">DPP</th>
                  <th scope="col">CRB</th>
                  <th scope="col">ACCUSED</th>
                  <th scope="col">OFFENCE</th>
                  <th scope="col">STATUS</th>
                  <th scope="col">CODE</th>
                </tr>
              </thead>
                
                <tbody>
                <?php include 'retrieve-data.php'; ?>

                <?php $result=mysqli_query($connection, $sql); ?>

                <?php if (mysqli_num_rows($result)>0) {

                    while($row=mysqli_fetch_array($result)) {


                  echo "<tr>
                  <td>".$row[1]."</td>
                  <td>".$row[2]."</td>
                  <td>".$row[3]."</td>
                  <td>".$row[4]."</td>
                  <td>".$row[5]."</td>
                  <td>".$row[6]."</td>
                  </tr>";

                  echo "<br>";


                    }
                }else{
                    echo "<tr>
                   <td width>No Data Found</td>
                    </tr>";
                  }

                ?>
                
                

                <?php mysqli_close($connection); ?>

              </tbody>

            </table>
          </div>
      </div>



        <!-- Bootstrap core JS-->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Core theme JS-->
        <script src="/frontend/js/scripts.js"></script>
    </body>
</html>
