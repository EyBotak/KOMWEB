<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <link rel="stylesheet" href="<?php echo e(asset('contact/style.css')); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
    crossorigin="anonymous">
</head>
<body class="text-light bg-transparent">
    <div class="form p-4">
        <form class="kontak" action="/" method="post">
            <div class="heading mb-4">
                <h1 class="px-2">Kontak Kami</h1>
            </div>
            <hr>
            <div class="form-group form-inline">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control ml-1" id="nama" name="nama" placeholder="Masukkan nama">
            </div>
            <div class="form-group form-inline">
                <label for="email">Email:</label>
                <input type="email" class="form-control ml-2" id="email" name="email" placeholder="Masukkan email">
            </div>
            <div class="form-group checkbox_gender d-flex">
                <div>
                    <label for="gender">Jenis Kelamin:</label>
                </div>
                <div class="ml-1">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender" id="laki">
                        <label class="form-check-label" for="laki">Laki-laki</label>
                    </div>
                    <div class="form-check ">
                        <input class="form-check-input" type="radio" name="gender" id="perempuan">
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                    </div>
                </div>
            </div>
            <div class="form-group checkbox_hobby d-flex">
                <div class="mt-1">
                    <label class="display-6" for="hobby">Hobby:</label>
                </div>
                <div class="ml-2 ">
                    <div class="form-group form-inline">
                        <label for="text1">1. </label>
                        <input type="text" class="form-control" name="text1" id="text1">
                    </div>
                    <div class="form-group form-inline">
                        <label for="text2">2. </label>
                        <input type="text" class="form-control" name="text2" id="text2">
                    </div>
                    <div class="form-group form-inline">
                        <label for="text3">3. </label>
                        <input type="text" class="form-control" name="text3" id="text3">
                    </div>
                </div>
            </div>
            <div class="form-group button">
                <button type="submit" class="btn btn-custom px-3" id="submit">Submit</button>
                <button type="reset" class="btn btn-reset ml-2 px-4" id="reset">Reset</button>
            </div>
        </form>
    </div>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
    crossorigin="anonymous"></script> 
</body>
</html><?php /**PATH D:\UPJ\Komputasi Berbasis Web\pertemuan11\komputasi-web-a\resources\views/contact.blade.php ENDPATH**/ ?>