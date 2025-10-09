<?php
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'];
$baseDomain = "$protocol://$host";

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim($path, '/');
$segments = explode('/', $path);
$subPage = mb_strtolower($segments[0]) ?? '';

if (!empty($subPage)) {
    if ('ontario-auto-row' == $subPage) {
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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
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
    <section>
        <div class="is-flex is-flex-direction-column is-align-items-center content-wrap">
            <a href="/" title="Briarmont Estates & Mansion">
                <img src="images/briarmont-logo.png" class="logo-img" alt="Briarmont Estates & Mansion" />
            </a>
<?php

if (empty($embedUrl) && empty($subPage)) {
    ?>
    <div class="container">
        <div class="columns is-multiline">
            <div class="column is-12-mobile is-6-tablet is-flex">
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
            </div>
            <div class="column is-12-mobile is-6-tablet is-flex">
                <a href="/briarmont-estates-sylmar" class="is-flex is-flex-direction-column is-justify-content-stretch has-width-100">
                    <div class="box is-flex is-flex-direction-column is-justify-content-stretch has-height-100">
                        <figure class="image is-4by3">
                            <img src="/images/Briarmont_Estates_Sylmar.png" />
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
            <div class="column is-12-mobile is-6-tablet is-flex">
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
        </div>
    </div>
    <?php
} else if(!empty($embedUrl) && !empty($subPage)) {
    ?>
    <div class="iframe-container">
        <iframe 
            id="slides-iframe"
            src="<?=$embedUrl.'&rm=minimal'?>"
            frameborder="0"
            allow="fullscreen; clipboard-write"
            allowfullscreen>
        </iframe>
    </div>
    <?php
} else {
    header("Location: $baseDomain/", true, 302);
}
?>
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
    <script src="https://www.google.com/recaptcha/api.js?render=6LeVTOMrAAAAANPoVCUoBOfr9EPkbTMjXHwnVth0"></script>
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
    </script>
</body>
</html>