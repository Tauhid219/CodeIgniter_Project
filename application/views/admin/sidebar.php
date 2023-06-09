<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

  <li class="nav-item">
    <a class="nav-link " href="<?php echo base_url(); ?>">
      <i class="bi bi-grid"></i>
      <span>Dashboard</span>
    </a>
  </li><!-- End Dashboard Nav -->
  
  <li class="nav-item">
    <a class="nav-link " href="<?php echo base_url('home'); ?>">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Go Front</span>
    </a>
  </li><!-- End Dashboard Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    
  </li><!-- End Components Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#home-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Home</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="home-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo base_url(); ?>welcome/home">
          <i class="bi bi-circle"></i><span>Manage</span>
        </a>
      </li>
      <li>
        <a href="./aboutus_get.php">
          <i class="bi bi-circle"></i><span>Home API</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->
  
  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#services-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Services</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="services-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo base_url(); ?>welcome/services_insert">
          <i class="bi bi-circle"></i><span>Insert Services</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>welcome/services_list">
          <i class="bi bi-circle"></i><span>Services List</span>
        </a>
      </li>
      <li>
        <a href="services_get.php">
          <i class="bi bi-circle"></i><span>Services API</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#team-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Team</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="team-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo base_url(); ?>welcome/team_insert">
          <i class="bi bi-circle"></i><span>Insert Team</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>welcome/team_list">
          <i class="bi bi-circle"></i><span>Team List</span>
        </a>
      </li>
      <li>
        <a href="services_get.php">
          <i class="bi bi-circle"></i><span>Team API</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#aboutus-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>About Us</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="aboutus-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo base_url(); ?>welcome/aboutus_list">
          <i class="bi bi-circle"></i><span>Manage</span>
        </a>
      </li>
      <li>
        <a href="./aboutus_get.php">
          <i class="bi bi-circle"></i><span>About Us API</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#clients-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Clients</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="clients-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo base_url(); ?>welcome/clients_insert">
          <i class="bi bi-circle"></i><span>Insert Clients</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>welcome/clients_list">
          <i class="bi bi-circle"></i><span>Clients List</span>
        </a>
      </li>
      <li>
        <a href="services_get.php">
          <i class="bi bi-circle"></i><span>Clients API</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#whyus-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Why Us</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="whyus-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo base_url(); ?>welcome/whyus_insert">
          <i class="bi bi-circle"></i><span>Insert WhyUs</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>welcome/whyus_list">
          <i class="bi bi-circle"></i><span>WhyUs List</span>
        </a>
      </li>
      <li>
        <a href="services_get.php">
          <i class="bi bi-circle"></i><span>Services API</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#contact-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>Contact Us</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="contact-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="<?php echo base_url(); ?>welcome/contact_list">
          <i class="bi bi-circle"></i><span>Manage</span>
        </a>
      </li>
      <li>
        <a href="<?php echo base_url(); ?>welcome/contact_msg">
          <i class="bi bi-circle"></i><span>Contact Message</span>
        </a>
      </li>
      <li>
        <a href="./aboutus_get.php">
          <i class="bi bi-circle"></i><span>About Us API</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#general-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-journal-text"></i><span>General Info</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="general-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="./general.php">
          <i class="bi bi-circle"></i><span>Manage</span>
        </a>
      </li>
      <li>
        <a href="./general_get.php">
          <i class="bi bi-circle"></i><span>General API</span>
        </a>
      </li>
    </ul>
  </li><!-- End Forms Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-layout-text-window-reverse"></i><span>Tables</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="tables-general.html">
          <i class="bi bi-circle"></i><span>General Tables</span>
        </a>
      </li>
      <li>
        <a href="tables-data.html">
          <i class="bi bi-circle"></i><span>Data Tables</span>
        </a>
      </li>
    </ul>
  </li><!-- End Tables Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-bar-chart"></i><span>Charts</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="charts-chartjs.html">
          <i class="bi bi-circle"></i><span>Chart.js</span>
        </a>
      </li>
      <li>
        <a href="charts-apexcharts.html">
          <i class="bi bi-circle"></i><span>ApexCharts</span>
        </a>
      </li>
      <li>
        <a href="charts-echarts.html">
          <i class="bi bi-circle"></i><span>ECharts</span>
        </a>
      </li>
    </ul>
  </li><!-- End Charts Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
      <i class="bi bi-gem"></i><span>Icons</span><i class="bi bi-chevron-down ms-auto"></i>
    </a>
    <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
      <li>
        <a href="icons-bootstrap.html">
          <i class="bi bi-circle"></i><span>Bootstrap Icons</span>
        </a>
      </li>
      <li>
        <a href="icons-remix.html">
          <i class="bi bi-circle"></i><span>Remix Icons</span>
        </a>
      </li>
      <li>
        <a href="icons-boxicons.html">
          <i class="bi bi-circle"></i><span>Boxicons</span>
        </a>
      </li>
    </ul>
  </li><!-- End Icons Nav -->

  <li class="nav-heading">Pages</li>

  

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-login.html">
      <i class="bi bi-box-arrow-in-right"></i>
      <span>Login</span>
    </a>
  </li><!-- End Login Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-error-404.html">
      <i class="bi bi-dash-circle"></i>
      <span>Error 404</span>
    </a>
  </li><!-- End Error 404 Page Nav -->

  <li class="nav-item">
    <a class="nav-link collapsed" href="pages-blank.html">
      <i class="bi bi-file-earmark"></i>
      <span>Blank</span>
    </a>
  </li><!-- End Blank Page Nav -->

</ul>

</aside><!-- End Sidebar-->