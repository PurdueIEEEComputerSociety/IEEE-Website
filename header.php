<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <?php/* Page title is set dynamically. Do not modify.
          * window_title = page_title + (!home ? " - " + site_title).
          */?>
    <title><?php echo $page_title;?><?php if (!$home) { ?> — <?php echo $site_title; } ?></title>

    <link href="/assets/bootstrap.css" rel="stylesheet">
    <script src="/assets/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="SHORTCUT ICON" href="/favicon.ico">
    <link rel="apple-touch-icon" href="https://www.ieee.org/ucm/groups/webassets/@ieee/@web/@org/documents/images/ieee_apple_touch_icon.png">
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <?php/* Navigation button is set dynamically. Do not modify.
                      * button = !root ? back : apps.
                      */?>
                <?php if (!$root) { ?><a href="/"><?php } ?>
                <div type="button" class="navbar-left btn btn-link btn-dark" style="height: 50px; padding: 0px 15px; font-size: 18px; line-height: 20px; float: left;" aria-label="Back">
                    <i class="material-icons" style="color:white; font-size: 32px; margin-top: 8px;">
                        <?php if (!$root) { ?> arrow_back <?php } else { ?> apps <?php } ?>
                    </i>
                </div>
                <?php if (!$root) { ?> </a> <?php } ?>
                <a class="navbar-brand" href="<?php echo $site_index;?>">

                    <?php/* Site title is set dynamically. Do not modify.
                          * The site title indicates the current navigational scope.
                          * For example, committee pages have a different scope than the general IEEE page does.
                          */?>
                    <b><?php echo $site_title;?></b>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">


                <!-- BEGIN TABS -->
                    <li>
                        <a href="/about.php">About</a>
                    </li>
                    <li>
                        <a href="/calendar.php">Calendar</a>
                    </li>
                    <li class="dropdown">
                        <a href="/" class="dropdown-toggle" data-toggle="dropdown">Committees<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="/learning/">Learning</a>
                            </li>
                            <li>
                                <a href="/professional/">Professional</a>
                            </li>
                            <li>
                                <a href="/social/">Social</a>
                            </li>
                            <li>
                                <a href="/technical/">Technical</a>
                            </li>
                            <hr />
                            <li>
                                <a href="/partieee/">Aerial Robotics</a>
                            </li>
                            <li>
                                <a href="/csociety/">Computer Society</a>
                            </li>
                            <li>
                                <a href="/embs/">EMBS</a>
                            </li>
                            <li>
                                <a href="/mtts/">MTT-S</a>
                            </li>
                            <li>
                                <a href="/racing/">Racing</a>
                            </li>
                            <li>
                                <a href="/rov/">ROV</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="/join.php">Join</a>
                    </li>
                <!-- END TABS -->


                </ul>
            </div>
        </div>
    </nav>
<div class="container" style="padding-top: 10px;">
