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
    <script src="./dist/jquery.min.js"></script>
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
    .imgW{
        width:20vw;
    }
    .svgW{
        width:20vw;
    }
</style>

<body data-scroll-container>
    <div class="container-fliud">
        <div class="row p-5 flex-column flex-sm-row vh-100 vw-100">
        <svg id="_圖層_1" data-name="圖層 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 777.02 474.3" style="position:absolute;">
  <defs>
    <style>
      .cls-1 {
        fill: transparent;
        stroke: #231815;
        stroke-miterlimit: 10;
      }
    </style>
  </defs>
  <path class="cls-1" d="M4.75,44S20.31-88.59,190.68,109.19s140.74,394.81-10.37,360.74S-27.84,369.93,13.64,336.6s140.26,19.45,139.87-124.44S293.64,28.45,352.16,78.82s397.78,368.89,204.44,374.81,92.59-205.93-16.3-336.3S-60.43,158.08,53.64,292.89s325.93-2.22,308.89-145.19C345.49,4.74,92.16,.3,209.2,189.93s75.56,265.93,227.41,129.63,408.91,131.4,267.41,132.59-67.41-239.26-60.74-302.96-224.44-71.85-245.93,114.81,19.26,259.26,134.81,131.85c115.56-127.41,174.81-142.96,189.63-91.11s-284.44-57.78-314.81-147.41,199.26-191.85,254.07-111.85-13.33,155.56,34.07,199.26,81.48-7.6,81.48-7.6"/>
</svg>
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
            <div class="col-12 col-sm-6 box d-flex" data-scroll data-scroll-direction="horizontal" data-scroll-speed=-2>
                <div class="col-6 p-5">
                    <h2 class="fsType01">CB Coffe</h2>
                    <h4 class="fsType">USAGE</h4>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center">
                    <a href="./fe/cb-coffe" target="_blank"><img src="./img/work/frontend03.png" class="imgW"></a>
                </div>
            </div>
            <div class="col-12 col-sm-6 box d-flex" data-scroll data-scroll-direction="vertical" data-scroll-speed=-2 style="box-shadow:2px -2px 3px #aaa">
                <div class="col-6 p-5">
                    <h2 class="fsType01">Zoo</h2>
                    <h4 class="fsType">USAGE</h4>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center"><a href="./fe/zoo" target="_blank"><img src="./img/work/frontend03.png" class="imgW"></a></div>
            </div>
            <div class="col-12 col-sm-6 box d-flex" data-scroll data-scroll-direction="horizontal" data-scroll-speed=2 style="box-shadow:2px -2px 8px #aaa">
                <div class="col-6 p-5">
                    <h2 class="fsType01">Halloween</h2>
                    <h4 class="fsType">USAGE</h4>
                </div>
                <div class="col-6 d-flex justify-content-center align-items-center"><a href="./fe/halloween" target="_blank"><img src="./img/work/frontend03.png" class="imgW"></a></div>
            </div>
            <div class="col-12 col-sm-6 box d-flex" data-scroll data-scroll-direction="vertical" data-scroll-speed=2 style="box-shadow:2px -2px 12px #aaa">
                4
            </div>
            <!-- /FRONT -->
        </div>
        <div class="row" style="width:100vw">
            <!-- BACK-->
            <span class="fsType fs-1 mx-3" data-scroll data-scroll-speed=-2>BACK</span>
            <span class="fsType fs-1 mx-3" data-scroll data-scroll-speed=2>END</span>
            <div class="col-12 col-sm-6 box d-flex d-flex" data-scroll data-scroll-direction="vertical" data-scroll-speed=-2>
                <div class="col-6 d-flex justify-content-center align-items-center"><a href="./be/calendar" target="_blank"><img src="./img/work/backend03.png" class="imgW"></a></div>
                <div class="col-6 p-5">
                    <h2 class="fsType01 text-end">Calendar</h2>
                    <h4 class="fsType text-end">USAGE</h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 box d-flex d-flex" data-scroll data-scroll-direction="horizontal" data-scroll-speed=2 style="box-shadow:2px -2px 3px #aaa">
                <div class="col-6 d-flex justify-content-center align-items-center"><img src="./img/work/backend03.png" class="imgW"></div>
                <div class="col-6 p-5">
                    <h2 class="fsType01 text-end">WuBai</h2>
                    <h4 class="fsType text-end">USAGE</h4>
                </div>
            </div>
            <div class="col-12 col-sm-6 box d-flex" data-scroll data-scroll-direction="vertical" data-scroll-speed=2 style="box-shadow:2px -2px 8px #aaa">3</div>
            <div class="col-12 col-sm-6 box d-flex" data-scroll data-scroll-direction="horizontal" data-scroll-speed=-2 style="box-shadow:2px -2px 12px #aaa">
                4
            </div>
            <!-- /BACK-->
        </div>
        <div class="row" style="width:100vw">
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
    <script src="./dist/bootstrap.bundle.min.js"></script>
    <script src="./dist/bootstrap.min.js"></script>
    <script src="./dist/locomotive-scroll.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1"></script>

    <script>
        //locomotiveScroll
        let scroll = new LocomotiveScroll({
            el: document.querySelector("[data-scroll-container]"),
            smooth: true,
        });
        //typed
        let head01 = {
            strings: ["WEB<br>PLAYER", "WEB<br>ENGINEER"],
            typeSpeed: 200,
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
        anime({
  targets: 'path',
  strokeDashoffset: [anime.setDashoffset, 0],
  easing: 'easeInOutSine',
  duration: 3000,
  delay: function(el, i) { return i * 250 },
  direction: 'alternate',
//   loop: true
});
    </script>
</body>

</html>