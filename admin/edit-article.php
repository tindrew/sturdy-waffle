<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require '../includes/init.php';

Auth::requireLogin();

$conn = require '../includes/db.php';


if (isset($_GET['id'])) {

    $article = Article::getByID($conn, $_GET['id']);

    if (! $article) {
        die("article not found");
    }

} else {
    die("id not supplied, article not found");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $article->title = $_POST['title'];
    $article->content = $_POST['content'];
    $article->published_at = $_POST['published_at'];

     if ($article->update($conn)) {

         Url::redirect("/admin/article.php?id={$article->id}");

     }
 }


?>
<?php require '../includes/header.php'; ?>

<h2>Edit article</h2>

<?php require 'includes/article-form.php'; ?>

<?php require '../includes/footer.php'; ?>
