<?php 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "http://newsapi.org/v2/top-headlines?country=id&apiKey=915fcb6d47e94a8396ae22d125b392c8");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
    $output = curl_exec($ch); 
    curl_close($ch);      
    $utama = json_decode($output, TRUE);
?>

<?php 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "http://newsapi.org/v2/top-headlines?country=id&category=health&apiKey=915fcb6d47e94a8396ae22d125b392c8");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
    $output = curl_exec($ch); 
    curl_close($ch);      
    $kesehatan = json_decode($output, TRUE);
?>

<?php 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "http://newsapi.org/v2/top-headlines?country=id&category=technology&apiKey=915fcb6d47e94a8396ae22d125b392c8");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
    $output = curl_exec($ch); 
    curl_close($ch);      
    $teknologi = json_decode($output, TRUE);
?>

<?php 
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, "http://newsapi.org/v2/top-headlines?country=id&category=business&apiKey=915fcb6d47e94a8396ae22d125b392c8");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);  
    $output = curl_exec($ch); 
    curl_close($ch);      
    $bisnis = json_decode($output, TRUE);
?>


