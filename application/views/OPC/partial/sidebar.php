<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="index.html">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="tables">
                <i class="icon-grid-2 menu-icon"></i>
                <span class="menu-title">Master Data</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="master">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Client
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Ship
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            Agent
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            User
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#trx" aria-expanded="false" aria-controls="form-elements">
                <i class="icon-columns menu-icon"></i>
                <span class="menu-title">Transaction</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="trx">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="">Create New</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Transaction List</a></li>
                    <li class="nav-item"><a class="nav-link" href="">Currency</a></li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#service" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Service</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="service">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo base_url(); ?>OPC/ppkb">PPKB</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">SPK</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">SPBPJ</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#payment" aria-expanded="false" aria-controls="charts">
                <i class="icon-bar-graph menu-icon"></i>
                <span class="menu-title">Payment</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="payment">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">Pranota</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Invoice</a></li>
                </ul>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Report</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">OPS Cabang</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#"> Finance Cabang</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">OPS Pusat</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#"> Finance Pusat</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">
                <i class="icon-head menu-icon"></i>
                <span class="menu-title">Profil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('login/logout') ?>">
                <i class="icon-head menu-icon"></i>
                <span class="ti-power-off">Logout</span>
            </a>
        </li>
    </ul>
</nav>
<!-- partial -->