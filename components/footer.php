
    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/index.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
        if (isset($_SESSION['message'])) {
    ?>
        <script>
            swal({
                title: "<?php echo $_SESSION['message_title']; ?>",
                text: "<?php echo $_SESSION['message']; ?>",
                icon: "error",
                buttons: false,
                timer: 5000
            }).then(function() {
                window.location = "./fund-wallet";
            });
        </script>
    <?php
        unset($_SESSION['message']);
    }
    ?>

    <?php
        if (isset($_SESSION['success_message'])) {
            $id = $_GET['id'];
    ?>
        <script>
            swal({
                title: "<?php echo $_SESSION['success_message_title']; ?>",
                text: "<?php echo $_SESSION['success_message']; ?>",
                icon: "success",
                buttons: false,
                timer: 4000
            }).then(function() {
                window.location = "./";
            });
        </script>
    <?php
        unset($_SESSION['success_message']);
        }
    ?>

</body>

</html>