<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laracasts Assets</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="font-sans">
<div id="app">
    <div class="container mx-auto">
        <header class="py-6 mb-8">
            <h1>
                <img alt="Laracasts" src="/images/logo.svg">
            </h1>
        </header>

        <main class="flex">
            <aside class="w-1/5">
                <section class="mb-8 ">
                    <h4 class="uppercase font-bold mb-3">The Brand</h4>

                    <ul class="list-reset">
                        <li class="text-sm leading-loose"><router-link class="text-black"  exact to="/">Logo</router-link></li>
                        <li class="text-sm leading-loose"><router-link class="text-black"  to="/logo-symbol">Logo Symbol</router-link></li>
                        <li class="text-sm leading-loose"><router-link class="text-black"  to="/colors">Colors</router-link></li>
                        <li class="text-sm leading-loose"><router-link class="text-black"  to="/typography">Typography</router-link></li>
                    </ul>
                </section>
                <section>
                    <h4 class="uppercase font-bold mb-3">Doodles</h4>

                    <ul class="list-reset">
                        <li class="text-sm leading-loose"><router-link class="text-black"  to="/mascot">Mascot</router-link></li>
                        <li class="text-sm leading-loose"><router-link class="text-black"  to="/illustrations">Illustrations</router-link></li>
                        <li class="text-sm leading-loose"><router-link class="text-black"  to="/loaders-and-animations">Loaders and Animations</router-link></li>
                        <li class="text-sm leading-loose"><router-link class="text-black"  to="/wallpapers">Wallpapers</router-link></li>
                    </ul>
                </section>
                <section class="mt-8">
                    <h4 class="uppercase font-bold mb-3">Site States</h4>

                    <ul class="list-reset">
                        <li class="text-sm leading-loose"><router-link class="text-black"  to="/site-states">Site States</router-link></li>
                    </ul>
                </section><section class="mt-8">
                    <h4 class="uppercase font-bold mb-3">Site States</h4>

                    <ul class="list-reset">
                        <li class="text-sm leading-loose"><router-link class="text-black"  to="/achievements">Achievements</router-link></li>
                    </ul>
                </section>

            </aside>

            <div class="primary flex-1">
                <router-view></router-view>
            </div>
        </main>
    </div>
</div>

<script src="/js/app.js"></script>
</body>
</html>
