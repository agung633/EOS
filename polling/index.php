<?php
include 'conn.php';
$query = mysqli_query($conn, 'SELECT * FROM polling');

if (isset($_POST['submit'])) {
    $id= $_POST['id'];
    mysqli_query($conn, "UPDATE polling SET value=value+1 WHERE id=$id");
    header('location:index.php');
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Tentukan Calon  Ketua Osis Pilihanmu</title>
    <link rel="stylesheet" href="css/bootstrap.css" >
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center">Tentukan Ketua Osis PIlihanmu</h2>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <p class="lead">Jangan Sampe Golput,Gunakan Hak Pilihmu</P>
                        <hr>
                        <form action="" method="post">
                            <div>
                            <?php foreach ($query as $row): ?>131
                                <div class="form-group">
                                    <input name="id" type="radio" aria-valuenow="" class="pollradio" value="<?php echo $row['id'] ?>">
                                    <?php echo $row['framework']?>
                                </div>
                                <?php endforeach ?>
                            </div>
                            <br>
                                <button type="submit" name="submit" class="btn btn-primary" id="btn">Submit</button>
                        </form>
                    </div>
                    <div class="col-6">
                        <p class="lead">Live Polling Ketua Osis SMA Ibrahimy</p>
                        <hr>

                        <div class="row">
                            <div class="col-6">
                                <?php foreach ($query as $row): ?>
                                <div class="mb-3"><?php echo $row['framework']?></div>
                                <?php endforeach ?>
                            </div>
                            <div class="col-6">
                            <?php foreach ($query as $row): ?>
                                <div class="progress mt-1 mb-4">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: <?php echo $row['value'] ?>"     aria-valuenim="0" aria-valuemax="100"><?php echo $row ['value']?>%</div> 
                                </div>
                            <?php endforeach ?>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.4.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>