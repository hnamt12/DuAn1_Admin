<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Đơn hàng</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Mã đơn hàng</th>
                    <th>Tên người đặt</th>
                    <th>Số điện thoại</th>
                    <th>Tổng tiền</th>
                    <th>Trạng thái đơn hàng</th>
                    <th>Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($listDonhang as $donhang) : ?>
                    <tr>
                      <td class="text-center"><?= $donhang["ma_donhang"] ?></td>
                      <td><?= getOneTaikhoan($$donhang["id_taikhoan"])["ten_taikhoan"] ?></td>
                      <td class="text-center">
                        <a href="index.php?act=donhang_update&id=<?= $donhang["id_donhang"] ?>"><button type="button" class="btn btn-primary">Sửa</button></a>
                        <a href="index.php?act=donhang_delete&id=<?= $donhang["id_donhang"] ?>"><button type="button" class="btn btn-primary">Xóa</button></a>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->