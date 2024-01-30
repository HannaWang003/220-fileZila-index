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
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>
<style>
    * {
        margin: 0;
        box-sizing: border-box;
    }
body{
  background-color:#E8E9F3;
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
        height: 50vh;
    }

    .fdV {
        writing-mode: vertical-lr;
    }

    .fsType {
        font-family: "Anton", sans-serif;
        font-weight: 400;
        font-style: normal;
    }
</style>

<body data-scroll-container>
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
            <div class="col">THIS IS ME</div>
            <!-- /myself -->
        </div>
        <div class="row p-3" style="width:100vw">
            <!-- FRONT -->
            <span class="fsType fs-1 text-end" data-scroll data-scroll-speed=-2>FRONT</span>
            <span class="fsType fs-1 text-end" data-scroll data-scroll-speed=2>END</span>
            <div class="col-12 col-sm-6 box" data-scroll data-scroll-direction="horizontal" data-scroll-speed=-2>1</div>
            <div class="col-12 col-sm-6 box" data-scroll data-scroll-direction="vertical" data-scroll-speed=-2>2
            </div>
            <div class="col-12 col-sm-6 box" data-scroll data-scroll-direction="horizontal" data-scroll-speed=2>3</div>
            <div class="col-12 col-sm-6 box" data-scroll data-scroll-direction="vertical" data-scroll-speed=2>
                4
            </div>
            <!-- /FRONT -->
        </div>
        <div class="row" style="width:100vw">
            <!-- BACK-->
            <span class="fsType fs-1 mx-3" data-scroll data-scroll-speed=-2>BACK</span>
            <span class="fsType fs-1 mx-3" data-scroll data-scroll-speed=2>END</span>
            <div class="col-12 col-sm-6 box" data-scroll data-scroll-direction="vertical" data-scroll-speed=-2>1</div>
            <div class="col-12 col-sm-6 box" data-scroll data-scroll-direction="horizontal" data-scroll-speed=2>2
            </div>
            <div class="col-12 col-sm-6 box" data-scroll data-scroll-direction="vertical" data-scroll-speed=2>3</div>
            <div class="col-12 col-sm-6 box" data-scroll data-scroll-direction="horizontal" data-scroll-speed=-2>
                4
            </div>
            <!-- /BACK-->
        </div>
        <div class="row p-5 justify-content-center fs-3" style="width:100vw;">
            <!-- skill -->
            <span class="fsType text-center" style="font-size:5vw">SKILL</span>
            <span class="fsType text-center">PHP</span>
            <span class="fsType text-center">MYSQL</span>
            <span class="fsType text-center">JAVASCEIPT</span>
            <span class="fsType text-center">BOOTSTRAP</span>
            <span class="fsType text-center">CSS</span>
            <span class="fsType text-center">HTML</span>
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
            strings: ["WEB<br>PLAYER","WEB<br>ENGINEER"],
            typeSpeed: 50,
            backSpeed:25,
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