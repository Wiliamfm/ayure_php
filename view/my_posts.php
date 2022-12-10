<?php $title = "Mis Publicaciones";
$loginUrl = "login.php";
$signUpUrl = "../index.php";
$indexUrl = "index.php";
$createPostUrl = "./create_post.php";
$myPostsUrl = "#";
$logoutUrl = "../controller/logout.php";
include "./top_template.php";
if (!isset($_SESSION['is_logged'])) {
   header("Location: " . "/view/401.php");
   die;
}
?>
<div class="container p-5">
   <?php
   $id = $_SESSION['id'];
   include __DIR__ . "/../controller/users/my_posts.php";
   while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
   ?>
      <div class="card">
         <div class="card-header">
            <div class="container">
               <?php echo $row['title']; ?>
               <a href="create_post.php?id=<?php echo $row['id']; ?>">edit</a>
               <a href="../controller/users/delete_post.php?id=<?php echo $row['id']; ?>">delete<?php echo $row['id']; ?></a>
            </div>
         </div>
         <div class="card-body">
            <blockquote class="blockquote mb-0">
               <p>
                  <?php echo $row['description']; ?>
               </p>
               <footer class="blockquote-footer">
                  <?php echo $row['category']; ?>
                  <cite title="Source Title">
                     <?php echo $row['username'] . " - " . $row['creation_date']; ?>
                  </cite>
               </footer>
            </blockquote>
         </div>
      </div>
   <?php
   }
   ?>
</div>
<?php include "./bottom_template.php"; ?>