<?php



include 'header.php';
if (isset($_GET['page']) && $_GET['page'] == 'articles') {
    include 'articles.php';
} else {
    include 'content.php';    
}

include 'footer.php';
