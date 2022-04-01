<?php include "header.php"; ?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Posts</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-post.php">add post</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>S.No.</th>
                          <th>Image</th>
                          <th>Title</th>
                          <th>Category</th>
                          <th>Date</th>
                          <th>Author</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                          <tr>
                              <td class='id'>1</td>
                              <td><img src="" alt=""></td>
                              <td>Post Title</td>
                              <td>Travel</td>
                              <td>20 Jan 2022</td>
                              <td>Admin</td>
                              <td class='edit'><a href=''><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href=''><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
