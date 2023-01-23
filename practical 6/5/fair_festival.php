<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="css/f.css"> -->

  <style>

.carousel {
    position: relative
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden
}

.carousel-item {
    position: relative;
    display: none;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    width: 100%;
    transition: -webkit-transform .6s ease;
    transition: transform .6s ease;
    transition: transform .6s ease, -webkit-transform .6s ease;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px
}

.carousel-item-next,
.carousel-item-prev,
.carousel-item.active {
    display: block
}

.carousel-item-next,
.carousel-item-prev {
    position: absolute;
    top: 0
}

.carousel-item-next.carousel-item-left,
.carousel-item-prev.carousel-item-right {
    -webkit-transform: translateX(0);
    transform: translateX(0)
}

@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {

    .carousel-item-next.carousel-item-left,
    .carousel-item-prev.carousel-item-right {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }
}

.active.carousel-item-right,
.carousel-item-next {
    -webkit-transform: translateX(100%);
    transform: translateX(100%)
}

@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {

    .active.carousel-item-right,
    .carousel-item-next {
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0)
    }
}

.active.carousel-item-left,
.carousel-item-prev {
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%)
}

@supports ((-webkit-transform-style:preserve-3d) or (transform-style:preserve-3d)) {

    .active.carousel-item-left,
    .carousel-item-prev {
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
    }
}

.carousel-control-next,
.carousel-control-prev {
    position: absolute;
    top: 0;
    bottom: 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 15%;
    color: #fff;
    text-align: center;
    opacity: .5
}

.carousel-control-next:focus,
.carousel-control-next:hover,
.carousel-control-prev:focus,
.carousel-control-prev:hover {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: .9
}

.carousel-control-prev {
    left: 0
}

.carousel-control-next {
    right: 0
}

.carousel-control-next-icon,
.carousel-control-prev-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: transparent no-repeat center center;
    background-size: 100% 100%
}

.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E")
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E")
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 10px;
    left: 0;
    z-index: 15;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none
}

.carousel-indicators li {
    position: relative;
    -webkit-box-flex: 0;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    background-color: rgba(255, 255, 255, .5)
}

.carousel-indicators li::before {
    position: absolute;
    top: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: ""
}

.carousel-indicators li::after {
    position: absolute;
    bottom: -10px;
    left: 0;
    display: inline-block;
    width: 100%;
    height: 10px;
    content: ""
}

.carousel-indicators .active {
    background-color: #fff
}

.carousel-caption {
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center
}

  </style>
 
  <body>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="height:500px;width:100%;padding:10px 300px 10px 300px">
  <div class="carousel-inner"  style="height:100%;width:100%">
    <div class="carousel-item active">
      <img src="img/Modhera-Sun-Temple-Home-Page-Thumbnail.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="img/Rani Ki Vav29.jpg" class="d-block w-100" alt="">
    </div>
    <div class="carousel-item">
      <img src="img/winterbanner.jpg" class="d-block w-100" alt="">
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>