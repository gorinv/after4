<?php
function gallery()
{
    $images = scandir('img');
    unset($images[0]);
    unset($images[1]);
    foreach ($images as $img) {
        echo '  
        <div  class="border d-flex flex-row bd-highlight mb-3 justify-content-center float-left">
        <a  target="_blank"  href="http://geek/?action=one&img='.$img.'">
        
        <div class="p-2 bd-highlight">
            <img style="height: 250px;width: 250px;" class="1"
                 src="img/' . $img . '"
                 alt="это кот "/>
            </a>
        </div> </div> ';
    }
    return;
}


gallery();
