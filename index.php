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
        <div id="body_content">
            <div id="body_right">
                <div id="twitterHolder">
                    <a class="twitter-timeline"  href="https://twitter.com/LaTechACE" data-widget-id="511954506985115648">Tweets by @LaTechACE</a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
            </div>
            <div id="body_main">
                <h1>
                    Upcoming Events
                </h1>
                <iframe src="https://www.google.com/calendar/embed?src=latechace%40gmail.com&ctz=America/Chicago" style="border: 0" width="665" height="500" frameborder="0" scrolling="no"></iframe>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut eleifend nulla non neque hendrerit, sit amet facilisis nulla vestibulum. Phasellus accumsan tempus ligula, eu varius nulla imperdiet in. Cras sit amet dolor lacus. Donec sit amet bibendum nunc. Fusce eleifend aliquam massa. Donec vel convallis metus, non feugiat quam. Proin augue lorem, placerat in purus et, vulputate posuere dolor. Nunc varius, mi eget ornare consectetur, elit mi aliquam lectus, vel ultricies velit purus a sapien. Aenean tincidunt lacus et nunc tempor pulvinar. Nulla nec est ipsum. Suspendisse at aliquam libero.
                </p>
                <p>
                    Duis quis dolor eu diam volutpat hendrerit. Pellentesque tellus erat, tincidunt vitae vehicula sed, gravida non tellus. Nam sed diam iaculis, pharetra magna eu, porta enim. In eget nisl a purus cursus varius. Donec at mi quis ex molestie maximus. Morbi efficitur malesuada tortor in hendrerit. Fusce fringilla sapien augue, maximus pretium tortor malesuada id. Mauris eget dolor eu tortor congue volutpat eu eget ex. Vivamus accumsan id nulla ac aliquam. Nam rutrum arcu sed sodales laoreet. Suspendisse egestas ligula turpis, sed rutrum diam sollicitudin quis. Aenean molestie, turpis ac eleifend dapibus, elit velit feugiat urna, non pellentesque enim velit et turpis. Duis ornare mattis nunc, mollis interdum dolor luctus id. Maecenas pretium a magna vel rhoncus. Morbi velit nunc, commodo a vehicula eu, dignissim eu urna. Integer eleifend tortor ac fringilla hendrerit.
                </p>
                <p>
                    Etiam nec tempor libero, non sagittis ligula. Sed hendrerit eleifend lorem quis varius. Etiam sit amet tempor magna, ut varius quam. Vivamus posuere porta suscipit. Aenean ac dui libero. Cras euismod mollis pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed varius maximus iaculis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus malesuada commodo posuere. Fusce posuere vestibulum eros, at eleifend tellus faucibus id. Cras tempus elit eu diam mollis, in placerat enim consequat. Etiam vitae vulputate diam. Curabitur egestas elit quis felis tristique, fermentum aliquam odio congue. Aenean blandit neque finibus aliquet molestie. Nullam at porta magna, non malesuada sapien.
                </p>
                <p>
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla auctor volutpat purus a molestie. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec mattis leo eget velit lacinia sagittis. Donec eu rutrum metus. Mauris id urna ornare arcu ornare cursus. Fusce neque augue, varius ac augue at, rutrum pharetra dolor. Phasellus id sodales nisl. Nulla eget lorem pulvinar, finibus sapien eleifend, molestie ligula.
                </p>
                <p>
                    Pellentesque nisl enim, ultrices quis mauris at, tristique pharetra tortor. Nulla facilisi. Donec auctor diam eu lectus molestie porttitor. Etiam sed dui sit amet magna bibendum gravida. Donec gravida quis velit eu vulputate. Nulla vel sem eget neque vulputate auctor faucibus in velit. Maecenas sit amet dolor lacus.
                </p>
                <p>
                    In a ante enim. Morbi magna felis, accumsan vel luctus id, rhoncus at mi. Aenean tempor ante sit amet pellentesque iaculis. Morbi sed arcu leo. Aenean eget faucibus massa. Duis nec ligula sagittis, luctus ex in, euismod sapien. Ut mollis ipsum in neque molestie, mollis blandit diam elementum. Suspendisse interdum ipsum vitae metus dapibus, in sagittis tortor rutrum.
                </p>
                <p>
                    Vivamus porttitor nisi in lorem sagittis, eget iaculis ex lobortis. Curabitur sit amet aliquam dui, id pulvinar ipsum. Vivamus efficitur magna purus, ut blandit sapien pretium eu. Integer molestie ultrices porttitor. Aenean ac nulla luctus leo posuere mollis a in enim. Nullam ultricies luctus enim, quis malesuada quam aliquet ac. Aliquam erat volutpat. Suspendisse id facilisis tortor. Nulla facilisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla magna enim, sagittis ac facilisis sit amet, tristique eu quam. Pellentesque quis sapien non est eleifend rhoncus. Pellentesque mattis velit at odio semper, non ullamcorper diam pellentesque.
                </p>
                <p>
                    Aenean lobortis in mi quis pharetra. Nulla sit amet mollis mauris. Vivamus justo purus, cursus nec rutrum ut, convallis et sapien. Donec venenatis fringilla turpis, non sollicitudin libero consectetur eu. Praesent sed ex a risus feugiat rhoncus non non justo. Mauris porta porttitor mi feugiat tempor. In tristique laoreet magna in elementum. Maecenas pulvinar elit eget lorem scelerisque, in porttitor turpis finibus. Aenean quis volutpat libero, non sollicitudin urna. Duis iaculis laoreet orci, at sollicitudin libero fermentum vitae. Curabitur dolor arcu, vestibulum vel lobortis nec, eleifend suscipit est. Ut orci augue, finibus a hendrerit id, luctus et tortor. Mauris venenatis semper purus, eget venenatis felis condimentum vel. In rutrum nunc sed tempus accumsan. Proin sapien odio, molestie non nisi imperdiet, auctor sagittis erat. Vivamus id nunc tortor.
                </p>
                <p>
                    Vestibulum efficitur quis ante at scelerisque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed non tristique odio. In vulputate mi eu tortor mollis tincidunt. Donec metus felis, feugiat vitae dui vitae, ornare bibendum lacus. Phasellus tempor neque in condimentum aliquam. Cras sit amet sem et elit dignissim hendrerit vel ac ex. Nullam elementum nibh semper, accumsan ligula vitae, vestibulum eros. Mauris gravida turpis id dignissim accumsan.
                </p>
                <p>
                    Suspendisse molestie, tortor ut aliquam auctor, orci nulla tempus risus, eget vehicula mi nunc eget nunc. Donec mattis purus vitae sapien cursus ullamcorper. Aenean laoreet laoreet mi, vel ultricies dui porta et. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque nunc augue, gravida vel aliquet ut, scelerisque ut lectus. Cras laoreet tincidunt nibh, id elementum nibh placerat lobortis. Aenean ultricies nulla in libero semper, sed tempor elit hendrerit. Vestibulum fermentum lacus augue, eu pulvinar diam varius non. Vivamus interdum mauris ut ipsum aliquet, non auctor lectus aliquam. Morbi orci lacus, rhoncus sit amet imperdiet id, cursus in tellus. Donec pellentesque ultricies vehicula. Quisque pellentesque eget elit ac viverra. Curabitur porttitor ipsum in sem tincidunt, eu fringilla neque semper. Curabitur volutpat venenatis aliquet.
                </p>
                <p>
                    Morbi at lorem accumsan, maximus arcu non, condimentum justo. Morbi eget facilisis magna. Nullam eu nibh at neque egestas vestibulum. Suspendisse potenti. Curabitur nec vestibulum libero, id posuere ligula. Curabitur eros mauris, mattis non tristique nec, malesuada et massa. Praesent pulvinar cursus vehicula. Phasellus pulvinar mauris in leo luctus luctus.
                </p>
                <p>
                    In quis venenatis diam. Integer suscipit nisi nulla. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla accumsan neque arcu, sit amet malesuada erat feugiat at. Suspendisse lacus diam, finibus vel condimentum sit amet, vehicula ut tortor. Curabitur dignissim arcu urna, eu molestie elit consectetur vitae. Aliquam at ipsum sit amet libero rutrum tincidunt quis at massa. Etiam sit amet nulla maximus, venenatis justo vel, convallis velit. Donec eu auctor sem. Sed ut luctus purus. Pellentesque id rutrum diam. Maecenas in arcu nisi. Cras non nibh nec libero vulputate gravida. Donec enim elit, ultrices at erat nec, ornare tincidunt lacus. Morbi semper ultricies mauris in ullamcorper. Maecenas iaculis neque eget metus semper, nec blandit tellus luctus.
                </p>
                <p>
                    Aenean facilisis odio metus, ac consequat purus blandit vel. Nullam ante libero, molestie vitae commodo vitae, tincidunt id lacus. Donec eleifend dolor dolor, et bibendum magna tincidunt at. Fusce non lobortis neque. Integer accumsan dolor feugiat odio dapibus facilisis. Sed lobortis semper semper. Donec lacinia, nisi eu dictum tincidunt, nisl nunc tincidunt tortor, a feugiat ligula nulla mattis mi.
                </p>
                <p>
                    Proin aliquam metus massa, ac ullamcorper dui dictum id. Sed egestas convallis magna in aliquet. Nam sapien est, condimentum non blandit pharetra, convallis id tortor. Integer hendrerit tincidunt dapibus. Phasellus vestibulum nunc at feugiat porta. Praesent vehicula sed tellus et gravida. Quisque accumsan sagittis enim. In in convallis libero, a rutrum eros. Pellentesque semper molestie accumsan. Sed congue velit quis felis ultricies, non rutrum justo tempor. Praesent mattis rhoncus dui non venenatis.
                </p>
                <p>
                    Phasellus aliquet nibh et libero aliquet euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras condimentum malesuada nunc non tempor. Aliquam non convallis eros, in rutrum dui. Fusce mattis, nisl ut sodales efficitur, purus neque pellentesque neque, nec fermentum magna sem viverra tellus. Suspendisse nec egestas nulla. Ut quis sagittis quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam pretium bibendum mi eu condimentum. Proin porta scelerisque tortor vitae tempor. Maecenas fringilla consectetur ligula vel commodo. Pellentesque purus neque, accumsan ut nunc at, maximus bibendum orci. Suspendisse euismod eleifend aliquam.
                </p>
            </div>
        </div>
    </body>
</html>
