<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        Home &middot; Application theme &middot; Official Bootstrap Themes
      
    </title>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="https://bootstrap-themes.github.io/application/assets/css/toolkit.css" rel="stylesheet">
    
    <link href="https://bootstrap-themes.github.io/application/assets/css/application.css" rel="stylesheet">

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      body {
        width: 1px;
        min-width: 100%;
        *width: 100%;
      }
    </style>

  </head>


<body class="bpi">
  


<div class="bpv" id="app-growl"></div>

<nav class="ck rj aeq ro vq app-navbar">
  <button
    class="re rh ayd"
    type="button"
    data-toggle="collapse"
    data-target="#navbarResponsive"
    aria-controls="navbarResponsive"
    aria-expanded="false"
    aria-label="Toggle navigation">
    <span class="rf"></span>
  </button>

  <a class="e" href="index.html">
    <img src="https://bootstrap-themes.github.io/application/assets/img/brand-white.png" alt="brand">
  </a>

  <div class="collapse f" id="navbarResponsive">
    <ul class="navbar-nav ain">
      <li class="qx active">
        <a class="qv" href="index.html">Home <span class="aet">(current)</span></a>
      </li>
      <li class="qx">
        <a class="qv" href="profile/index.html">Profile</a>
      </li>
      <li class="qx">
        <a class="qv" data-toggle="modal" href="#msgModal">Messages</a>
      </li>
      <li class="qx">
        <a class="qv" href="docs/index.html">Docs</a>
      </li>

      <li class="qx ayd">
        <a class="qv" href="notifications/index.html">Notifications</a>
      </li>
      <li class="qx ayd">
        <a class="qv" data-action="growl">Growl</a>
      </li>
      <li class="qx ayd">
        <a class="qv" href="login/index.html">Logout</a>
      </li>

    </ul>

    <form class="pf aec ayc">
      <input class="form-control" type="text" data-action="grow" placeholder="Search">
    </form>

    <ul id="#js-popoverContent" class="nav navbar-nav aec afh ayc">
      <li class="qx">
        <a class="g qv" href="notifications/index.html">
          <span class="h bbf"></span>
        </a>
      </li>
      <li class="qx afx">
        <button class="cg bqv bqw bpq" data-toggle="popover">
          <img class="wg" src="https://bootstrap-themes.github.io/application/assets/img/avatar-dhg.png">
        </button>
      </li>
    </ul>

    <ul class="nav navbar-nav hidden-xs-up" id="js-popoverContent">
      <li class="qx"><a class="qv" href="#" data-action="growl">Growl</a></li>
      <li class="qx"><a class="qv" href="login/index.html">Logout</a></li>
    </ul>
  </div>
</nav>


<div class="by ahy">
  <div class="dq">
    <div class="fh">
      <div class="rp bqq agk">
       
       @yield('content-left')
       <!-- do somthing ... -->
      </div>
<!--
      <div class="rp bra brb agk">
        <div class="rq">
          <!-- do somthing 
        </div>
      </div>

       <div class="rp bra brb">
        <div class="rq">
     <!-- do somthing 
        </div>
      </div>
 -->   </div>

    <div class="fk">

      <ul class="ca bqe bqf agk">

        <li class="tu b ahx">
      
            <div class="om">
              <!-- do somthing -->
            </div>
          </li>
          <li class="tu b ahx">
      
            <div class="om">
              <!-- do somthing -->
            </div>
          </li>

      </ul>
    </div>
    <div class="fh">
      <div class="alert to alert-dismissible aye" role="alert">
       
        <!-- do somthing -->
      </div>

      <div class="rp agk aye">
        <div class="rq">
          <!-- do somthing -->
        </div>
      </div>

      <div class="rp agk aye">
        <div class="rq">
        
           <li class="tu">
            
            <div class="tv">
              
              
            </div>
          </li>
       
      </div>
        <div class="rw">
         <!-- do somthing -->
        </div>
      </div>

      <div class="rp bqu">
        <div class="rq">
         <!-- do somthing -->
        </div>
      </div>
    </div>
  </div>
</div>

    <script src="https://bootstrap-themes.github.io/application/assets/js/jquery.min.js"></script>    
    <script src="https://bootstrap-themes.github.io/application/assets/js/tether.min.js"></script>
    <script src="https://bootstrap-themes.github.io/application/assets/js/chart.js"></script>
    <script src="https://bootstrap-themes.github.io/application/assets/js/toolkit.js"></script>
    <script src="https://bootstrap-themes.github.io/application/assets/js/application.js"></script>
    <script>
      // execute/clear BS loaders for docs
      $(function(){
        if (window.BS&&window.BS.loader&&window.BS.loader.length) {
          while(BS.loader.length){(BS.loader.pop())()}
        }
      })
    </script>
  </body>
</html>

