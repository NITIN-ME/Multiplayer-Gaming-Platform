
<!DOCTYPE html>
<html class="no-js" lang="en" itemscope
    itemtype="http://schema.org/WebPage"
>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#">
    <style>

.chooser {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.chooser:hover .dropdown-content {
    display: block;
}

.chooser:hover .dropbtn {
    background-color: #3e8e41;
}

</style>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="https://system76.com/pop" />

      <title>Online Gaming portal</title>
      <meta name="description" content="Imagine an OS for the software developer, maker and computer science professional who uses their computer as a tool to discover and create. Welcome to Pop!_OS.">

    <link rel="icon" sizes="196x196" href="https://d1vhcvzji58n1j.cloudfront.net/assets/icon-196-1e64d821bf.png">
    <link rel="manifest" href="/manifest.json">

      <link rel="stylesheet" type="text/css" media="all" href="https://d1vhcvzji58n1j.cloudfront.net/assets/app-v2.min-03e6a0769e.css">

    <!--[if lt IE 10]><script>document.documentElement.className += " legacy";</script><![endif]-->

    <meta itemprop="url"  content="https://system76.com/pop">
    <meta itemprop="logo" content="https://d1vhcvzji58n1j.cloudfront.net/assets/icon-196-1e64d821bf.png">
    
      <meta itemprop="description" content="Imagine an OS for the software developer, maker and computer science professional who uses their computer as a tool to discover and create. Welcome to Pop!_OS.">
    
        <meta itemprop="image" content="https://d1vhcvzji58n1j.cloudfront.net/assets/pop/galp2-with-pop-3076bbd92b.png">
    
        <meta itemprop="name" content="Pop!_OS by System76">
    <meta property="og:url" content="https://system76.com/pop">
    <meta property="fb:app_id" content="346948125501334">
    
      <meta property="og:description"  content="Imagine an OS for the software developer, maker and computer science professional who uses their computer as a tool to discover and create. Welcome to Pop!_OS.">
    
        <meta property="og:image" content="https://d1vhcvzji58n1j.cloudfront.net/assets/pop/galp2-with-pop-3076bbd92b.png">
    
      <meta property="og:type" content="website">
    
        <meta property="og:title"  content="Pop!_OS by System76">
    <meta name="twitter:card"    content="summary_large_image">
    <meta name="twitter:site"    content="@system76">
    <meta name="twitter:creator" content="@system76">
    
      <meta name="twitter:description" content="Imagine an OS for the software developer, maker and computer science professional who uses their computer as a tool to discover and create. Welcome to Pop!_OS.">
    
        <meta name="twitter:image:src" content="https://d1vhcvzji58n1j.cloudfront.net/assets/pop/galp2-with-pop-3076bbd92b.png">
    
        <meta name="twitter:title" content="Pop!_OS by System76">
    <meta name="pinterest" content="nopin">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#574e4a">
    
    <link href="https://plus.google.com/104919222657565747428" rel="publisher" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="https://d1vhcvzji58n1j.cloudfront.net/assets/touch-icon-iphone-retina-51b991bc3a.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="https://d1vhcvzji58n1j.cloudfront.net/assets/touch-icon-ipad-retina-3ac9d209e6.png" />

      <script>
        var fbSent = false;
    
        function facebookStatusChangeCallback(response) {
          if (response.status === 'connected' && fbSent) {
            window.oauthSuccess('facebook', response.authResponse.accessToken);
          }
        }
    
        function facebookCheckLoginState() {
          FB.getLoginStatus(function(response) {
            facebookStatusChangeCallback(response);
          });
        }
    
        function facebookLogin() {
          fbSent = true;
          FB.login(
            facebookCheckLoginState,
            {
              scope: 'email'
            }
          );
        }
    
        window.fbAsyncInit = function() {
          FB.init({
            appId: '346948125501334',
            cookie: true,
            xfbml: true,
            version: 'v2.1'
          });
    
          FB.getLoginStatus(function(response) {
            facebookStatusChangeCallback(response);
          });
        };
    
        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_US/sdk.js";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>
      <script>
        function githubLogin() {
          var gitHubWindow = popupCenter(
            "https://github.com/login/oauth/authorize?" +
            "client_id=dc1b6955f316f6f4633b" +
            "&scope=user,user:email",
            "GitHub"+Date.now(),
            1024,
            600
          );
        }
      </script>
      <meta name="google-signin-clientid" content="118911812273-tsqn79u4hm451chlbhm1gkkt63ttgoq9.apps.googleusercontent.com" />
      <meta name="google-signin-scope" content="email" />
      <meta name="google-signin-cookiepolicy" content="single_host_origin" />
      <script src="https://apis.google.com/js/client:platform.js?onload=googleRender" async defer></script>
    
      <script>
        function googleLogin() {
          gapi.auth.signIn({
            'callback': googleSigninCallback
          });
        }
    
        function googleSigninCallback(authResult) {
          if (authResult['status']['signed_in']) {
            if( authResult['status']['method'] == 'PROMPT' ) {
              window.oauthSuccess("google", authResult['access_token']);
            }
          }
        }
      </script>
    

    <meta name="api_url" content="https://api-v2.system76.com">
      <meta name="zopim">

    <script>
      window.__vueComponentInitializationQueue = [];
    </script>
  </head>
  <body class="path-pop ">
    <div id="page-container">
      <header class="omni">
        <section class="content">
      
      
            <a href="/pro/register.html" alt="Special Offers" class="button ">
              REGISTER
            </a>
            <?php
            session_start();
            if ($_SESSION['loggedin'] == true)
            {
              echo "Hello ".$_SESSION['username'];
              echo '<form action="/pro/login.php">';
              echo '<input type="submit" name="logout" value="logout">';
              echo '</form>';
            }
            else{
              echo "To play the games, please Login first........";
            }
            ?>
      
      
        </section>
      </header>
      <header class="main">
        <nav>
            <ul class="categories">
          	 <li><a href="/pro/home.php" class=" current">Home</a></li>
            <li><a href="http://192.168.10.103:8080" target="_blank">Chat</a></li>
            <?php
            session_start();
            if ($_SESSION['loggedin'] == true)
            {
              echo '<li><a href="/pro/user.php" >User</a></li>';
            }
            else{
              echo "please Login first........";
            }
            ?>
            
            <li><a href="/pro/leaderboards.php" >Leaderboards</a></li>
          </ul>

        </nav>
      </header>

      <main id="page-content">


<section class="intro">
  <p>The further you get into technology ,the further you go into gaming. That's the general rule.</p>
  <h3>Welcome to</h3>
  <picture width="1000" height="1000" alt="Pop!_OS">
    <source srcset="Maxx brown (2).jpg"/>
    <source srcset="Maxx brown (2).jpg"/>
    <source srcset="Maxx brown (2).jpg" />
    <img width="1000" height="1000" src="Maxx brown (2).jpg"/>
    <section class="content">
            <a href="/pro/login.php" alt="Special Offers" class="button ">
              LOGIN
            </a>
        </section>
  </picture>
</section>

<section class="content imagine automation">
  <h2>Imagine</h2>
  <h3>HASSLE-FREE USER-FRIENDLY INTERFACE</h3>
  <p>The hassle-free, user-friendly inteface and the newly arrived
  google/facebook based signup/login system helps in quick entry without 
  wasting time in filling details and verification which makes it an 
   excellent platform for gamers all around the globe.</p>
  <div class="robot" data-animate data-animation-classes="visible">
    <img src="https://d1vhcvzji58n1j.cloudfront.net/assets/pop/robot-shape-07c4a6e853.svg" alt="a sweet robot">
  </div>
</section>

<section class="content imagine development">
  <h2>Imagine</h2>
  <h3>REAL-TIME CHATTING WITH COMPETITORS</h3>
  <p>The client-server-client mechanism that is used to create and 
  store the database of the gamers is also created in such a way 
  the players can do real time chatting with other players and play
  all at tthe same time.</p>
  <pre class="terminal"><samp>ben@pop-os:~/Projects/hal$ mix test --trace
Compiling 176 files (.ex)
Generated hal app


12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM

12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM
12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM
12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM

12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM

12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM

12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM

12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM

12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM

12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM

12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM

12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM

12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM

12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM

12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM

12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM

12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM

12:06 Tantek: what does the datetime stamp represent?
12:07 KevinMarks: in iRC, when it was said
12:07 Tantek: is it a point in time *before* they started speaking?
12:07 Tantek: or *after*?
12:07 Tantek: or somewhere in the *middle*?
12:07 KevinMarks: usually it is quantised to seconds
12:07 KevinMarks: and it is time the msg was received
12:07 Tantek: but the second they started typing or pressed return?
12:08 KevinMarks: prssed return i think

**** BEGIN LOGGING AT Wed May 14 04:36:29 2003

May 14 04:36:29 -->     You are now talking on #test
May 14 04:36:29 ---     Topic for #test is Test Topic
May 14 04:36:29 ---     Topic for #test set by nick1 at Thu May  8 18:45:05
May 14 04:58:45 ---     You are now known as nick1
May 14 05:03:44 -->     nick1 (~nick1@2.1.3.narf-42905) has joined #test
May 14 05:05:48 <nick1> test message
May 14 05:10:24 *       nick1 test action
May 14 05:11:19 <--     nick1 has quit (quit)

**** ENDING LOGGING AT Fri Jul  4 00:28:22 2003

Log file opened at: 5/26/04 12:00:11 AM
[12:00:11:] nick1: test message
[12:10:29:] * nick1 test action
[12:13:16:] ***: nick2 (~nick2@test.net) has joined the channel
[12:20:35:] ***: nick2 has quit IRC ("Computer going to sleep...")
[12:21:31:] ***: You have joined the channel
Log file closed at: 5/26/04 2:29:08 AM

Finished in 0.1 seconds
407 tests, 0 failures, 2 skipped

Randomized with seed 285
</samp></pre>
</section>

<section class="content imagine workflow">
  <h2>Imagine</h2>
  <h3>Stunning graphics and amazing gameplay</h3>
  <p>The stunning graphics and the amazing gameplay is enough to make one feel a touch passionate reasoning about the greater part of the experiences.</p>
  <div class="overlay">
    <div class="video-frame">
      <video
        autoplay="autoplay"
        class="workspaces visible"
        loop="loop"
        muted="muted"
        onclick="this.play();"
        poster="https://d1vhcvzji58n1j.cloudfront.net/assets/pop/workflow-workspaces-poster-c8d08344c9.jpg"
        preload="preload"
      >
        <source
        src="car.mp4"
        type="video/mp4"

        />
        <source
        src="car.mp4"
        type="video/mp4"
        />
        <img
        src="https://d1vhcvzji58n1j.cloudfront.net/assets/pop/workflow-workspaces-0a512643a9.jpg"
        alt="Fallback"
        />
      </video>

      <video
        class="windows"
        loop="loop"
        muted="muted"
        onclick="this.play();"
        poster="https://d1vhcvzji58n1j.cloudfront.net/assets/pop/workflow-windows-poster-a28b0fcf77.jpg"
        preload="preload"
      >
        <source
        src="archery.mp4"
        type="video/mp4"
        />
        <source
        src="archery.mp4"
        type="video/mp4"
        />
        <img
        src="https://d1vhcvzji58n1j.cloudfront.net/assets/pop/workflow-windows-57e311de45.jpg"
        alt="Fallback"
        />
      </video>

      <video
        class="keyboard"
        loop="loop"
        muted="muted"
        onclick="this.play();"
        poster="https://d1vhcvzji58n1j.cloudfront.net/assets/pop/workflow-keyboard-poster-9e1c4b5720.jpg"
        preload="preload"
      >
        <source
        src="space.mp4"
        type="video/mp4"
        />
        <source
        src="space.mp4"
        type="video/mp4"
        />
        <img
        src="https://d1vhcvzji58n1j.cloudfront.net/assets/pop/workflow-keyboard-1339ef925e.jpg"
        alt="Fallback"
        />
      </video>
    </div>
  </div>

  <p class="caption workspaces visible">Enjoy the free flow car game </p>
  <p class="caption windows">Experience the rush of a duel while having only one weapon...An ARROW</p>
  <p class="caption keyboard">Experience the alien invasion while fighting to save the earth.</p>
<div class="ankan" align="center">
  <aside class="chooser">
    <button class="dropbtn" onclick="playVideo('workflow', 'workspaces')">Virtual BAJA</button>
    <?php
            session_start();
            if ($_SESSION['loggedin'] == true)
            {
              echo '<div class="dropdown-content">';
              echo '<a href="/pro/car.php">PLAY</a>';
              echo '</div>';
            }
            else{
              echo '<div class="dropdown-content">';
              echo '<a href="/pro/login.php">login first</a>';
              echo '</div>';
            }
            ?>
     
      </aside>
      <aside class="chooser">
    <button class="dropbtn" onclick="playVideo('workflow', 'windows')">Yuudh 2D</button>
    <?php
            session_start();
            if ($_SESSION['loggedin'] == true)
            {
              echo '<div class="dropdown-content">';
              echo '<a href="/pro/start.php">Play</a>';
              echo '</div>';
            }
            else{
              echo '<div class="dropdown-content">';
              echo '<a href="/pro/login.php">login first</a>';
              echo '</div>';
            }
            ?>
      </aside>
      <aside class="chooser">
    <button class="dropbtn" onclick="playVideo('workflow', 'keyboard')">COSMIC WARFARE</button>
    <?php
            session_start();
            if ($_SESSION['loggedin'] == true)
            {
              echo '<div class="dropdown-content">';
              echo '<a href="/pro/space.php">Play</a>';
              echo '</div>';
              
            }
            else{
              echo '<div class="dropdown-content">';
              echo '<a href="/pro/login.php">login first</a>';
              echo '</div>';
            }
            ?>
      </aside>
</div>
</section>
<section class="content imagine intelligent">
  <h2>Imagine</h2>
  <h3>a record of your gameplay performance</h3>
  <p>One of the latest feature introduced into our games is that it can show a graphical chart of your
  past gameplay performances(number of wins, losses and ties) and the parameters can be set by the players.</p>
</section>

<div class="scan">
  <div class="planets"></div>
  <div class="planets"></div>
  <div class="planets"></div>
  <div class="planets"></div>

  <div class="lines"></div>
  <div class="lines"></div>
</div>

<section class="content imagine features">
  <h2>Imagine</h2>
  <h3>AUDIO RESPONSES FOR DIFFERENT EVENTS</h3>
  <p>For every different event occurs, a totally brand new audio system is used to bring life into the gameplay. The HD quality of the sounds will give you a real experience of the games.</p>
  

 
</section>

<section id="download" class="outro">
  <h2>Imagine</h2>
  <h3>a totally new rating algorithm for your scores</h3>
  <p>This time your gameplay ratings are not just from the scores of the games but they will be calculated based on a totally new algorithm. So not only does the rating calculation take total scores, your number of gameplay will account into your over leaderboards.</p>

  <h3 class="download">What Will YOU Play</h3>

  <section class="content">
            <a href="/pro/login.php" alt="Special Offers" class="button ">
              PLAY
            </a>
        </section>

<script>
  function playVideo(sectionClass, videoClass) {
    let section = document.querySelector('section.' + sectionClass),
        otherVideos = section.querySelectorAll('video:not(.' + videoClass + ')'),
        newVideo = section.querySelector('video.' + videoClass),
        otherParagraphs = section.querySelectorAll('p.caption:not(.' + videoClass + ')'),
        newParagraph = section.querySelector('p.caption.' + videoClass),
        otherButtons = section.querySelectorAll('button:not(.' + videoClass + ')'),
        newButton = section.querySelector('button.' + videoClass);

    newVideo.load();
    newVideo.play();

    for (let i = 0; i < otherVideos.length; i++) {
      let thisVideo = otherVideos[i];

      thisVideo.classList.remove('visible');
    }
    newVideo.classList.add('visible');

    for (let i = 0; i < otherParagraphs.length; i++) {
      let thisParagraph = otherParagraphs[i];

      thisParagraph.classList.remove('visible');
    }
    newParagraph.classList.add('visible');

    for (let i = 0; i < otherButtons.length; i++) {
      let thisButton = otherButtons[i];

      thisButton.classList.remove('active');
    }
    newButton.classList.add('active');
  }

  function onDownload (label) {
    ga('send', {
      hitType: 'event',
      eventCategory: 'Pop!_OS',
      eventAction: 'Download',
      eventLabel: label,
    })
  }
</script>


      </main>

      <footer class="main">
        <nav class="secondary">
          <ul class="pages">
            <li><a href="/contact">Contact</a></li>
            <li><a href="/support">Support</a></li>
            <li><a href="/about">About Us</a></li>
          </ul>
          <ul class="social">
            <li><a href="https://www.facebook.com/Aviato-597092267302269/" title="Facebook"><i class="fa fa-facebook"></i> Facebook</a></li>
            <li><a href="https://github.com/system76" title="GitHub"><i class="fa fa-github"></i> GitHub</a></li>
            <li><a href="https://plus.google.com/u/0/104919222657565747428" title="Google+"><i class="fa fa-google-plus"></i> Google+</a></li>
          </ul>
        </nav>
      
        
      </footer>
    </div>

      <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
      <script type="text/javascript" src="https://x.klarnacdn.net/kp/lib/v1/api.js"></script>
      <script type="text/javascript">
        Stripe.setPublishableKey("pk_live_LvaggT7SlV0xsTG4gNBT2JPq");
      </script>

      <script type="text/javascript" src="https://x.klarnacdn.net/kp/lib/v1/api.js"></script>
      <script src="https://us-library.klarnaservices.com/merchant.js?uci=fdbae8a8-73a9-47d2-a4fb-2cfa72eade68&country=US"></script>

    <div class="tracking">
        <script>
          window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
          d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
          _.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
          $.src='//v2.zopim.com/?2ieIQGcICfW1o0au2y9L5yjjb4aTUmZg';z.t=+new Date;$.
          type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
        </script>

          <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
            ga('create', 'UA-196052-1', 'auto');
            ga('send', 'pageview');
          </script>

          <script src="https://secure.quantserve.com/aquant.js?a=p-tDf-DLsNWdQph" async defer></script>
          <script>
            var ezt = ezt ||[];
            ezt.push({ qacct: 'p-tDf-DLsNWdQph', orderid: '', revenue: ''});
          </script>
          <noscript>
            <img src="//pixel.quantserve.com/pixel/p-tDf-DLsNWdQph.gif?labels=_fp.event.Default" style="display: none;" border="0" height="1" width="1" alt="Quantcast"/>
          </noscript>
        
            <script type="text/javascript">
              /* <![CDATA[ */
              var google_conversion_id = 1068332445;
              var google_conversion_language = "en";
              var google_conversion_label = "c2onCLG-igUQneu1_QM";
              var google_custom_params = window.google_tag_params;
              var google_remarketing_only = true;
              /* ]]> */
            </script>
            <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
            <noscript>
              <div style="display:inline;">
                <img height="1" width="1" style="border-style:none;" alt="Google remarketing pixel" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/1068332445/?value=0&amp;label=c2onCLG-igUQneu1_QM&amp;guid=ON&amp;script=0"/>
              </div>
            </noscript>
        
            <script type="text/javascript">
              /* <![CDATA[ */
              var google_conversion_id = 1068332445;
              var google_custom_params = window.google_tag_params;
              var google_remarketing_only = true;
              /* ]]> */
            </script>
            <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
            <noscript>
              <div style="display:inline;">
                <img height="1" width="1" style="border-style:none;" alt="Google remarketing pixel" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1068332445/?value=0&amp;guid=ON&amp;script=0"/>
              </div>
            </noscript>
            <script type="text/javascript">
              /* <![CDATA[ */
              var google_conversion_id = 993752734;
              var google_conversion_language = "en";
              var google_conversion_label = "T0XwCIqNswkQnu3t2QM";
              var google_custom_params = window.google_tag_params;
              var google_remarketing_only = true;
              /* ]]> */
            </script>
            <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
            <noscript>
              <div style="display:inline;">
                <img height="1" width="1" style="border-style:none;" alt="Google remarketing pixel" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/993752734/?value=0&amp;label=T0XwCIqNswkQnu3t2QM&amp;guid=ON&amp;script=0"/>
              </div>
            </noscript>
        
            <script type="text/javascript">
              /* <![CDATA[ */
              var google_conversion_id = 993752734;
              var google_custom_params = window.google_tag_params;
              var google_remarketing_only = true;
              /* ]]> */
            </script>
            <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
            <noscript>
              <div style="display:inline;">
                <img height="1" width="1" style="border-style:none;" alt="Google remarketing pixel" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/993752734/?value=0&amp;guid=ON&amp;script=0"/>
              </div>
            </noscript>
        
    </div>

    <script src="https://d1vhcvzji58n1j.cloudfront.net/assets/app-v2-f2f916387e.js"></script>
  </body>
</html>
