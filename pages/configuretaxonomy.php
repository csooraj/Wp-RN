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
        <h2>Configure Taxonomy Layouts</h2>
        <p>Configure each Taxonomy view</p>
      <table class="table table-bordered bg-success">
        <thead>
          <tr>
            <th>Screen Name</th>
            <th>Layout Selected</th>
            <th>Click to Configure Layout</th>
            <th>Change Layout</th>
          </tr>
        </thead>
        <div id="loader">
          <image height="100px" width="100px" src="../assets/loader.gif" />
        </div>
        <tbody id="test">
        </tbody>
      </table>
      </section>
    </div>
    <?php include "footer.php"; ?>
    <script src="../controller/configuretaxonomy.js"></script>
</body>
</html>
