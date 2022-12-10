<?php $title = "Crear Post";
$loginUrl = "login.php";
$signUpUrl = "../index.php";
$indexUrl = "index.php";
$createPostUrl = "#";
$myPostsUrl = "my_posts.php";
$logoutUrl = "/controller/logout.php";
include "./top_template.php";
if (!isset($_SESSION['is_logged'])) {
   header("Location: " . "/view/404.php");
   die;
}
if (array_key_exists("edit", $_POST)) {
   include __DIR__ . "../../controller/post/get.php";
   $result = getById($_POST['post_id']);
?>
   <div class="container p-5">
      <form method="POST">
         <?php include "../controller/users/edit_post.php"; ?>
         <?php //include $_SERVER['DOCUMENT ROOT'] . "/controller/users/edit_post.php"; 
         ?>
         <div class="mb-3">
            <label for="input_title" class="form-label">Título:</label>
            <input type="text" name="title" id="input_title" value="<?php echo $result['title']; ?>" disabled>
         </div>
         <div class="mb-3">
            <label for="input_text" class="form-label">Mensaje:</label>
            <textarea class="form-control" id="input_text" name="description" rows="5" required>
               <?php echo trim($result['description']); ?>
            </textarea>
         </div>
         <div class="mb-3">
            <label for="input_category" class="form-label">Categoría:</label>
            <select name="category" id="input_category">
               <?php
               include "../controller/category/get.php";
               while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                  echo "<option value=" . $row["id"] . ">" . $row["description"] . "</option>";
               }
               ?>
            </select>
         </div>
         <button type="submit" class="btn btn-primary" name="submit" value="ok">Editar</button>
      </form>
   </div>
<?php
} else {
?>
   <div class="container p-5">
      <form method="POST">
         <?php include "../controller/users/create_post.php"; ?>
         <div class="mb-3">
            <label for="input_title" class="form-label">Título:</label>
            <input type="text" name="title" id="input_title" required>
         </div>
         <div class="mb-3">
            <label for="input_text" class="form-label">Mensaje:</label>
            <textarea class="form-control" id="input_text" name="description" rows="5" required></textarea>
         </div>
         <div class="mb-3">
            <label for="input_category" class="form-label">Categoría:</label>
            <select name="category" id="input_category">
               <?php
               include "../controller/category/get.php";
               while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
                  echo "<option value=" . $row["id"] . ">" . $row["description"] . "</option>";
               }
               ?>
            </select>
         </div>
         <button type="submit" class="btn btn-primary" name="submit" value="ok">Publicar</button>
      </form>
   </div>
<?php
}
include "./bottom_template.php"; ?>