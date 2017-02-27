 <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
          <span class="sr-only">Toggle Navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Branding Image -->
        <a class="navbar-brand" href="index.php">
         <img width="80px" class="logo-top" src="img/logo.png"/>
       </a>
     </div>

     <div class="collapse navbar-collapse" id="app-navbar-collapse">
      <!-- Left Side Of Navbar -->
      <ul class="nav navbar-nav">
        <li>
        <form action="results.php" method="GET">
          <div class="field top-bar-search" id="searchform">
            <input type="text" name="q" autofocus required value="<?= $searchQuery; ?>" />
          </div>
        </form>
        </li>
      </ul>
    </div>
  </div>
</nav>