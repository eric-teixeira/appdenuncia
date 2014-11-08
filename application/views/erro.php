<?php
    if(isset($erro))
    {
        echo '<div class="alert alert-danger msg-alert" role="alert">';
        echo "<p>$erro</p>";
        echo '</div>';
    }
    else if(isset($success))
    {
        echo '<div class="alert alert-success" role="alert">';
        echo "<p>$success</p>";
        echo '</div>';
    }
?>