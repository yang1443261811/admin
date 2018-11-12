
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="php,laravel,vuejs,laravel5.3,blog,laravel博客,vue博客,博客,vue2,php开源,php新手,laravel新手,php7,laravel5">
    <meta name="author" content="Jiajian Chan">
    <meta name="description" content=" PJ Blog 是由 Laravel 和 Vuejs 组件化开发而成，致力于推动 Laravel，PHP7、php-fig、Vuejs 等新技术，带来优质的体验与简洁的界面。 ">

    <title>Welcome To Yang Blog!</title>
    <link rel="shortcut icon" href="/img/io.jpg">

    <link rel="stylesheet" href="/css/home.css">

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
        }
        #particles {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .full-height {
            background-color: #fff;
            color: #6289ad;
            font-family: 'Raleway';
            font-weight: 100;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
            z-index: 100;
            margin-bottom: 15vh;
        }

        .title {
            font-size: 84px;
        }

        .description {
            margin: 30px 0;
            font-size: 24px;
            font-weight: bold;
        }

        .links > a {
            color: #9caebf;
            padding: 0 25px;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .links > a:hover {
            color: #52697f;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .avatar {
            width: 120px !important;
        }
        .title a img {
            max-height: none!important;
            width: 120px;
            height: 120px;
            overflow: hidden;
            border-radius: 50%;
            background: #FFF;
            box-shadow: rgba(255,255,255,1) 0 0 0 5px,rgba(0,0,0,1) 0 0 5px 4px;
            -webkit-transition: -webkit-transform 600ms;
            -moz-transition: -moz-transform 600ms;
            transition: transform 600ms;
        }
        .title a img:hover {
            -webkit-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div id="particles"></div>
    <div class="content">
        <div class="title m-b-md">
            <a href="/">
                <!--<img class="avatar img-circle" src="https://pigjian.com/images/default_avatar.png" alt="Pig Jian">-->
                <img class="avatar img-circle" src="/images/timg.jpg" alt="Pig Jian">
            </a>
        </div>

        <div class="description">
            Nothing is impossible.
        </div>

        <div class="links">
            <a href="/post">Blog</a>
            <a href="/share">Share</a>
            <a target="_blank" href="http://weibo.com/1839900520">Weibo</a>
            <a target="_blank" href="https://github.com/jcc">GitHub</a>
            <a href="/about">Me</a>
            <a href="/donate">Donate</a>
        </div>
    </div>
</div>

<script src="./js/particles.min.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-81634754-1', 'auto');
    ga('send', 'pageview');
</script>
<script>
    particlesJS("particles", {
        "particles": {
            "number": {
                "value": 10,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#52697f"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 0.1,
                "random": false,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": false
                }
            },
            "size": {
                "value": 20,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 20,
                    "size_min": 0.1,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": true,
                "distance": 1000,
                "color": "#52697f",
                "opacity": 0.2,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 4,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": false,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 400,
                    "size": 40,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 3
                },
                "repulse": {
                    "distance": 200,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
</script>
</body>
</html>