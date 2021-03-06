<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Winston</title>
    <meta name="description" content="">
    <meta name="author" content="Karen Nersisyan" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Start Theme CSS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700|Merriweather" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="/styles/style.css?v=4">
    <style>
        .logout-btn {
            position: absolute;
            right: 50px;
            top: 30px;
            text-transform: uppercase;
            font-weight: bold;
        }
        .logout-btn a {

            color: #fff;
        }
    </style>
</head>
<body>

@if(Auth::check())
    <div class="logout-btn">
        <a href="/logout">Դուրս Գալ</a>
    </div>
@endif

@yield('content')

<!-- End Content Section -->

</body>
</html>