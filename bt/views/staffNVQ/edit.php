<?php 
    include_once('views/layout/header.php');
 ?>
 <style>
     input{
        width: 60%;
     }
 </style>
 <div id="page-wrapper" >
    <div class="container">
        <h3 align="center">EDIT INFORMATION CASHIER</h3>
        <hr>
        <?php if (isset($_COOKIE['msg_f'])) { ?>
            <div class="alert alert-success fade in">
                <strong><?= $_COOKIE['msg_f']; ?>!</strong> 
            </div>
        <?php } ?>
        <form action="?mod=nvq&act=update&id=<?= $edit_nvq['maNhanVien'] ?>" method="POST" role="form">

            <div class="form-group">
                <label for="">Name</label>
               <input type="text" class="form-control" id="" placeholder="Enter Cashier's name" name="ten" value="<?= $edit_nvq['Ten'] ?>">
            </div>  
            <div class="form-group">
                <label for="">Birthday</label>
               <input type="date" class="form-control" id="" placeholder="Enter Cashier's birthday" name="ngaySinh" value="<?= $edit_nvq['Ngay Sinh'] ?>">
            </div>
            <div class="form-group">
                <label for="">Sex</label>
               <input type="text" class="form-control" id="" placeholder="Enter Cashier's sex" name="gioiTinh" value="<?= $edit_nvq['Gioi tinh'] ?>">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" id="" placeholder="Enter Cashier's phone" name="sdt" value="<?= $edit_nvq['So dien thoai'] ?>">
            </div>            
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Enter Cashier's email" name="email" value="<?= $edit_nvq['Email'] ?>">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" id="" placeholder="Enter Cashier's address" name="diaChi" value="<?= $edit_nvq['Dia chi'] ?>">
            </div>
            <div class="form-group">
                <label for="">Position</label>
                <input type="text" class="form-control" id="" placeholder="Enter Cashier's Position" name="chucVu" value="<?= $edit_nvq['Chuc vu'] ?>">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" id="" placeholder="Enter new password" name="Password">
            </div>
            
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </form>
    </div>
</div>
<?php 
    include_once('views/layout/footer.php');
 ?>