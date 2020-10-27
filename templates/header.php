<!doctype html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <!-- Fontawesome (Icons) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title><?= $title; ?> | Bbc MVC</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">gibbit</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto w-50">
                <li class="nav-item active w-25 text-center">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item w-25 text-center">
                    <a class="nav-link" href="/post">Posts</a>
                </li>
                <li class="nav-item w-25 text-center">
                    <a class="nav-link" href="/about">Über Uns</a>
                </li>
                <li class="nav-item w-25 text-center">
                    <a class="nav-link" href="#"><i class="fa fa-lg fa-user"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<main class="container">