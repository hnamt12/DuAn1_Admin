<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Chi tiết đơn hàng</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="index.php?act=donhang"><button type="button" class="btn btn-block btn-dark float-sm-right">Quay lại</button></a></li>
          </ol>
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
              <div class="row">
                <div class="col-6">
                  <p><b>ID đơn hàng: </b><?= $donhang["id_donhang"] ?></p>
                  <p><b>Mã đơn hàng: </b><?= $donhang["ma_donhang"] ?></p>
                  <p><b>Thời gian đặt: </b><?= $donhang["created_at"] ?></p>
                  <p><b>Hình thức thanh toán: </b><?= $thanhtoan["ten_thanhtoan"] ?></p>
                  <p><b>Trạng thái: </b><?= $donhang["trangthai"] ?> <a href="index.php?act=">Thay đổi trạng thái</a></p>
                  <p><b>Ghi chú: </b><?= $donhang["ghichu"] ?></p>
                </div>
                <div class="col-6">
                  <p><b>Tên người đặt: </b><?= $taikhoan["hoten"] ?></p>
                  <p><b>Tên người nhận: </b><?= $donhang["ten_nguoinhan"] ?></p>
                  <p><b>Địa chỉ: </b><?= $donhang["diachi"] ?></p>
                  <p><b>Số điện thoại: </b><?= $donhang["sdt"] ?></p>
                </div>
              </div>
              <div class="col-4 float-sm-right mb-2">
                <a href="index.php?act="><button type="button" class="btn btn-block btn-dark">Xóa đơn hàng</button></a>
              </div>
              <div class="col-12">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                      <th class="col-1 text-center">ID</th>
                      <th>Tên sản phẩm</th>
                      <th>Giá</th>
                      <th>Số lượng</th>
                      <th>Tổng tiền</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $total = 0;
                    foreach ($listCTDH as $ctdh) {
                      $sanpham = getOneSanpham($ctdh["id_sanpham"]) ?>
                      <tr>
                        <td class="text-center"><?= $sanpham["id_sanpham"] ?></td>
                        <td><?= $sanpham["ten_sanpham"] ?></td>
                        <td><?= $sanpham["gia"] ?></td>
                        <td><?= $ctdh["soluong"] ?></td>
                        <td><?= $sanpham["gia"] * $ctdh["soluong"] ?></td>
                      </tr>
                    <?php $total += $sanpham["gia"] * $ctdh["soluong"];
                    } ?>
                    <tr>
                      <td colspan="4"></td>
                      <td><b>Thành tiền: </b><?= $total ?></td>
                    </tr>
                  </tbody>
                </table>
              </div>
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