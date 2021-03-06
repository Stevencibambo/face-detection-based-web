<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/ico" href="images/access/icon_1.png" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Face registration</title>
</head>

    <body class="container-fuild">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><h1>Register new face</h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a href= "../" type="button" class="btn btn-secondary btn-lg">Home</a>&nbsp;&nbsp;
                    <a class="btn btn-primary btn-lg" href="../verify/" role='button'>Face verification</a>
                </form>
            </div>
        </nav>
        <div class="container">
            <div class="row" id="main-div">
                <div class="col-8">
                    <div class="row">
                        <video id="video" class="col-12" poster="images/access/play-image.png" style="border:1px solid black" width="640" height="480" autoplay muted></video>
                    </div>
                    <div class="row" id="option-btn">
                        <div class="col-12">
                            <button type="button" name="capture" class="btn btn-primary" id="capture">Start camera</button>
                        </div>
                    </div>
                    <div>
                        <div class="row" id="data-div">
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="lastName">Last name:</label>
                                    <input type="text" class="form-control" id="lastName" />
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="firstName">First name:</label>
                                    <input type="text" class="form-control" id="firstName" />
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group" style="padding-top:6px;text-align:center;">
                                    <br/>
                                    <label for="register"></label>
                                    <button type="button" name="register" id="register" class="btn btn-secondary">Save</button></br>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group" style="padding-top:6px;text-align:center;">
                                    <br/>
                                    <label for="cancel"></label>
                                    <button type="button" name="cancel" id="cancel" class="btn btn-danger">Cancel</button></br>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="row">
                        <div class="col-4 form-group">
                            <img src="images/default_user.png" class="face img-thumbnail" alt="crop face" width="120" height="100" id="face1" onclick="resetFace('face1');" />
                        </div>
                        <div class="col-4 form-group">
                            <img src="images/default_user.png" class="face img-thumbnail" alt="crop face" width="120" height="100" id="face2" onclick="resetFace('face2');" />
                        </div>
                        <div class="col-4 form-group">
                            <img src="images/default_user.png" class="face img-thumbnail" alt="crop face" width="120" height="100" id="face3" onclick="resetFace('face3');" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 form-group">
                            <img src="images/default_user.png" class="face img-thumbnail" alt="Face detected" width="120" height="100" id="face4" onclick="resetFace('face4');" />
                        </div>
                        <div class="col-4 form-group">
                            <img src="images/default_user.png" class="face img-thumbnail" alt="Face detected" width="120" height="100" id="face5" onclick="resetFace('face5');" />
                        </div>
                        <div class="col-4 form-group">
                            <img src="images/default_user.png" class="face img-thumbnail" alt="Face detected" width="120" height="100" id="face6" onclick="resetFace('face6');" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 form-group">
                            <img src="images/default_user.png" class="face img-thumbnail" alt="Face detected" width="120" height="100" id="face7" onclick="resetFace('face7');" />
                        </div>
                        <div class="col-4 form-group">
                            <img src="images/default_user.png" class="face img-thumbnail" alt="Face detected" width="120" height="100" id="face8" onclick="resetFace('face8');" />
                        </div>
                        <div class="col-4 form-group">
                            <img src="images/default_user.png" class="face img-thumbnail" alt="Face detected" width="120" height="100" id="face9" onclick="resetFace('face9'); "/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 form-group">
                            <img src="images/default_user.png" class="face img-thumbnail" alt="Face detected" width="120" height="100" id="face10" onclick="resetFace('face10');" />
                        </div>
                        <div class="col-4 form-group">
                            <img src="images/default_user.png" class="face img-thumbnail" alt="Face detected" width="120" height="100" id="face11" onclick="resetFace('face11');" />
                        </div>
                        <div class="col-4 form-group">
                            <img src="images/default_user.png" class="face img-thumbnail" alt="Face detected" width="120" height="100" id="face12" onclick="resetFace('face12');" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 form-group">
                            <img src="images/default_user.png" class="face img-thumbnail" alt="Face detected" width="120" height="100" id="face13" onclick="resetFace('face13');" />
                        </div>
                        <div class="col-4 form-group">
                            <img src="images/default_user.png" class="face img-thumbnail" alt="Face detected" width="120" height="100" id="face14" onclick="resetFace('face14');" />
                        </div>
                        <div class="col-4 form-group">
                            <img src="images/default_user.png" class="face img-thumbnail" alt="Face detected" width="120" height="100" id="face15" onclick="resetFace('face15');" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12" id="footer">
                    <span>all right reseved &copy; 2021</span>
                </div>
            </div>
        </div>
    </body>
    <script defer src="js/face_api.min.js"></script>
    <script defer src="js/script.js"></script>
</html>
