<?php
    $officers = array
    (
        'seansemple' => array
        (
            'name' => 'Sean Semple',
            'position' => 'President',
            'email' => '',
            'bio' => ''
        ),
        'gustavemichel' => array
        (
            'name' => 'Gustave Michel',
            'position' => 'Vice President',
            'email' => 'gam017@latech.edu',
            'bio' => ''
        ),
        'anthonyagee' => array
        (
            'name' => 'Anthony Agee',
            'position' => 'Secretary',
            'email' => '',
            'bio' => ''
        ),
        'holdenrose' => array
        (
            'name' => 'Holden Rose',
            'position' => 'Treasurer',
            'email' => '',
            'bio' => ''
        ),
        'brandonbryant' => array
        (
            'name' => 'Brandon Bryant',
            'position' => 'Historian',
            'email' => '',
            'bio' => ''
        ),
        'ashleighmulamula' => array
        (
            'name' => 'Ashleigh Mulamula',
            'position' => 'Social Media Chair',
            'email' => '',
            'bio' => ''
        )
        
        /*
        '' => array
        (
            'name' => '',
            'position' => '',
            'email' => '',
            'bio' => ''
        ),
        */
        
    );
?>

<div id="body_main">
    <?php
    foreach($officers as $key => $info)
    {
        echo '<div class="bio">';
            echo '<div class="picture">';
                echo '<img src="./resources/officers/'.$key.'.jpg" alt="Picture of '.$info['name'].'">';
            echo '</div>';
            echo '<div class="info">';
                echo '<div class="name">';
                    echo $info['name'];
                echo '</div>';
                echo '<div class="position">';
                    echo $info['position'];
                echo '</div>';
                echo '<div class="email">';
                    echo '<a href="mailto:'.$info['email'].'">'.$info['email'].'</a>';
                echo '</div>';
            echo '</div>';
        echo '</div>'."\n";
    }
    ?>
</div>