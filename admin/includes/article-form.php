<?php if (! empty($article->errors)): ?>
  <ul>
    <?php foreach ($article->errors as $error): ?>
        <li><?= $error ?></li>
    <?php endforeach; ?>
  </ul>
<?php endif; ?>

<form method="post">

    <div>
      <label for="title">Title</label>
      <input name="title" id="title" placeholder="Article title"
             value="<?= htmlspecialchars($article->title); ?>">
    </div>

    <div>
      <label for="content">Content</label>
      <textarea name="content" id="content" cols="40" rows="4" placeholder="Article content"><?=
       htmlspecialchars($article->content); ?></textarea>
    </div>

    <div>
      <label for="published_at">Publication date and time</label>
      <input type="datetime" name="published_at" id="published_at"
             value="<?= htmlspecialchars($article->published_at); ?>">
    </div>

    <button>Save</button>


</form>
