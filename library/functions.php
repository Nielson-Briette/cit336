<?php

function checkEmail($email) {
    $sanEmail = filter_var($email, FILTER_SANITIZE_EMAIL);
    $valEmail = filter_var($sanEmail, FILTER_VALIDATE_EMAIL);
    return $valEmail;
}

function checkPassword($password) {
    // Check the password for a minimum of 8 characters,
    // at least one 1 capital letter, at least 1 number and
    // at least 1 special character
    $pattern = '/^(?=.*[[:digit:]])(?=.*[[:punct:]])[[:print:]]{8,}$/';
    return preg_match($pattern, $password);
}

//function that returns a variable holding the HTML navigation list 
//to wherever called the function

function buildNav() {
    $categoriesAndIds = getCategoriesAndIds();
    $navList = '<ul>';
    $navList .= "<li><a href='../index.php' title='View the Acme home page'>Home</a></li>";
    foreach ($categoriesAndIds as $categoryAndId) {
        $navList .= "<li><a href='/acme/products/?action=category&type=$categoryAndId[categoryName]' title='View our $categoryAndId[categoryName] product line'>$categoryAndId[categoryName]</a></li>";
    }
    $navList .= '</ul>';
    return $navList;
}

//function to build a display of products with an unordered list
function buildProductsDisplay($products) {
    $pd = '<ul id="prod-display">';
    foreach ($products as $product) {
        $pd .= '<li>';
        $pd .= "<img src='$product[invThumbnail]' alt='Image of $product[invName] on Acme.com'>";
        $pd .= '<hr>';
        $pd .= "<h2>$product[invName]</h2>";
        $pd .= "<span>$$product[invPrice]</span>";
        $pd .= '</li>';
    }
    $pd .= '</ul>';
    return $pd;
}
