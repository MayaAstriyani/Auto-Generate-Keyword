<?php
$query_kkulb  = $link->query("SELECT * FROM kkulb ORDER BY id_kkulb asc LIMIT 4");
$query_kkulb1 = $link->query("SELECT * FROM kkulb ORDER BY id_kkulb asc LIMIT 4,4");
$query_kkulb2 = $link->query("SELECT * FROM kkulb ORDER BY id_kkulb asc LIMIT 8,4");

$query_bombas  = $link->query("SELECT * FROM kata_bombastis ORDER BY id_bombastis asc LIMIT 4");
$query_bombas1 = $link->query("SELECT * FROM kata_bombastis ORDER BY id_bombastis asc LIMIT 4,4");
?>

<div class="container" style="width:800px; background-color: #fff;">
  <div class="x_panel">
    <div class="x_title text-center">
      <h2>Auto Generate Keyword</h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="x_content" style="margin-top : 20px">
      <form class="form-horizontal form-label-left" action="?x=kata_kunci" enctype="multipart/form-data" method="post">
        <div class="form-group">
          <label class="control-label col-md-2 col-sm-2 col-xs-12">Kata ULB</label>
          <div class="col-md-3 col-sm-6">
            <?php
            while ($row = $query_kkulb->fetch_assoc()) {
            ?>
            <div>
              <input type="checkbox" name="kata_ulb[]" value="<?php echo $row["ulb"];?>" checked="">
              <?php echo $row["ulb"];?>
            </div>
            <?php
            }
            ?>
          </div>
          <div class="col-md-3 col-sm-6">
            <?php
            while ($row = $query_kkulb1->fetch_assoc()) {
            ?>
            <div>
              <input type="checkbox" name="kata_ulb[]" value="<?php echo $row["ulb"];?>" checked="">
              <?php echo $row["ulb"];?>
            </div>
            <?php
            }
            ?>
          </div>
          <div class="col-md-4 col-sm-6">
            <?php
            while ($row = $query_kkulb2->fetch_assoc()) {
            ?>
            <div>
              <input type="checkbox" name="kata_ulb[]" value="<?php echo $row["ulb"];?>" checked="">
              <?php echo $row["ulb"];?>
            </div>
            <?php
            }
            ?>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-2 col-sm-2 col-xs-12">Kata Bombastis</label>
          <div class="col-md-3 col-sm-6">
            <?php
            while ($row = $query_bombas->fetch_assoc()) {
            ?>
            <div>
              <input type="checkbox" name="kata_bombas[]" value="<?php echo $row["kata_bombastis"];?>" checked="">
              <?php echo $row["kata_bombastis"];?>
            </div>
            <?php
            }
            ?>
          </div>
          <div class="col-md-3 col-sm-6">
            <?php
            while ($row = $query_bombas1->fetch_assoc()) {
            ?>
            <div>
              <input type="checkbox" name="kata_bombas[]" value="<?php echo $row["kata_bombastis"];?>" checked="">
              <?php echo $row["kata_bombastis"];?>
            </div>
            <?php
            }
            ?>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-2 col-sm-2 col-xs-12">Kata Kunci</label>
          <div class="col-md-10 col-sm-6 col-xs-12">
            <textarea name="katakunci1" placeholder="Masukan kata kunci" class="form-control col-md-7 col-xs-12"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-2 col-sm-2 col-xs-12"></label>
          <div class="col-md-10 col-sm-6 col-xs-12">
            <input type="file" accept=".csv, .txt" class="form-control col-md-7 col-xs-12" name="katakunci2" value="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-2 col-sm-2 col-xs-12">Nomor HP/WA</label>
          <div class="col-md-10 col-sm-6 col-xs-12">
            <div class="clear clear-fix"></div>
            <input type="text" class="form-control col-md-7 col-xs-12" name="nomor">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-2 col-sm-2 col-xs-12">Kata Kunci Spesifik</label>
          <div class="col-md-10 col-sm-6 col-xs-12">
            <textarea name="kataspesifik1" placeholder="Masukan kata kunci spesifik" class="form-control col-md-7 col-xs-12"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-2 col-sm-2 col-xs-12"></label>
          <div class="col-md-10 col-sm-6">
            <input type="file" accept=".csv, .txt" class="form-control col-md-7 col-xs-12" name="kataspesifik2" value="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-2 col-sm-2 col-xs-12">Tags</label>
          <div class="col-md-10 col-sm-6 col-xs-12">
            <textarea name="tags1" placeholder="Masukan tags" class="form-control col-md-7 col-xs-12"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-2 col-sm-2 col-xs-12"></label>
          <div class="col-md-10 col-sm-6">
            <input type="file" accept=".csv, .txt" class="form-control col-md-7 col-xs-12" name="tags2" value="">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-md-2 col-sm-2 col-xs-12">Opsi</label>
          <div class="col-md-10 col-sm-6">
            <input type="checkbox" name="username" value="1" checked="">Username<br>
            <input type="checkbox" name="title" value="1" checked="">Title<br>
            <input type="checkbox" name="desc" value="1" checked="">Description<br>
            <input type="checkbox" name="tag" value="1" checked="">Tags<br>
          </div>
        </div>
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
            <button type="submit" class="btn btn-warning" name="submit" value="Submit" style="float:right">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
