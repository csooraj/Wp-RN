<!DOCTYPE html>
<html>
<?php include "header.php"; ?>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include "navbar.php"; ?>
    <?php include "sidebar.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color:white">
      <section class="content">
        <h2>Configure Custom Post Layouts</h2>
        <p>Configure each custom post type view</p>
      <table class="table table-bordered bg-success">
        <thead>
          <tr>
            <th>Custom Post Type</th>
            <th>Layout Selected</th>
            <th>Click to Configure Layout</th>
            <th>Change Layout</th>
          </tr>
        </thead>
        <tbody id="test">
        </tbody>
      </table>
      </section>
    </div>
    <?php include "footer.php"; ?>
    <script src="../controller/configurecustompost.js"></script>
</body>
</html>
