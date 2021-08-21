<!DOCTYPE html>
<html lang="tw">

<head>
    <!-- ------------------------------- bootstrap4 -------------------------------  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/assets/smalleye/favicon.ico" type="image/x-icon">
    <title>小艾人文背包客棧</title>
</head>

<body>
    <div id="smalleye">
        <navbar></navbar>
        <smalleyecover></smalleyecover>
        <h1 class="text-center" style="margin: 30px;color:red">混和背包房</h1>
        <smalleyecarousel></smalleyecarousel>
        <h1 class="text-center" style="margin: 30px;color:red">女生背包房</h1>
        <girlsprivateroom></girlsprivateroom>
        <h1 class="text-center" style="margin: 30px;color:red">雙人紅眠床雅房</h1>
        <doubleroom></doubleroom>
        <footertemplate></footertemplate>
    </div>
    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>