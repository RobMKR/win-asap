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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">



    <link rel="stylesheet" href="/styles/style.css?v=2">

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

<div class="logout-btn">
    <a href="/logout">Դուրս Գալ</a>
</div>

@yield('content')

<!-- End Content Section -->

</body>
</html>