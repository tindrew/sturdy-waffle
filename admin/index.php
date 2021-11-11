<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);





require '../includes/init.php';

Auth::requireLogin();

$conn = require '../includes/db.php';

$articles = Article::getAll($conn);

?>
<?php require '../includes/header.php'; ?>


<h2>Administration</h2>

<p><a href="new-article.php">New article</a></p>

<?php if (empty($articles)) : ?>
    <p>No articles found.</p>
<?php else : ?>

   <table>
      <thead>
         <th>Title</th>
      </thead>
      <tbody>
         <?php foreach ($articles as $article) : ?>
             <tr>
                 <td>
                     <a href="article.php?id=<?= $article['id']; ?>"><?=
                     htmlspecialchars($article['title']); ?></a>
                 </td>
             </tr>
         <?php endforeach; ?>
      </tbody>
   </table>


<?php endif; ?>

<?php require '../includes/footer.php'; ?>
