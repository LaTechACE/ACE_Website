<?php
    $officers = array
    (
        'seansemple' => array
        (
            'name' => 'Sean Semple',
            'position' => 'President',
            'email' => 'sms079@latech.edu',
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
            'email' => 'aaa029@latech.edu',
            'bio' => ''
        ),
        'holdenrose' => array
        (
            'name' => 'Holden D. Rose',
            'position' => 'Treasurer',
            'email' => 'hdr004@latech.edu',
            'bio' => ''
        ),
        'brandonbryant' => array
        (
            'name' => 'Brandon Bryant',
            'position' => 'Historian',
            'email' => 'bwb016@latech.edu',
            'bio' => ''
        ),
        'ashleighmulamula' => array
        (
            'name' => 'Ashleigh Mulamula',
            'position' => 'Social Media Chair',
            'email' => 'amu007@latech.edu',
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
        echo '<div class="well row">';
            echo '<div class="col-me-2 col-sm-3">';
                echo '<img src="./resources/officers/'.$key.'.jpg" alt="Picture of '.$info['name'].'">';
            echo '</div>';
            echo '<div class="col-me-10 col-sm-9">';
                echo '<div>'.$info['name'].'</div>';
                echo '<div>'.$info['position'].'</div>';
                echo '<div><a href="mailto:'.$info['email'].'">'.$info['email'].'</a></div>';
                echo '<div>'.$info['bio'].'</div>';
            echo '</div>';
        echo '</div>'."\n";
    }
    ?>
</div>
