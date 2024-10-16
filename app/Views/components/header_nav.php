<!-- Header -->
<nav class="custom-nav bg-dark">
    <div class="container-fluid">
        <a href="<?= base_url() ?>" class="brand-logo">
            <img src="assets/images/PAL.png" alt="New Logo" width="80" class="logo-image">
            Philippine Airlines
        </a>

        <button class="toggle-button" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="nav-links ms-auto">
                <li class="nav-item">
                    <a href="<?= base_url() ?>" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() . 'services' ?>" class="nav-link">Our Services</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() . 'contact' ?>" class="nav-link">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url() . 'blog' ?>" class="nav-link">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
