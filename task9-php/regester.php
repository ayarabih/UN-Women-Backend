<?php
include('./dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regester form</title>
    <link rel="stylesheet" href="./bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
                <form action="welcome.php" method="post">
                    <div class="row mb-3">
                        <label for="user_name">user_name</label>
                        <input type="text" id="user_name" name="username">
                    </div>
                    <div class="row mb-3">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="row mb-3">
                        <label for="pw">password</label>
                        <input type="password" id="pw" name="pw"><br><br>
                    </div> 
                    <div class="row mb-3">
                        <div class="form-check">
                            <input class="form-check-input" name="gender" type="checkbox" value="" id="fiexcheckchecked">
                            <label class="form-check-label" for="fiexcheckchecked">
                                Male
                            </label>
                    </div>
                    <div class="row mb-3">
                        <div class="form-check">
                            <input class="form-check-input" name="gender" type="checkbox" value="" id="fiexcheckchecked">
                            <label class="form-check-label" for="fiexcheckchecked">
                                Female
                            </label>
                        </div>
                    </div>
                    <div class="row mb-3">
                    <label for="courses" class="form-label">choose your courses</label>
                    <select class="form-select from-select-g mb-3" aria-label="Large select">
                         <option  value="html">HTML5</option>
                         <option  value="html">PHP</option>
                         <option  value="html">MYSQL</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group mb-3"></span>
                    <textarea class="form-control"></textarea>
                </div>
                <div class="row mb-3">
                    <label for="profile" class="form-label">profile picture</label>
                    <input type="file" id="profile">
                </div>
                <input type="submit" name="send" value="sumbit" class="btn btn-primart">
                <input type="reset" value="reset data" class="btn btn-primary">
            </form>
            </div>

</body>
</html>



