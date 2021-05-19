<?php include('partials/menu.php'); ?>

        <!-- Content Starts -->
        <div class="main-content">
            <div class="wrapper">
                <h1>DASH BOARD</h1>
                <br/><br/>
                <?php
                if(isset($_SESSION['login']))
                {
                    echo $_SESSION['login'];
                    unset($_SESSION['login']);
                }
        ?>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br/>
                    Categories
                </div>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br/>
                    Categories
                </div>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br/>
                    Categories
                </div>
                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br/>
                    Categories
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!-- Content End -->
<?php include('partials/footer.php'); ?>