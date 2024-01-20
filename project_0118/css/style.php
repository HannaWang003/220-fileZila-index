<style>
  * {
    margin: 0;
  }

  body {
    background-color: #000;
  }

  li {
    list-style: none;
  }

  <?php $img = $Title->find(['sh' => 1]);

  ?>.main-container {
    padding: 0 5vw;
    background: url("./img/<?= $img['img'] ?>") right bottom no-repeat;
  }

  .navbar {
    display: flex;
    justify-content: space-between;
    padding: 50px 0;
    font-size: 2vw;
    letter-spacing: 1px;
    font-family: 'Syncopate', sans-serif;
    font-weight: 700;
    color: #464646;
    text-transform: uppercase;
  }

  .header-container {
    position: relative;
  }

  .header-menu {
    position: absolute;
    left: 0;
    top: 100px;
    letter-spacing: 1px;
    font-family: 'Syncopate', sans-serif;
    color: #626262;
    text-transform: uppercase;
  }

  .header-menu li {
    margin: 10px 0;
  }

  #header-text {
    font-size: 18vw;
    text-transform: uppercase;
    text-align: center;
    font-family: 'Bai jamjuree', sans-serif;
    font-weight: 600;
  }

  #header-h3 {
    font-size: 10vw;
    text-align: center;
    font-family: 'Bai jamjuree', sans-serif;
    font-weight: 600;
  }


  @import url('https://fonts.googleapis.com/css?family=Signika+Negative:300,400&display=swap');

  @import url('https://fonts.googleapis.com/css2?family=Nixie+One&display=swap');



  body {
    font-family: "Signika Negative", sans-serif;
    margin: 0;
    padding: 0;
    width: 100vw;
    height: 100vh;
    /* overflow: hidden !important; */
  }



  [data-scroll-container] {
    overflow-y: hidden !important;
    overflow-x: hidden !important;
  }



  .content {
    display: flex;
  }

  section {
    position: relative;
    width: 75vw;
    min-width: 75vw;
    height: 100vh;
  }

  section.vertical,
  section.verticalp {
    width: 100vw;
    min-width: 100vw;
    height: 100%;
  }

  section.vertical .inner-section,
  section.verticalp .inner-section {
    position: relative;
    width: 100vw;
    height: 75vh !important;
  }

  section.vertical .inner-section.center,
  section.verticalp .inner-section.center {
    background-color: #2C2F33;
  }



  h1 {
    font-family: "Nixie One";
    font-size: 5rem;
    line-height: 1;
    font-weight: 800;
    margin-bottom: 1rem;
    position: absolute;
    top: 10vw;
    left: 10vw;
    z-index: 4;
    overflow-wrap: break-word;
    hyphens: auto;

    @media (max-width: 768px) {
      font-size: 16vw;
    }

    span {
      display: block;
    }
  }

  h2 {
    font-size: 2rem;
    max-width: 400px;
  }

  p {
    position: absolute;
    bottom: 10vw;
    right: 10vw;
    width: 200px;
    line-height: 1.5;
  }



  .c-scrollbar {
    opacity: 1;
  }

  .c-scrollbar_thumb {
    background-color: firebrick;
    opacity: 1;
  }
</style>