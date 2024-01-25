<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>...</title>
    <link rel="stylesheet" href="./dist/bootstrap.min.css" />
    <link rel="stylesheet" href="./dist/locomotive-scroll.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>
<style>

</style>

<body data-scroll-container>
    <div class="container">
        <!-- myself -->
        <div class="row">
            <div class="col">
                <div class="box01"></div>
            </div>
            <!-- /myself -->
            <!-- work -->
            <div class="row">
                <div class="col"></div>
                <div class="col"></div>
            </div>
            <!-- /work -->
        </div>
    </div>


    <script src="./dist/bootstrap.bundle.min.js"></script>
    <script src="./dist/bootstrap.min.js"></script>
    <script src="./dist/jquery.min.js"></script>
    <script src="./dist/locomotive-scroll.min.js"></script>

    <script>
    let scroll = new LocomotiveScroll({
        el: document.querySelector("[data-scroll-container]"),
        smooth: true,
    });
    </script>
</body>

</html>