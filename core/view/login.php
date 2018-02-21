<html>

<?php include 'header.php'?>

<body style="background: url(<?php echo STYLE_DIR . 'img/login.jpg'?> )">


<?php include 'navbar.php'?>


        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel">Accedi..</h4>
                </div>

                <div class="modal-body" style="display: flex; align-items: center; justify-content: center;">

                    <a href="loginFB">
                        <button class="btn" style="margin: auto; background-color: #3b5998; border-color: #3b5998; color: white;"><i class="fa fa-facebook"></i>Facebook</button>
                    </a>

                    <br>

                </div>

                <form>

                <div class="modal-body" style="display: flex; align-items: center; justify-content: center;">

                   <p>oppure</p>

                </div>

                <div class="modal-body" style="display: flex; align-items: center; justify-content: center;">

                    <div class="row">

                        <div class="col-md-8 col-md-offset-2">
                            <div class="input-group">
                                <input type="email" placeholder="Email" class="form-control" required>
                                <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                            </div>
                        </div>

                    </div> <!-- end row -->

                </div>

                <div class="modal-body" style="display: flex; align-items: center; justify-content: center;">

                    <div class="row">

                        <div class="col-md-8 col-md-offset-2">
                            <div class="input-group">
                                <input type="password" placeholder="Password" class="form-control" required>
                                <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            </div>
                        </div>

                    </div> <!-- end row -->


                </div>

                    <div class="modal-body" style="display: flex; align-items: center; justify-content: center;">

                        <a>Password dimenticata?</a>

                    </div>


                    <div class="modal-footer">
                    <div class="left-side">
                        <button type="button" class="btn btn-info btn-simple btn-sm" data-dismiss="modal">Sei nuovo? Registrati</button>
                    </div>
                    <div class="divider"></div>
                    <div class="right-side">
                        <button type="button" class="btn btn-success btn-simple">Login</button>
                    </div>
                    </form>
                </div>
            </div>







    <?php include 'scripts.php'?>

</body>


</html>