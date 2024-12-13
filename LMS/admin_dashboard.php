<?php 
$title= "Admin dashboard";
include 'includes/header.php' ?>
<div class="admin">
    <div class="grid-container">
        <!-- Left Section: Create Book -->
        <div class="create-book">
            <h3 class="section-title">Add New Book</h3>
            <form>
                <div class="admin_book">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter Book Title">
                </div>
                <div class="admin_book">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" class="form-control" id="author" placeholder="Enter Book Author">
                </div>
                <div class="admin_book">
                    <label for="fileInput" class="form-label">Add Image</label>
                    <input type="file" id="fileInput" class="form-control" accept="image/*">
                </div>
                <div class="admin_book">
                    <button type="submit" class="btn btn_primary">Add Book</button>
                </div>
            </form>
        </div>

        <!-- Right Section: Tables for Edit/Delete and Respond to Requests -->
        <div class="right-section">
            <div class="edit-books">
                <h3 class="section-title">Edit/Delete Books</h3>
                <table class="admin_table">
                    <thead class="table_head">
                        <tr>
                            <th>User</th>
                            <th>Book Requested</th>
                            <th>Year</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>The Great Gatsby</td>
                            <td>Scott Fitzgerald</td>
                            <td>1925</td>
                            <td>
                                <button class="btn-edit">Edit</button>
                                <button class="btn-delete">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            

            <div class="respond-requests">
                <h3 class="section-title">Respond to Book Requests</h3>
                <table class="admin_table">
                    <thead class="table_head">
                        <tr>
                            <th>Name</th>
                            <th>Book Requested</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>John Doe</td>
                            <td>The Great Gatsby</td>
                            <td>2024-09-01</td>
                            <td>
                                <button class="btn-approve">Approve</button>
                                <button class="btn-reject">Reject</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
              
            </div>
        </div>
          <!-- Logout Button -->
          <button class="btn-btn-logout">Logout</button>
    </div>
</div>












<?php include 'includes/footer.php' ?>