<script src="<?php echo STYLE_DIR . 'assets/js/jquery-1.10.2.js' ?>" type="text/javascript"></script>
<script src="<?php echo STYLE_DIR . 'assets/js/jquery-ui-1.10.4.custom.min.js'?>" type="text/javascript"></script>

<script src="<?php echo STYLE_DIR . 'bootstrap3/js/bootstrap.js" type="text/javascript'?>"></script>

<!--  Plugins -->
<script src="<?php echo STYLE_DIR . 'assets/js/ct-paper-checkbox.js'?>"></script>
<script src="<?php echo STYLE_DIR . 'assets/js/ct-paper-radio.js'?>"></script>
<script src="<?php echo STYLE_DIR . 'assets/js/bootstrap-select.js'?>"></script>
<script src="<?php echo STYLE_DIR . 'assets/js/bootstrap-datepicker.js'?>"></script>

<script src="<?php echo STYLE_DIR . 'assets/js/ct-paper.js'?>"></script>


<!-- Toastr -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    <?php if(isset($_SESSION["toast-type"]) && isset($_SESSION["toast-message"])) {?>

    $(document).ready(function () {
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        toastr["<?php echo $_SESSION["toast-type"];?>"]("<?php echo $_SESSION["toast-message"];?>")

    });




    <?php
    unset($_SESSION["toast-type"]);
    unset($_SESSION["toast-message"]);
    }?>
</script>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>