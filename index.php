<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="resources/styles.css" rel="stylesheet" type="text/css">
        <title>The Association of Cyber Engineers @ Louisiana Tech</title>
    </head>
    <body>
        <div id="top_scroller">
            <div id="main_top">
                <div id="top">
                    <div id="logo">
                        <a href="/" title="Cyber Engineering at Louisiana Tech University"><img src="resources/logo.png" alt="Association of Cyber Engineers at Louisiana Tech University"></a>
                    </div>
                    <div id="t_nav">
                        <?php
                            $links = array(
                                'home' => array('Home'=>'Cyber Engineering Homepage'),
                                'about' => array('About'=>'About Cyber Engineering Program'),
                                'curriculum' => array('Curriculum' => 'Cyber Engineering Curriculum'),
                                'faculty' => array('Faculty' => 'Cyber Engineering Faculty List'),
                                'students' => array('Students' => 'Students Information'),
                                'research' => array('Research' => 'Research Opportunities'),
                                'contacts' => array('Contact' => 'Cyber Engineering Contact Information')
                                //'' => array('' => ''),
                            );
                            if(!isset($_GET['p']))
                                $_GET['p'] = 'home';
                            foreach($links as $url => $info) {
                                foreach($info as $text => $title) {
                                    if($_GET['p'] == $url)
                                        echo '<span class="t_nav_active">'.$text.'</span>';
                                    else
                                        echo '<a href="index.php?p='.$url.'" title="'.$title.'">'.$text.'</a>';
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div id="body_content_wrapper">
            <div id="body_content">
                <div id="body_right">
                    <div id="twitterHolder">
                        <a class="twitter-timeline"  href="https://twitter.com/LaTechACE" data-widget-id="511954506985115648">Tweets by @LaTechACE</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>
                </div>
                <div id="body_main">
                    <?php
                        if(!isset($_GET['p']) || !array_key_exists($_GET['p'], $links))
                        {
                            $_GET['p'] = 'home';
                        }
                        if(file_exists('./pages/'.$_GET['p'].'.php'))
                        {
                            include "./pages/".$_GET['p'].".php";
                        }
                        else
                        {
                            echo '<center>Page not Found!</center>';
                        }
                    ?>
                </div>
            </div>
        </div>
        
    </body>
</html>
