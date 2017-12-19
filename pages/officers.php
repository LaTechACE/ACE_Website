<?php
  $officers = array
  (
    'brandonbryant' => array
    (
      'name' => 'Brandon Bryant',
      'position' => 'President',
      'email' => 'bwb016@latech.edu',
      'bio' => ''
    ),
    'madelynmcnight' => array
    (
      'name' => 'Madelyn McNight',
      'position' => 'Vice President',
      'email' => 'mnm017@LaTech.edu',
      'bio' => ''
    ),
    'zacharybrasseaux' => array
    (
      'name' => 'Zachary Brasseaux',
      'position' => 'Secretary',
      'email' => 'zpb004@LaTech.edu',
      'bio' => ''
    ),
    'audreymcnew' => array
    (
      'name' => 'Audrey McNew',
      'position' => 'Treasurer',
      'email' => 'aem038@LaTech.edu',
      'bio' => ''
    ),
    'kristinakhalidabasi' => array
    (
      'name' => 'Kristina Khalid-Abasi',
      'position' => 'Social Media Officer',
      'email' => 'kak031@LaTech.edu',
      'bio' => ''
    ),
    'justinberthelot' => array
    (
      'name' => 'Justin Berthelot',
      'position' => 'ESA Representative',
      'email' => 'jmb143@LaTech.edu',
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
