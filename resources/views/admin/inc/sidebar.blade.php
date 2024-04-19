        <!-- Sidebar Section -->
        <aside>
            <div class="toggle">
                <div class="logo">
                    <h2>Electronic<span class="danger"> shop</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar" >
                <a href="#">
                    <span class="material-icons-sharp">dashboard</span>
                    <h3>Dashboard</h3>
                </a>
                <a href="{{ route('users.index') }}">
                    <span class="material-icons-sharp">person_outline</span>
                    <h3>Users</h3>
                </a>
                <a href="{{ route('products.index') }}">
                    <span class="material-icons-sharp">receipt_long</span>
                    <h3>Products</h3>
                </a>
                <a href="http://127.0.0.1:8000/admin/users">
                    <span class="material-icons-sharp">content_copy</span>
                    <h3>Category</h3>
                </a>
                <a href="http://127.0.0.1:8000/admin/users}">
                    <span class="material-icons-sharp">inventory</span>
                    <h3>Orders</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">report_gmailerrorred</span>
                    <h3>Reports</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp" onclick="logout()">logout</span>
                    <h3>Logout</h3>
                </a>
            </div>
        </aside>
        <!-- End of Sidebar Section -->