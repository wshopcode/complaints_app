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

    <body class="bg-info" style="background-color:#0d6efd">
        <div class="container">
            <div class="row justify-content-center mt-5">
                <div class="col-md-6 bg-light rounded">
                    <h2 class="text-center pt-2">ODPP Complaint Form</h2>
                    <hr></hr>
                    <form action="#" method="post" id="upload-box" enctype="multipart/form-data" class="p-4">
                        <div class="form-group">
                        <p>Choose and download office complaint form to fill in from the list provided below:<br><br>
                            a) Form 1 for <a href="demoform.pdf">complaints being lodged at ODPP Head Office.</a><br>
                            b) Form 2 for <a href="demoform.pdf">complaints being lodged at ODPP Regional Office.</a><br>
                            c) Form 3 for <a href="demoform.pdf">complaints being lodged at ODPP Station.</a>
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
    please upload only filled in appropriate pdf form
    </small><br>

    <br>

    <div class="form-group">
        <button type="submit" id="upload" class="btn btn-primary w-100">Upload</button><br><br>
        <a href="coverpage.html" class="btn btn-outline-primary w-100">Back to main page</a>
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
        
    </body>
</html>