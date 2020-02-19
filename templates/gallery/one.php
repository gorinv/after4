<?php 
    $img=htmlspecialchars($_GET["img"]); 
    $img=stripslashes($img); 
    if (file_exists("img/$img")) 
    { 
    echo (' 
    <div class="border d-flex flex-row bd-highlight mb-3 justify-content-center float-left">
    <div class="card main-page-card">
    <div class="card-img"> 
        <img class="embed-responsive-item" style="height: 1000px;width: 1000px;" src="img/' . $img . '"
             alt="это кот "/>
        </a>
    </div> 
    </div>
    </div>' );
    }
    else {
        echo "хек";
    }