<html>

<?php include 'header.php'?>

<body style="background: url(<?php echo STYLE_DIR . 'img/registration.jpg'?> )">


<?php include CONTROL_DIR . 'navbarControl.php'?>


<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Registrati</h4>
        </div>

        <form method="post" action="regControl">

            <!-- Nome-->
            <div class="modal-body" style="display: flex; align-items: center; justify-content: center;">

                <div class="row">

                    <div class="col-md-8 col-md-offset-2">
                        <div class="input-group">
                            <input type="text" placeholder="Nome" class="form-control" name="Name" required>
                            <span class="input-group-addon"><i class="fas fa-user-circle"></i></span>
                        </div>
                    </div>

                </div> <!-- end row -->

            </div>

            <!-- Cognome-->
            <div class="modal-body" style="display: flex; align-items: center; justify-content: center;">

                <div class="row">

                    <div class="col-md-8 col-md-offset-2">
                        <div class="input-group">
                            <input type="text" placeholder="Cognome" class="form-control" name="Surname" required>
                            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                        </div>
                    </div>

                </div> <!-- end row -->


            </div>

            <!-- Email-->
            <div class="modal-body" style="display: flex; align-items: center; justify-content: center;">

                <div class="row">

                    <div class="col-md-8 col-md-offset-2">
                        <div class="input-group">
                            <input type="email" placeholder="Email" class="form-control" name="Email" required>
                            <span class="input-group-addon"><i class="fas fa-envelope-open"></i></span>
                        </div>
                    </div>

                </div> <!-- end row -->


            </div>

            <!-- Nascita-->
            <div class="modal-body" style="display: flex; align-items: center; justify-content: center;">

                <div class="row">

                    <div class="col-md-8 col-md-offset-2">
                        <div class="input-group">
                            <input type="date" placeholder="Nascita" class="form-control" name="Nascita" required>
                            <span class="input-group-addon"><i class="fas fa-birthday-cake"></i></span>
                        </div>
                    </div>

                </div> <!-- end row -->


            </div>

            <!-- Password-->
            <div class="modal-body" style="display: flex; align-items: center; justify-content: center;">

                <div class="row">

                    <div class="col-md-8 col-md-offset-2">
                        <div class="input-group">
                            <input type="password" placeholder="Password" class="form-control" name="Pass" required>
                            <span class="input-group-addon"><i class="fas fa-unlock-alt"></i></span>
                        </div>
                    </div>

                </div> <!-- end row -->


            </div>





            <div class="modal-footer">
                <div class="left-side">
                    <button type="reset" class="btn btn-danger btn-simple" data-dismiss="modal">Cancella</button>
                </div>
                <div class="divider"></div>
                <div class="right-side">
                    <button type="submit" class="btn btn-success btn-simple">Registrati</button>
                </div>
        </form>
    </div>
</div>







<?php include 'scripts.php'?>

</body>


</html>