<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Laravel Comics</title>
</head>

<body>

    <header>

        @include ('partials.header')
    </header>

    <main>

        @yield ('jumbotron')
        @include ('partials.cards')



    </main>

    <footer>
        @include ('partials.footer')
    </footer>



</body>

</html>