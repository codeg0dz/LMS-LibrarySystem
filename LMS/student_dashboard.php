<?php 
$title ="Student dashboard";
include 'includes/header.php'; ?>

<div class="dashboard-container">
    <!-- Book List Header -->
    <div class="book-list-header">
        <h2 id="Booklist">Book List</h2>
    </div>

    <!-- Search Box -->
    <div class="search-box">
        <form class="book_search">
            <input type="text" class="search_books" placeholder="Search Books">
            <button type="submit" class="btn-search">Search</button>
        </form>
    </div>

    <!-- Table Section -->
    <div class="table-container">
        <table class="table_student">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="../LMS/img/ebooks/Great Gatsby.jpg" alt="The Great Gatsby" width="90" height="120"></td>
                    <td>The Great Gatsby</td>
                    <td>Scott Fitzgerald</td>
                    <td>1925</td>
                    <td><button class="btn-reserve">Reserve</button></td>
                </tr>
                <tr>
                    <td><img src="../LMS/img/ebooks/Moby Dick_.jpg" alt="Moby Dick" width="90" height="120"></td>
                    <td>Moby Dick</td>
                    <td>Herman Melville</td>
                    <td>1851</td>
                    <td><button class="btn-reserve">Reserve</button></td>
                </tr>
                <tr>
                    <td><img src="../LMS/img/ebooks/Thinking Fast and Slow.jpg" alt="Thinking Fast and Slow" width="90" height="120"></td>
                    <td>Thinking Fast and Slow</td>
                    <td>Daniel Kahneman</td>
                    <td>2013</td>
                    <td><button class="btn-reserve">Reserve</button></td>
                </tr>
                <tr>
                    <td><img src="../LMS/img/ebooks/Dracula.jpg" alt="Dracula" width="90" height="120"></td>
                    <td>Dracula</td>
                    <td>Bram Stroker</td>
                    <td>1897</td>
                    <td><button class="btn-reserve">Reserve</button></td>
                </tr>
            </tbody>
        </table>

        <!-- Logout Button -->
        <button class="btn-logout">Logout</button>
    </div>
</div>









<?php include 'includes/footer.php'; ?>