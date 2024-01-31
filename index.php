<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>...</title>
    <link rel="icon" href="./img/icon.png" type="image/png">
    <link rel="stylesheet" href="./dist/bootstrap.min.css" />
    <link rel="stylesheet" href="./dist/locomotive-scroll.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Righteous&display=swap" rel="stylesheet">
</head>
<style>
* {
    margin: 0;
    box-sizing: border-box;
}

body {
    background-color: #E8E9F3;
}

#type-container01 {
    font-size: 10vw;
}

#type-container02 {
    font-size: 5vw;
}

#type-container03 {
    display: inline-block;
    width: 100%;
    text-align: end;
    font-size: 2vw;
}

/* test */
.box {
    border: 1px solid black;
    height: 60vh;
    background-color: #E8E9F3;

}

.fdV {
    writing-mode: vertical-lr;
}

.fsType {
    font-family: "Anton", sans-serif;
    font-weight: 400;
    font-style: normal;
}

.fsType01 {
    font-family: 'Righteous', sans-serif;

}
</style>

<body data-scroll-container>
    <a href="index.html">test</a>
    <div class="container-fliud">
        <div class="row p-5 flex-column flex-sm-row vh-100 vw-100">
            <!-- myself -->
            <div class="col">
                <span id="type-container01" class="fsType"></span>
                <br>
                <span id="type-container02" class="fsType"></span>
                <br>
                <span id="type-container03" class=""></span>
            </div>
            <div class="col text-center">
                THIS IS ME
                <img src="./img/Hanna.svg" style="width:50%;">
            </div>
            <!-- /myself -->
        </div>
        <div class="row p-3" style="width:100vw">
            <!-- FRONT -->
            <span class="fsType fs-1 text-end" data-scroll data-scroll-speed=-2>FRONT</span>
            <span class="fsType fs-1 text-end" data-scroll data-scroll-speed=2>END</span>
            <div class="col-12 col-sm-6 box" data-scroll data-scroll-direction="horizontal" data-scroll-speed=-2>
                <div class="col-6 p-5">
                    <h2 class="fsType01">CB Coffe</h2>
                    <h4 class="fsType">USAGE</h4>
                </div>
                <div class="col-6">
                </div>
            </div>
            <div class="col-12 col-sm-6 box" data-scroll data-scroll-direction="vertical" data-scroll-speed=-2 style="box-shadow:1px -1px 3px #000">
                <div class="col-6 p-5">
                    <h2 class="fsType01">Zoo</h2>
                    <h4 class="fsType">USAGE</h4>
                </div>
                <div class="col-6"></div>
            </div>
            <div class="col-12 col-sm-6 box" data-scroll data-scroll-direction="horizontal" data-scroll-speed=2 style="box-shadow:1px -1px 3px #000">
                <div class="col-6 p-5">
                    <h2 class="fsType01">Halloween</h2>
                    <h4 class="fsType">USAGE</h4>
                </div>
                <div class="col-6"></div>
            </div>
            <div class="col-12 col-sm-6 box" data-scroll data-scroll-direction="vertical" data-scroll-speed=2>
                4
            </div>
            <!-- /FRONT -->
        </div>
        <div class="row" style="width:100vw">
            <!-- BACK-->
            <span class="fsType fs-1 mx-3" data-scroll data-scroll-speed=-2>BACK</span>
            <span class="fsType fs-1 mx-3" data-scroll data-scroll-speed=2>END</span>
            <div class="col-12 col-sm-6 box d-flex" data-scroll data-scroll-direction="vertical" data-scroll-speed=-2 style="box-shadow:1px -1px 3px #000">
                <div class="col-6"></div>
                <div class="col-6 p-5">
                    <h2 class="fsType01 text-end">Calendar</h2>
                    <h4 class="fsType text-end">USAGE</h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 box d-flex" data-scroll data-scroll-direction="horizontal" data-scroll-speed=2>
                <div class="col-6"></div>
                <div class="col-6 p-5">
                    <h2 class="fsType01 text-end">WuBai</h2>
                    <h4 class="fsType text-end">USAGE</h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 box" data-scroll data-scroll-direction="vertical" data-scroll-speed=2>3</div>
            <div class="col-12 col-sm-6 box" data-scroll data-scroll-direction="horizontal" data-scroll-speed=-2 style="box-shadow:1px -1px 3px #000">
                4
            </div>
            <!-- /BACK-->
        </div>
        <div class="row p-5 justify-content-center fs-3" style="width:100vw;">
            <!-- skill -->
            <span class="fsType text-center" style="font-size:5vw">SKILL</span>
            <span class="fsType text-center">PHP</span>
            <span class="fsType text-center">MYSQL</span>
            <span class="fsType text-center">JavaScript</span>
            <span class="fsType text-center">Bootstrap</span>
            <span class="fsType text-center">CSS</span>
            <span class="fsType text-center">HTML</span>
            <span class="fsType text-center">PhotoShop</span>
            <span class="fsType text-center">Illustrator</span>
            <!-- /skill -->
        </div>
    </div>


    <script src="./dist/jquery.min.js"></script>
    <script src="./dist/bootstrap.bundle.min.js"></script>
    <script src="./dist/bootstrap.min.js"></script>
    <script src="./dist/locomotive-scroll.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
    //locomotiveScroll
    let scroll = new LocomotiveScroll({
        el: document.querySelector("[data-scroll-container]"),
        smooth: true,
    });
    //typed
    let head01 = {
        strings: ["WEB<br>PLAYER", "WEB<br>ENGINEER"],
        typeSpeed: 50,
        backSpeed: 25,
        onComplete: function() {
            typed.cursor.style.display = "none"
            new Typed("#type-container02", head02)
        }
        // backSpeed: 50,
        // loop: true,
    }
    let head02 = {
        strings: ["IDEAS To Bytes"],
        typeSpeed: 50,
        onComplete: function() {
            new Typed("#type-container03", head03)
        }

    }
    let head03 = {
        strings: ["CONTACT ME <span style='writing-mode:vertical-lr'> =) </span>"],
        typeSpeed: 100,
        showCursor: false,
        onComplete: function() {

        }
    }
    let typed = new Typed("#type-container01", head01);
    </script>
</body>

</html>