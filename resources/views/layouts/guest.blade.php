<!DOCTYPE html>

<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0" />
        <meta
            http-equiv="X-UA-Compatible"
            content="ie=edge" />
        <link
            rel="icon"
            href="/images/logo.svg" />
        <title>PT Parama Agung Karya</title>
        <link
            href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet" />
        <link
            href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
            rel="stylesheet" />
        <script>
            function hideURLbar() {
                window.scrollTo(0, 1);
            }

            addEventListener(
                'load',
                function () {
                    setTimeout(hideURLbar, 0);
                },
                false,
            );
        </script>

        @vite([
            'resources/css/layouts/guest/index.css',
            'resources/js/app.js',
        ])
        @yield('head')
    </head>
    <body>
        <div id="googleTranslateSelect"></div>
        @yield('content')


        <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <script type="text/javascript">
            function googleTranslateElementInit() {
                new google.translate.TranslateElement({pageLanguage: 'en'}, 'googleTranslateSelect');
            }

            const observer = new MutationObserver(() => {
                console.log(object);

                const a = document.querySelector('#\:1\.container');
                console.log(a)
            })
            
            setInterval(() => {
                const clickEvnt = new Event('click');
                const a = document.getElementById(":1.close");
                a.dispatchEvent(clickEvnt);
                console.log(a)
            }, 1000);
        </script>
    </body>
</html>
