<?php $title = "Publicaciones";
$loginUrl = "login.php";
$signUpUrl = "../index.php";
$indexUrl = "#";
$createPostUrl = "create_post.php";
$myPostsUrl = "my_posts.php";
$logoutUrl = "/controller/logout.php";
include "./top_template.php";
?>
<div class="container p-5">
   <?php
   $id = $_SESSION['id'];
   include __DIR__ . "/../controller/post/all.php";
   while ($row = pg_fetch_array($result, null, PGSQL_ASSOC)) {
   ?>
      <div class="card">
         <div class="card-header">
            <?php echo $row['title']; ?>
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