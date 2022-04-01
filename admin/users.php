  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h1 class="admin-heading">All Users</h1>
              </div>
              <div class="col-md-2">
                  <a class="add-new" href="add-user.php">add user</a>
              </div>
              <div class="col-md-12">
                  <table class="content-table">
                      <thead>
                          <th>DB ID</th>
                          <th>Full Name</th>
                          <th>User Name</th>
                          <th>Role</th>
                          <th>Edit</th>
                          <th>Delete</th>
                      </thead>
                      <tbody>
                      <tr>
                          <td class='id'>1</td>
                          <td>John Doe</td>
                          <td>john27</td>
                          <td>  
                      </td>
                      <td class='edit'><a href=''><i class='fa fa-edit'></i></a></td>
                    <td class='delete'><a href=''><i class='fa fa-trash-o'></i></a></td>
              </tr>
              </tbody>
            </table>
            <ul class='pagination admin-pagination'>
              <li><a href="">prev</a></li>
              <li class='active'><a href="">1</a></li>
              <li class='active'><a href="">2</a></li>
              <li class='active'><a href="">3</a></li>
              <li><a href="">next</a></li>
            </ul>
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
