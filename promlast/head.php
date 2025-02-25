    <?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
    <?php $cur_dir = explode('\\', getcwd()); ?>
    <?php $x = $cur_dir[count($cur_dir) - 1]; ?>
    <?php $actual_link = (isset($_SERVER['HTTPS']) ?
        "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
    <head>
    <meta charset="utf-8">
    <meta name="author" content="Δημήτρης Καρσλίδης-Dimitris Karslidis">
    <meta name="description" content="Στον γυμναστικό σύνδεσμο Προμηθέα λειτουργούν τμήματα παραδοσιακού KUNG FU , SANDA(CHINESE BOXING), PERSONAL TRAINING , καθώς επίσης τμήμα ΚΑΛΑΘΟΣΦΑΙΡΙΣΗΣ και ΓΕΝΙΚΗΣ ΓΥΜΝΑΣΤΙΚΗΣ.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="image1.png" type="image/x-icon">
    <title>Προμηθέας Νίκαιας</title>
    <link rel="stylesheet" href="styles/prom.css?v=2.6">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css?v=2.6">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" href="styles/mediaqueries.css?v=2.6">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>