<!DOCTYPE html>
<html lang="de">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Keytool der Freifunkcommunity Westerwald">
    <meta name="author" content="Freifunk Westerwald Team">

    <title>Keytool - Freifunk Westerwald</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

      <script src='https://www.google.com/recaptcha/api.js'></script>
</head>


<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <h1 style="text-align:center;">Keytool</h1>

            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h4>Damit sich Router mit dem Freifunk Netzwerk verbinden können müssen diese in unserem Keytool hinterlegt werden</h4>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <form action="register.php" method="post">
                <h2>Registrieren</h2>

                <input type="hidden" id="registerOrLogin" value="register" name="registerOrLogin"/>
                <div class="form-group">
                  <label for="username">Nutzername</label>
                  <input type="text" class="form-control" id="username" placeholder="Nutzername" name="username">
                </div>
                <div class="form-group">
                  <label for="passwort">Passwort</label>
                  <input type="password" class="form-control" id="passwort" placeholder="Passwort" name="password">
                </div>
                <div class="form-group">
                  <label for="passwortwdh">Passwort Wiederholung</label>
                  <input type="password" class="form-control" id="passwortwdh" placeholder="Passwort wdh." name="passwordwdh">
                </div>
                <div class="form-group">
                  <div class="g-recaptcha" data-sitekey="6LfB9wwTAAAAAP2IBnScsKgqMqAtl6U1zxq2snKt"></div>
                </div>
                <button type="submit" class="btn btn-primary">Registrieren</button>
              </form>
            </div>

            <div class="col-md-6">
              <form>
                <h2>Anmelden</h2>

                <div class="form-group">
                  <label for="username">Nutzername</label>
                  <input autofocus="true" type="text" class="form-control" id="username" placeholder="Nutzername">
                </div>
                <div class="form-group">
                  <label for="passwort">Passwort</label>
                  <input type="password" class="form-control" id="passwort" placeholder="Passwort">
                </div>
                <button type="submit" class="btn btn-success">Anmelden</button>
              </form>
            </div>
        </div>

    </div>
</body>
</html>
