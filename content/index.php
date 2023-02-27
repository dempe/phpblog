<?php include '../includes/header.php' ?>
<h1>Posts</h1>

<?php
$posts = array_diff(scandir('posts'), array('..', '.'));

foreach ($posts as $k => $v) {
    if (str_contains($v, ".ini")) {
        continue;
    }
    $base_filename = str_replace(".php", "", $v);
    $metadata = parse_ini_file("posts/" . $base_filename . ".ini");


    $listing =  "<a href=\"posts/" . $base_filename . ".php\">" . $metadata['title'] . "</a>" . "<br>";
    $listing = $metadata['creation_time'] . " - " . $listing;

    echo $listing;
}
?>

<?php include '../includes/footer.php' ?>
