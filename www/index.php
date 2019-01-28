<?php include("../src/create.php"); include("../src/delete.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Filer</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>
<body>
  <section class="section">

  <div class="container">
    <h1 class="title">Mon filer</h1>
    <div class="columns">
      <div class="column">
        <table class="table is-fullwidth is-hoverable">
			<?php include('./list_files.php'); ?>
		</table>
        </div>
        <div class="column">
          <form method="POST" action="">
            <div class="field">
              <label class="label">Nouveau dossier</label>
              <div class="control">
                <input class="input" name="dirName" type="text" placeholder="Nom du dossier">
              </div>
            </div>
            <div class="field is-grouped">
              <div class="control">
                <button class="button is-link" name="createDir">Créer</button>
              </div>
            </div>
          </form>
          <hr />
          <form method="POST">
            <div class="field">
              <label class="label">Nouveau fichier</label>
              <div class="control">
                <input class="input" type="text" name="fileName" placeholder="Nom du fichier">
              </div>
            </div>
            <div class="field">
              <label class="label">Contenu</label>
              <div class="control">
                <textarea class="textarea" name="fileContent" placeholder="Textarea"></textarea>
              </div>
            </div>
            <div class="field is-grouped">
              <div class="control">
                <button class="button is-link" name="createFile">Enregistrer</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>
</html>