<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Удаление данных из БД</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body">
        <p>Вы уверены,что хотите удалить данные?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-dark" data-bs-dismiss="modal">нет</button>
        <button type="button" class="btn btn-primary btn btn-danger" id="delete" name="delete">да</button>
      </div>
    </div>
  </div>
</div>

<?php

if (isset($_POST['delete'])) {
  include "vendor/connect.php";

  $id = $_POST['id'];
  // $file = $_POST['file'];
  // $date = $_POST['date'];
  // $tag = $_POST['tag'];
  // $status = $_POST['status'];
  // $content = $_POST['content-lessons'];

  // global $connect;

  // $sql = "INSERT INTO articles_prob (title, content, tag_id, publication_status_id) VALUES (`title` = '$title', `content` = '$content', `tag_id` = $tag, `publication_status_id` = $status)";

  $sql = "DELETE FROM `articles` WHERE id=$id";

  $result = mysqli_query($connect,$sql);
  
//     if (mysqli_query($connect, $sql)) {
//         echo "New record created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . mysqli_error($connect);
//     }
//   mysqli_close($connect);

//     echo "Изменения сохранены" . "<br>";

}    




?>
