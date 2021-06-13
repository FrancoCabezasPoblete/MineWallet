<?php include 'include/navbar.html'; ?>
<?php include $_SERVER['DOCUMENT_ROOT'].'/db_config.php'; ?>
<div class='container-fluid'>
    <div class="row p-3 text-center justify-content-center">
        <h1>MineWallet</h1>
    </div>
    <div class="row p-3">
        <div class="col">
            <div class="container shadow-lg rounded m-auto p-5" style="background: #ffffff">
                <p>
                    <?php 
                        $sql = pg_query("SELECT * FROM usuario limit 10"); 
                        while($row = pg_fetch_assoc($sql)){
                            echo ''.$row["nombre"].' '.$row["apelido"].' '.$row["correo"].' </br>';
                        }

            
                    ?>
                    <?php 
                        
                    ?>
                </p>
                <p>SQL owo</p>
                <img src="img/girl.svg" class="img-fluid mx-auto d-block" alt="Stonks" style="max-width: 50%;">
            </div>
        </div>
    </div>
</div>

<!-- developers section -->

<div class="container developer">
    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class ="rounded-circle" style="background: #ffffff" width="140" height="140"  src = "img/Franco.svg"/>

        <h2>Franco Cabezas</h2>
        <p>Espero te guste la página! </br> inserte pog champ</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class ="rounded-circle" style="background: #ffffff" width="140" height="140"  src = "img/Paulina.svg"/>

        <h2>Paulina Vega</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
        <svg class="rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

        <h2>Angelo Miranda</h2>
        <p>Disfruta siendo tu propio jefe con MineWallet uwu</p>
        </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

</div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container d-flex justify-content-between">
    <p>&copy; 2021 USM. &middot;</p>
    </footer>
</body>

</html>