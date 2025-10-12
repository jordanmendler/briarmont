<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$baseDomain = "$protocol://$host";

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim($path, '/');
$segments = explode('/', $path);
$subPage = mb_strtolower($segments[0]) ?? '';

if (!empty($subPage)) {
    if ('container-city' == $subPage) {
        $embedUrl = 'https://docs.google.com/presentation/d/e/2PACX-1vRRKhM-9JUBJ9Ys09ctsfxxbuSz9V1a_oGj_H-kHZrT4MHGdCfsLJo4uZ1ek1nGz--PJ57AlCaD6skg/pubembed?start=false&loop=false&delayms=5000';
    } elseif ('ontario-auto-row' == $subPage) {
        $embedUrl = 'https://docs.google.com/presentation/d/e/2PACX-1vQ5vT00Sz5KdqbzT5XBdgZRC5D8lRQtWej7Ulq2p3Imp5zDG9T1zkaAj6nLBkGOU2VPJoJjlSPBjVYC/pubembed?start=false&loop=false&delayms=5000';
    } elseif ('briarmont-estates-sylmar' == $subPage) {
        $embedUrl = 'https://docs.google.com/presentation/d/e/2PACX-1vSBPSD0H6-XTqXFleIAJaIniWeIUrHbXe0nu1BUMWQsi7Wv8aPUKBBkWGWBTCUtakNjY0JtRRAZqcbH/pubembed?start=false&loop=false&delayms=5000';
    } elseif('briarmont-estates-lake-palmdale' == $subPage) {
        $embedUrl = 'https://docs.google.com/presentation/d/e/2PACX-1vSpTSMeNwxhrXEesVCxONdYNQQpLsc-rzBETV67Sy0upQ381LXqtOBXzU437opz0oKGTCFFNFlop8Zf/pubembed?start=false&loop=false&delayms=5000';
    } else {
        $embedUrl = '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Briarmont Estates & Mansion</title>
    <meta name="description"
        content='Briarmont Estates & Mansion'>

    <meta property="og:title" content="Briarmont Estates & Mansion">
    <meta property="og:description"
        content='Briarmont Estates & Mansion'>
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://briarmont.com/">
    <meta property="og:image" content="https://briarmont.com/images/briarmont-logo.png">

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/site.webmanifest">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
    <link href="https://vjs.zencdn.net/8.23.4/video-js.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/app.css">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4F3QM34MF6"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-4F3QM34MF6');
    </script>
</head>
<body>

<?php

if (empty($embedUrl) && empty($subPage)) {
    ?>
    <section>
        <div class="is-flex is-flex-direction-column is-align-items-center content-wrap">
            <a href="/" title="Briarmont Estates & Mansion">
                <img src="images/briarmont-logo.png" class="logo-img" alt="Briarmont Estates & Mansion" />
            </a>
            <div class="container">
                <div class="columns is-multiline">
                    <!-- <div class="column is-12-mobile is-6-tablet is-flex">
                        <a href="/ontario-auto-row" class="is-flex is-flex-direction-column is-justify-content-stretch has-width-100">
                            <div class="box is-flex is-flex-direction-column is-justify-content-stretch has-height-100">
                                <figure class="image is-4by3">
                                    <img src="/images/Ontario_Auto_Row.png" />
                                </figure>
                                <div class="content mt-4">
                                    <ul>
                                        <li>Ontario Auto Row</li>
                                        <li>Purchase Price: $1,800,000</li>
                                        <li>Investment: $1,000,000</li>
                                        <li>Exit Price: $8,072,171</li>
                                        <li>Exit Multiple: 7-cap</li>
                                        <li>Levered IRR: 39.53%</li>
                                        <li>Equity Multiple: 3.94x</li>
                                        <li>Cash on Cash: 37%</li>
                                        <li>Yield on Cost: 20.61%</li>
                                        <li>Hold Length: 60 months</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div> -->
                    <div class="column is-12-mobile is-4-tablet is-flex">
                        <a href="/briarmont-estates-sylmar" class="is-flex is-flex-direction-column is-justify-content-stretch has-width-100">
                            <div class="box is-flex is-flex-direction-column is-justify-content-stretch has-height-100">
                                <figure class="image is-4by3">
                                    <img src="/images/Briarmont_Estates_Sylmar.jpg" />
                                </figure>
                                <div class="content mt-4">
                                    <ul>
                                        <li>Briarmont Estates, Sylmar</li>
                                        <li>20 homes on 2 acres</li>
                                        <li>Phase I Investment: $2,000,000</li>
                                        <li>Phase II Investment: $6,000,000</li>
                                        <li>Exit Price: $20,814,921</li>
                                        <li>Exit Multiple: 5-cap</li>
                                        <li>Levered IRR: 47.21%</li>
                                        <li>Equity Multiple: 6.19x</li>
                                        <li>Hold Length: 60 months</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="column is-12-mobile is-4-tablet is-flex">
                        <a href="/briarmont-estates-lake-palmdale" class="is-flex is-flex-direction-column is-justify-content-stretch has-width-100">
                            <div class="box is-flex is-flex-direction-column is-justify-content-stretch has-height-100">
                                <figure class="image is-4by3">
                                    <img src="/images/Briarmont_Estates_Lake_Palmdale.png" />
                                </figure>
                                <div class="content mt-4">
                                    <ul>
                                        <li>Briarmont Estates, Lake Palmdale</li>
                                        <li>52 homes on 13.7 acres</li>
                                        <li>Phase I Investment: $1,000,000</li>
                                        <li>Phase II Investment: $6,500,000</li>
                                        <li>Exit Price: $20,433,251</li>
                                        <li>Exit Multiple: 6-cap</li>
                                        <li>Levered IRR: 38.16%</li>
                                        <li>Equity Multiple: 3.73x</li>
                                        <li>Hold Length: 60 months</li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="column is-12-mobile is-4-tablet is-flex">
                        <div class="is-flex is-flex-direction-column is-justify-content-stretch has-width-100">
                            <div class="box is-flex is-flex-direction-column is-justify-content-stretch has-height-100">
                                <figure class="image is-4by3">
                                    <img src="/images/SCENE_08-NORTH.png" />
                                </figure>
                                <div class="content mt-4">
                                    <ul>
                                        <li>Container City</li>
                                        <li>Mixed-Use Project</li>
                                        <li>In Planning Stage</li>
                                        <li><a href="javascript:;" onClick="openModal(this)">Video</a></li>
                                        <li><a href="/container-city" >Presentation</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="email-form-container container py-6">
                <div id="form-message" class="has-text-centered has-text-weight-bold mb-4">
                </div>
                <form id="emailForm" class="box mx-auto" style="max-width: 600px;">
                    <div class="field is-grouped is-grouped-centered">
                        <div class="control is-expanded">
                            <input
                                class="input is-medium" 
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Join for more information"
                                required 
                            />
                        </div>
                        <div class="control">
                            <button type="submit" class="button is-primary is-medium">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php
} else if(!empty($embedUrl) && !empty($subPage)) {
    ?>
    <section class="p-0">
        <div class="is-flex is-flex-direction-column is-clipped" style="height: 100vh">
            <div class="columns is-marginless m-0 p-0" style="height: 15vh">
                <div class="column is-6 is-flex is-align-items-center p-2">
                    <a href="/" title="Briarmont Estates & Mansion" class="is-flex is-align-items-center">
                        <img src="images/briarmont-logo.png" class="logo-img" style="max-height:100px;margin-left: 10px;padding: 0" alt="Briarmont Estates & Mansion" />
                    </a>
                </div>
                <div class="column is-3 is-offset-3 is-flex is-align-items-center p-2">
                    <div class="email-form-container is-flex-grow-1">
                        <div id="form-message" class="has-text-centered has-text-weight-bold is-size-7"></div>
                        <form id="emailForm" class="box m-0 py-2 px-3">
                            <div class="field is-grouped is-grouped-centered m-0">
                                <div class="control is-expanded">
                                    <input class="input" type="email" id="email" name="email" 
                                        placeholder="Join for more information" required />
                                </div>
                                <div class="control">
                                    <button type="submit" class="button is-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="is-flex-grow-1 m-0 is-clipped" style="height: 85vh">
                <div class="iframe-container m-0" style="height: 100%">
                    <iframe 
                        id="slides-iframe"
                        src="<?= $embedUrl . '&rm=minimal' ?>" frameborder="0"
                            style="width: 100%; height: 100%; max-height:none;" allow="fullscreen; clipboard-write" allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
} else {
    header("Location: $baseDomain/", true, 302);
}
?>
    <div id="dynamic-modal" class="modal" style="display: none;">
        <span id="modal-close-btn" class="close-btn">&times;</span>
        <div class="modal-content">
            <video
                id="cc-video"
                class="video-js vjs-fill"
                controls
                preload="auto"
                data-setup="{}"
            >
                <source src="video/VID-20251009-WA0012.mp4" type="video/mp4" />
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank"
                        >supports HTML5 video</a
                    >
                </p>
            </video>
        </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js?render=6LeVTOMrAAAAANPoVCUoBOfr9EPkbTMjXHwnVth0"></script>
    <script src="https://vjs.zencdn.net/8.23.4/video.min.js"></script>
    <script>
        document.getElementById('emailForm').addEventListener('submit', function (e) {
            e.preventDefault();

            const email = document.getElementById('email').value;
            const messageDiv = document.getElementById('form-message');

            messageDiv.textContent = '';
            messageDiv.classList.remove('has-text-success', 'has-text-danger');

            grecaptcha.ready(function () {
                grecaptcha.execute('6LeVTOMrAAAAANPoVCUoBOfr9EPkbTMjXHwnVth0', { action: 'submit_email' }).then(function (token) {
                    fetch('/submit.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                        body: `email=${encodeURIComponent(email)}&token=${encodeURIComponent(token)}`
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            messageDiv.textContent = 'Success';
                            messageDiv.classList.add('has-text-success');
                            document.getElementById('email').value = '';
                            
                            setTimeout(() => {
                                messageDiv.textContent = '';
                            }, 5000);
                        } else {
                            messageDiv.textContent = data.message || 'Error';
                            messageDiv.classList.add('has-text-danger');
                        }
                    })
                    .catch(() => {
                        messageDiv.textContent = 'Error';
                        messageDiv.classList.add('has-text-danger');
                    });
                });
            });
        });

        const openModal = () => {
            const modal = document.getElementById('dynamic-modal');

            modal.style.display = 'block';
            document.documentElement.classList.add('modal-open');
            document.body.classList.add('modal-open');
            const player = videojs('cc-video');
            player.play();
            return false
        };

        window.onload = function(e){
            window.onclick = function (event) {
                const modal = document.getElementById('dynamic-modal');
                if (event.target === modal) {
                    modal.style.display = 'none';
                    document.documentElement.classList.remove('modal-open');
                    document.body.classList.remove('modal-open');
                    const player = videojs('cc-video');
                    player.pause();
                }
            };

            const closeBtn = document.getElementById('modal-close-btn');

            closeBtn.onclick = function () {
                const modal = document.getElementById('dynamic-modal');
                modal.style.display = 'none';
                document.documentElement.classList.remove('modal-open');
                document.body.classList.remove('modal-open');
                const player = videojs('cc-video');
                player.pause();
            };
        }
    </script>
</body>
</html>