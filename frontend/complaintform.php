<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Complaints App - Upload</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/frontend/img/favicon.png">

        <!--CSS STYLESHEET-->
        <link rel="stylesheet" href="/frontend/css/style.css">
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous"> -->
        <!-- JQUERY LIBRARY -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" 
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- POPPER JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.2/umd/popper.min.js" 
        integrity="sha512-aDciVjp+txtxTJWsp8aRwttA0vR2sJMk/73ZT7ExuEHv7I5E6iyyobpFOlEFkq59mWW8ToYGuVZFnwhwIUisKA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- LATEST COMPILED JAVASCRIPT -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js" 
        integrity="sha512-UR25UO94eTnCVwjbXozyeVd6ZqpaAE9naiEUBK/A+QDbfSTQFhPGj5lOR6d8tsgbBk84Ggb5A3EkjsOgPRPcKA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
            <!-- Responsive navbar-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">ODPP COMPLAINTS APP <small class="text-muted">web app</small></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index4.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="complaintform.php">Submit Complaint</a></li>
                        <li class="nav-item"><a class="nav-link" href="faq.html">About Complaint Process</a></li>
                        <li class="nav-item"><a class="nav-link" href="feedback.php">Contact Us</a></li>
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

    <body class="bg-info" style="background-color:#0d6efd">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 bg-light rounded">
                    <h2 class="text-center pt-2">ODPP Complaint Form</h2>
                    <hr></hr>
                    <form action="#" method="post" id="upload-box" enctype="multipart/form-data" class="p-4">
                        <div class="form-group">
                            1) Download <a href="complaintform.pdf">complaint form by clicking here.</a><br>
                            2) Fill in the above form, then enter your name below and attach filled in form.<br>
                            3) After successful upload of form, you will get a response within 7 working days.<br>
                            4) Please use the <a href="index4.php">search feature </a> on the app to get latest update on your complaint.<br>
                        </p>
                            <label for="category">Enter Your Name</label>
                            <input type="text" name="category" class="form-control" placeholder="Enter full name" required>
    </div>
    <br>

    <div class="form-group">
        <label for="file">Select File To Upload:</label><small id="filehelp" class="form-text text-muted">
    maximum size allowed (3MB)
    </small><br>
        <input type="file" name="image" class="form-control border p-1" style="background:#fff;" required>
    </div>
    <small id="filehelp" class="form-text text-muted">
    please upload only filled in provided pdf form
    </small><br>

    <br>

    <div class="form-group">
        <button type="submit" id="upload" class="btn btn-primary w-100">Upload</button><br><br>
        <a href="index.html" class="btn btn-outline-primary w-100">Back to main page</a>
    </div>
    <br>

    <div class="form-group" id="message" role="alert" style="display:none;">
        <!-- <div class="alert alert-primary" id="message" role="alert" style="display:none;"> -->
    </div>
    </div>
    </form>
    </div>
    </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#upload-box").submit(function(e){
                e.preventDefault();
                $.ajax({
                    url:'action.php',
                    method:'POST',
                    data:new FormData(this),
                    contentType:false,
                    processData:false,
                    success:function(response){
                        $("#message").show();
                        $("#message").html(response);
                    }
                });
            });

        });

    </script>
    <!-- Bootstrap core JS-->

        <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        
    </body>
</html>