<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom shadow-sm py-3">
    <div class="container">
        <!-- Brand / Logo di Kiri -->
        <a class="navbar-brand fw-bold fs-5 tracking-wide" style="color: #db2777;" href="/user">
            Portal Mahasiswa
        </a>
        
        <!-- Bagian Kanan: Tombol Menu Garis Tiga (Dropdown) -->
        <div class="ms-auto dropdown">
            <button class="btn btn-light border rounded-pill px-3 py-2 d-flex align-items-center gap-2 shadow-sm" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <!-- Icon Garis Tiga (Hamburger) -->
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-list text-secondary" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
                </svg>
                <span class="fw-semibold text-secondary small">Menu</span>
            </button>
            
            <!-- Isi Dropdown Menu -->
            <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 rounded-4 mt-2 p-2" aria-labelledby="dropdownMenuButton" style="min-width: 200px;">
                <li><a class="dropdown-item rounded-3 py-2 fw-semibold text-dark" href="/user">Daftar User</a></li>
                <li><a class="dropdown-item rounded-3 py-2 fw-semibold text-dark" href="{{ route('matakuliah.index') }}">Mata Kuliah</a></li>
            </ul>
        </div>
    </div>
</nav>