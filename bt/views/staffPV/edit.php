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
        <h3 align="center">EDIT INFORMATION Waiter</h3>
        <hr>
        <?php if (isset($_COOKIE['msg_f'])) { ?>
            <div class="alert alert-success fade in">
                <strong><?= $_COOKIE['msg_f']; ?>!</strong> 
            </div>
        <?php } ?>
        <form action="?mod=pv&act=update&id=<?= $edit_pv['maNhanVien'] ?>" method="POST" role="form">
             
            <div class="form-group">
                <label for="">Name</label>
               <input type="text" class="form-control" id="" placeholder="Enter Waiter's name" name="ten" value="<?= $edit_pv['Ten'] ?>">
            </div>  
            <div class="form-group">
                <label for="">Birthday</label>
               <input type="date" class="form-control" id="" placeholder="Enter Waiter's birthday" name="ngaySinh" value="<?= $edit_pv['Ngay sinh'] ?>">
            </div>
            <div class="form-group">
                <label for="">Sex</label>
               <input type="text" class="form-control" id="" placeholder="Enter Waiter's sex" name="gioiTinh" value="<?= $edit_pv['Gioi tinh'] ?>">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" id="" placeholder="Enter Waiter's phone" name="sdt" value="<?= $edit_pv['So dien thoai'] ?>">
            </div>
            
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Enter Waiter's email" name="email" value="<?= $edit_pv['Email'] ?>">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" id="" placeholder="Enter Waiter's address" name="diaChi" value="<?= $edit_pv['Dia chi'] ?>">
            </div>
            <div class="form-group">
                <label for="">Position</label>
                <input type="text" class="form-control" id="" placeholder="Enter Waiter's Position" name="chucVu" value="<?= $edit_pv['Chuc vu'] ?>">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" id="" placeholder="Enter new password" name="password" value="<?= $edit_pv['Password']?>">
            </div>
            
            <button type="submit"  class="btn btn-primary">UPDATE</button>
        </form>
    </div>
</div>
<?php 
    include_once('views/layout/footer.php');
 ?>