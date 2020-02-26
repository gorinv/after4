<?php
/**
 * domain.com/?action=all
 */

require '../engine/core.php';

function routeIndex()
{

    //нужно добавить в выборку ниже order by rating
    $imagesSql = getItemArray('select name from image order by rating desc');
    foreach ($imagesSql as $item) {
        $images[] = $item['name'];
    }

    echo render('gallery/all', ['images' => $images]);
}

/**
 * domain.com/?action=one&file=1.jpg
 */
function routeOne()
{
    $image = getItem('select * from image where name="'.$_GET['image'].'"');

    if (!empty($image)) {
              
        //увеличить $image['rating'] на +1 execute
     var_dump($image);
        echo render('gallery/one', ['image' => $image]);
        execute ('update image set rating = rating + 1 where name="'.$_GET['image'].'"');
    } else {
        echo render('site/error');
    }
}

function routeFill() {
    fillDataBase();
    render('site/success');
}

route();