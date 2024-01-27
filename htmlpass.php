<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <script>
        Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'loginSuccessfully',
            showConfirmButton: false,
            timer: 1500
        })
       
    </script>
     <?php
            echo date(('h:i:s')."/n"); 
            sleep(3);
            echo date(('h:i:s')."/n"); 
            //header('location: homepage_1.php');
        ?>   
</body>
</html>


