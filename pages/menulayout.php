<!DOCTYPE html>
<html>
<?php include "header.php"; ?>
<head>
  <script
 src="https://code.jquery.com/jquery-3.2.1.min.js"
 integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
 crossorigin="anonymous"></script>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <?php include "navbar.php"; ?>
    <?php include "sidebar.php"; ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="box box-info">
              <div class="box-header">
                <h3 class="box-title">Configure Menu Layout</h3>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="usr">Menu Label:</label>
                  <input type="text" class="form-control" id="menu_label">
                </div>
                <div class="form-group">
                  <label for="sel1">Select url to point</label>
                  <select class="form-control" id="menu_url">
                    <option value="" disabled selected>Select url to point</option>
                    <option>www.google.com</option>
                    <option>www.facebook.com</option>
                    <option>www.twitter.com</option>
                  </select>
                </div>
                <div class="form-group" id="savechanges">
                  <a class="btn btn-app" onClick="">
                  <i class="fa fa-save"></i> Save Changes
                  </a>
                </div>
                <div class="form-group">
                  <label for="sel1">Select layout</label>
                  <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" id="layoutbutton" type="button" data-toggle="dropdown">Select Layout
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu" style="height: auto;max-height: 416px;overflow-x: hidden;">
                      <li>
                        <a href="#" title="Layout1">
                          <img src="../assets/layout1.jpg" style="height:416px;width:200px">
                          Layout1
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Layout2">
                          <img src="../assets/layout2.jpg" style="height:416px;width:200px">
                          Layout2
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Layout3">
                          <img src="../assets/layout3.jpg" style="height:416px;width:200px">
                          Layout3
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Layout4">
                          <img src="../assets/layout4.jpg" style="height:416px;width:200px">
                          Layout4
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Layout5">
                          <img src="../assets/layout5.png" style="height:416px;width:200px">
                          Layout5
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Layout6">
                          <img src="../assets/layout6.png" style="height:416px;width:200px">
                          Layout6
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Layout7">
                          <img src="../assets/layout7.png" style="height:416px;width:200px">
                          Layout7
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Layout8">
                          <img src="../assets/layout8.png" style="height:416px;width:200px">
                          Layout8
                        </a>
                      </li>
                      <li>
                        <a href="#" title="Layout9">
                          <img src="../assets/layout9.png" style="height:416px;width:200px">
                          Layout9
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="form-group" id="radioview">
                  <label for="pwd">Type</label>
                  <label class="radio-inline"><input type="radio" name="menuchild" value=1>With SubMenu</label>
                  <label class="radio-inline"><input type="radio" name="menuchild" value=2>Without SubMenu</label>
                </div>
                <div id="submenu">
                <?php include "panel.php"; ?>
                </div>
                <div class="form-group" >
                  <a class="btn btn-app" id="clearchanges">
                  <i class="fa fa-save" ></i> add new main menu item
                  </a>
                </div>
                <div class="form-group" id="preview">
                </div>
                <div class="form-group">
                  <label id="loading"></label>
                </div>
                <div class="form-group" id="Error">
                </div>
                <div class="alert alert-success" id="alert_template" style="display: none;">
                    <button type="button" class="close">×</button>
                </div>
                <table class="table table-bordered bg-success">
                  <thead>
                    <tr>
                      <th>Main Menu Label</th>
                      <th>Main Menu Url</th>
                      <th>Layout Selected</th>
                    </tr>
                  </thead>
                  <tbody id="test">
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="modal fade" id="myModalNorm" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close"
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="MenuLabel">
                </h4>
                <h4 class="modal-title" id="subMenuLabel">
                </h4>
                <h4 class="modal-title" id="MenuId" style="display:none">
                </h4>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">

                <form role="form">
                  <div class="form-group">
                    <label for="usr">Label:</label>
                    <input type="text" class="form-control" id="submenu_label">
                  </div>
                  <div class="form-group">
                    <select class="form-control" id="subMenuUrl">
                      <option value="" disabled selected>Select url to point</option>
                      <option>www.google.com</option>
                      <option>www.facebook.com</option>
                      <option>www.twitter.com</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="form-control" id="subMenuLayout" >
                      <option>Layout1</option>
                      <option>Layout2</option>
                      <option>Layout3</option>
                      <option>Layout4</option>
                      <option>Layout5</option>
                      <option>Layout6</option>
                      <option>Layout7</option>
                      <option>Layout8</option>
                      <option>Layout9</option>
                    </select>
                  </div>
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
                <button type="button" class="btn btn-primary" onclick="updateSubMenu()">
                    Save changes
                </button>
            </div>
        </div>
    </div>
</div>
<?php include "footer.php"; ?>
</body>
<script src="../controller/panel.js"></script>
<script src="../controller/menulayout.js"></script>
<script src="../controller/handleedit.js"></script>
</html>
