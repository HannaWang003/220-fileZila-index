<?php
include_once "./api/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/locomotive-scroll.min.css">
  <!-- <link rel="stylesheet" href="./node_modules/self/style.css?do"> -->
  <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@600&family=Bodoni+Moda:opsz,wght@6..96,500&family=Syncopate:wght@400;700&display=swap" rel="stylesheet">

</head>
<?php
include_once "./css/style.php";
?>

<body>
  <div data-scroll-container>
    <div class="content" id="stickyt">
      <section class="main-container">
        <!-- Navbar -->
        <div class="navbar" data-scroll data-scroll-sticky data-scroll-target="#stickyt" style="z-index:1">
          <div class="goto" data-to="#test1">menu</div>
          <div class="goto" data-to="#test2">flower</div>
          <div>car</div>
        </div>
        <!-- Footer -->
        <!-- Header -->
        <div class="header-container">
          <ul class="header-menu">
            <li>Intro</li>
            <li>About</li>
            <li>Featured</li>
          </ul>
          <h1 id="header-text">Wu Bai</h1>
          <h3 id="header-h3">Gōo-pah</h3>
        </div>
      </section>



      <section data-bgcolor="#032f35" data-textcolor="#bcb8ad">
        <div>
          <h1><span data-scroll data-scroll-direction="vertical" data-scroll-speed="-1">Horizontal</span>
            <span data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2">Scroll</span> <span data-scroll data-scroll-direction="horizontal" data-scroll-speed="1">Section</span>
          </h1>
          <p data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">with Locomotive Scroll</p>
        </div>
      </section>



      <section data-bgcolor="#bcb8ad" data-textcolor="#032f35" id="test2">
        <div>
          <h1><span>Horizontal</span> <span>Scroll</span> <span>Section</span></h1>
          <p>with Locomotive Scroll</p>
        </div>
      </section>



      <section data-bgcolor="#032f35" data-textcolor="#bcb8ad" class="vertical">

        <div class="anim-wrap">

          <div class="inner-section">
            <h1><span data-scroll data-scroll-direction="horizontal" data-scroll-speed="-1">Fake-Vertical</span> <span data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2">Scroll</span> <span data-scroll data-scroll-direction="horizontal" data-scroll-speed="1">Section</span></h1>
            <p data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">with GSAP ScrollTrigger
              & Locomotive Scroll</p>
          </div>

          <div class="inner-section center">
            <h1><span>Fake-Vertical</span> <span>Scroll</span> <span>Section</span></h1>
            <p>with GSAP ScrollTrigger & Locomotive Scroll</p>
          </div>

          <div class="inner-section">
            <h1><span>Fake-Vertical</span> <span>Scroll</span> <span>Section</span></h1>
            <p>with GSAP ScrollTrigger & Locomotive Scroll</p>
          </div>

        </div>

      </section>



      <section data-bgcolor="#bcb8ad" data-textcolor="#032f35">
        <div>
          <h1><span>Horizontal</span> <span>Scroll</span> <span>Section</span></h1>
          <p>with Locomotive Scroll</p>
        </div>
      </section>



      <section data-bgcolor="#032f35" data-textcolor="#bcb8ad">
        <div>
          <h1><span>Horizontal</span> <span>Scroll</span> <span>Section</span></h1>
          <p>with Locomotive Scroll</p>
        </div>
      </section>

      <section data-bgcolor="#032f35" data-textcolor="#bcb8ad" class="verticalp">

        <div class="anim-wrapp">

          <div class="inner-section">
            <h1><span>Fake-Vertical</span> <span>Scroll</span> <span>Section</span></h1>
            <p>with GSAP ScrollTrigger & Locomotive Scroll</p>
          </div>

          <div class="inner-section center" id="test1">
            <h1><span>Fake-Vertical</span> <span>Scroll</span> <span>Section</span></h1>
            <p>with GSAP ScrollTrigger & Locomotive Scroll</p>
          </div>

          <div class="inner-section">
            <h1><span>Fake-Vertical</span> <span>Scroll</span> <span>Section</span></h1>
            <p>with GSAP ScrollTrigger & Locomotive Scroll</p>
          </div>

        </div>

      </section>

    </div>

  </div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.2/ScrollTrigger.min.js"></script>
  <script src="./js/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
  <script src="./js/locomotive-scroll.min.js"></script>

  <script>
    gsap.registerPlugin(ScrollTrigger);

    const scroller = document.querySelector('[data-scroll-container]')

    const locoScroll = new LocomotiveScroll({
      el: scroller,
      smooth: true,
      direction: "horizontal",
      smartphone: {
        smooth: true,
        direction: "horizontal",
      },
      tablet: {
        smooth: true,
        direction: "horizontal",
      }
    });

    locoScroll.on("scroll", ScrollTrigger.update);

    //locoScroll.on("scroll", function() {
    //  console.log( locoScroll.scroll.instance.scroll.x )
    //});
    $('.goto').on('click', function() {
      var target = $(this).attr('data-to');
      target = document.querySelector(target);
      console.log(target)
      locoScroll.scrollTo(target);
    })
    ScrollTrigger.scrollerProxy(scroller, {
      // scrollTop(value) {
      //   return arguments.length
      //     ? locoScroll.scrollTo(value, 0, 0)
      //     : locoScroll.scroll.instance.scroll.y;
      // },
      scrollLeft(value) {
        return arguments.length ?
          locoScroll.scrollTo(value, 0, 0) :
          locoScroll.scroll.instance.scroll.x;
      },
      getBoundingClientRect() {
        return {
          left: 0,
          top: 0,
          width: window.innerWidth,
          height: window.innerHeight
        };
      },
      pinType: scroller.style.transform ? "transform" : "fixed"
    });

    ScrollTrigger.defaults({
      scroller: scroller
    })

    gsap.set('section', {
      backgroundColor: (index, target) => {
        return target.getAttribute('data-bgcolor')
      },
      color: (index, target) => {
        return target.getAttribute('data-textcolor')
      }
    })



    gsap.to(".anim-wrap", {
      scrollTrigger: {
        trigger: ".vertical",
        start: () => "left left",
        end: () => "+=" + document.querySelector('.anim-wrap').scrollHeight,
        pin: true,
        pinSpacing: true,
        // anticipatePin: 1,
        scrub: true,
        horizontal: true,
        invalidateOnRefresh: true
        //markers: true
      },
      y: () => {
        return -(document.querySelector('.anim-wrap').scrollHeight - window.innerHeight)
      },
      ease: "none"
    });

    gsap.to(".anim-wrapp", {
      scrollTrigger: {
        trigger: ".verticalp",
        start: () => "left left",
        end: () => "+=" + document.querySelector('.anim-wrapp').scrollHeight,
        pin: true,
        pinSpacing: true,
        // anticipatePin: 1,
        scrub: true,
        horizontal: true,
        invalidateOnRefresh: true
        //markers: true
      },
      y: () => {
        return -(document.querySelector('.anim-wrapp').scrollHeight - window.innerHeight)
      },
      ease: "none"
    });



    ScrollTrigger.addEventListener("refresh", () => locoScroll.update());
    ScrollTrigger.refresh();
  </script>
</body>

</html>