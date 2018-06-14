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
        <h3 align="center">EDIT INFORMATION ADMIN</h3>
        <hr>
        <?php if (isset($_COOKIE['msg_f'])) { ?>
            <div class="alert alert-success fade in">
                <strong><?= $_COOKIE['msg_f']; ?>!</strong> 
            </div>
        <?php } ?>
        <form enctype="multipart/form-data" action="?mod=admin&act=update&id=<?= $edit_admin['maQuanLi'] ?>" method="POST" role="form">
             
            <div class="form-group">
                <label for="">Name</label>
               <input type="text" class="form-control" id="" placeholder="" name="ten" value="<?= $edit_admin['Ten'] ?>">
            </div>  
            <div class="form-group">
                <label for="">Position</label>
               <input type="text" class="form-control" id="" placeholder="" name="chucVu" value="<?= $edit_admin['Chuc Vu'] ?>">
            </div>
            <div class="form-group">
                <label for="">Password</label>
               <input type="text" class="form-control" id="" placeholder="" name="password" value="<?= $edit_admin['Password'] ?>">
            </div>
            <div class="form-group">
                <label for="">Birthday</label>
                <input type="date" class="form-control" id="" placeholder="" name="ngaySinh" value="<?= $edit_admin['Ngay sinh'] ?>">
            </div>
            
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" id="" placeholder="" name="diaChi" value="<?= $edit_admin['Dia chi'] ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" value="<?= $edit_admin['Email'] ?>">
            </div>
            <div class="form-group">
                <label for="">Sex</label>
                <input type="text" class="form-control" id="" placeholder="" name="gioiTinh" value="<?= $edit_admin['Gioi tinh'] ?>">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" class="form-control" id=""  name="hinhAnh" value="<?= $edit_admin['Hinh anh'] ?>">
            </div>
            <button type="submit"  class="btn btn-primary">UPDATE</button>
        </form>
    </div>
</div>
<?php 
    include_once('views/layout/footer.php');
 ?>