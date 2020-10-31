<article class="container">
    <div class="row">
        <!-- Falls vorhanden: Fehler anzeigen -->
        <?php if (isset($_GET['error'])): ?>
            <div class="error">
                <h2>Fehler:</h2>
                <p><?= $_GET['error'] ?></p>
            </div>
        <?php endif; ?>
        <form action="/post/doCreate" method="post" class="col-12">
            <div class="form-group">
                <label for="post-title">Titel</label>
                <input id="post-title" type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="post-text">Post</label>
                <textarea id="post-text" name="text" rows="10" class="form-control" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Erstellen</button>
        </form>
    </div>
</article>
