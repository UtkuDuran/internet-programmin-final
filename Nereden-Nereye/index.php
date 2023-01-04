<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Nereden-Nereye</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="ie-emulation-modes-warning.js"></script>
  <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">
</head>
<!-- NAVBAR
================================================== -->

<body>
  <div class="navbar-wrapper">
    <div class="container">

      <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
              aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Nereden Nereye</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Anasayfa</a></li>
              <li><a href="#about">Hakkımıızda</a></li>
              <li><a href="#contact">İletişim</a></li>
              <li><a href="#contact">Hizmetler</a></li>
              <li><a href="#contact">Paketler</a></li>
              <li><a href="uyelik/uyekayit.php">Üye Ol</a></li>
              <li><a href="#contact">Giriş Yap</a></li>
            </ul>
          </div>
        </div>
      </nav>

    </div>
  </div>


  <!-- Carousel
    ================================================== -->
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="first-slide" src="" alt="hızı anlatan görsel">
        <div class="container">
          <div class="carousel-caption">
            <p>Bronz Paket</p>
            <p>
              <a class="btn btn-lg btn-primary" href="Bronz Detay.html" role="button">Detaylar</a>
            </p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="second-slide" src="" alt="Second slide">
        <div class="container">
          <div class="carousel-caption">
            <p>Gümüş Paket</p>
            <p><a class="btn btn-lg btn-primary" href="Gümüş Detay.html" role="button">Detaylar</a></p>
          </div>
        </div>
      </div>
      <div class="item">
        <img class="third-slide"
          src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
        <div class="container">
          <div class="carousel-caption">
            <p>Altın Paket</p>
           <p><a class="btn btn-lg btn-primary" href="Gümüş Detay.html" role="button">Detaylar</a></p>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><!-- /.carousel -->


  <!-- Marketing messaging and featurettes
    ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="img-rectangle" src="img/azure-app-service-web-apps-with-yochay-kiriaty.png"
          alt="Azure App Service Web Apps with Yochay Kiriaty" height="140">
        <h2>Websites and apps</h2>
        <p>The Web Apps feature in Azure App Service lets developers rapidly build, deploy, and manage powerful websites
          and web apps. Build standards-based web apps and APIs using .NET, Node.js, PHP, Python, and Java. Deliver both
          web and mobile apps for employees or customers using a single back end. Securely deliver APIs that enable
          additional apps and devices.</p>
        <p><a class="btn btn-default"
            href="https://azure.microsoft.com/en-us/documentation/videos/azure-app-service-web-apps-with-yochay-kiriaty/"
            role="button">Watch a video &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-rectangle" src="img/02-familiar.png" alt="" height="140">
        <h2>Familiar and fast</h2>
        <p>Use your existing skills to code in your favorite language and IDE to build APIs and apps faster than ever.
          Access a rich gallery of pre-built APIs that make connecting to cloud services like Office 365 and
          Salesforce.com easy. Use templates to automate common workflows and accelerate your development. Experience
          unparalleled developer productivity with continuous integration using Visual Studio Team Services, Github, and
          live-site debugging.</p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-rectangle" src="img/03-enterprise.png" alt="" height="140">
        <h2>Enterprise grade</h2>
        <p>App Service is designed for building and hosting secure mission-critical applications. Build Azure Active
          Directory-integrated business apps that connect securely to on-premises resources, then host them on a secure
          cloud platform that's compliant with ISO information security standard, SOC2 accounting standards, and PCI
          security standards. Automatically back up and restore your apps, all while enjoying enterprise-level SLAs.</p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-rectangle" src="img/04-scale.png" alt="" height="140">
        <h2>Global scale</h2>
        <p>App Service provides availability and automatic scale on a global datacenter infrastructure. Easily scale
          applications up or down on demand, and get high availability within and across different geographical regions.
          Replicating data and hosting services in multiple locations is quick and easy, making expansion into new
          regions and geographies as simple as a mouse click.</p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="img-rectangle" src="img/05-dev.png" alt="" height="140">
        <h2>Optimized for DevOps</h2>
        <p>Focus on rapidly improving your apps without ever worrying about infrastructure. Deploy app updates with
          built-in staging, roll-back, testing-in-production, and performance testing capabilities. Achieve high
          availability with geo-distributed deployments. Monitor all aspects of your apps in real-time and historically
          with detailed operational logs. Never worry about maintaining or patching your infrastructure again.</p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- FOOTER -->
    <footer>
      <p class="pull-right"><a href="#">Back to top</a></p>
      <p>&copy; 2016 Microsoft Corp. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
    </footer>

  </div><!-- /.container -->


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="ie10-viewport-bug-workaround.js"></script>
</body>

</html>