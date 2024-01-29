<!DOCTYPE html>
<html lang="en">
<?php
// get id
$id = $_GET['id'];
// echo $id;
// die;
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dewi Pule - Desa Wisata Pulesari</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <div class="container">
        <!-- Header Banner -->
        <div id="header"></div>
        <!-- Main Content -->
        <div id="content"></div>
        <!-- Footer -->
        <div id="footer"></div>
    </div>
    <!-- Bootstrap and jQuery -->
    <script>
    $(function() {
        $("#header").load("header.html");
        $("#content").load("form_edit.php?id=<?php echo $id ?>");
        $("#footer").load("footer.html");
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.9/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>