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
                                'about' => array('About'=>'About The Association of Cyber Engineers'),
                                //'curriculum' => array('Curriculum' => 'Cyber Engineering Curriculum'),
                                //'faculty' => array('Faculty' => 'Cyber Engineering Faculty List'),
                                //'students' => array('Students' => 'Students Information'),
                                'projects' => array('Projects' => 'Association of Cyber Engineers Projects'),
                                'officers' => array('Officers' => 'Association of Cyber Engineers Officers')
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
        
    </body>
</html>
