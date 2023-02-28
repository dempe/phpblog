<?php include '../includes/header.php' ?>
<h1>Posts</h1>
<ol>
<?php
$posts = array_diff(scandir('posts'), array('..', '.'));

foreach ($posts as $k => $v) {
    if (str_contains($v, ".ini")) {
        continue;
    }

    $base_filename = str_replace(".php", "", $v);
    $metadata = parse_ini_file("posts/" . $base_filename . ".ini");

    echo "<li>" . $metadata['creation_time'] . ":  " . "<a href=\"posts/" . $base_filename . ".php\">" . $metadata['title'] . "</a></li>";
}
?>
</ol>
<?php include '../includes/footer.php' ?>
