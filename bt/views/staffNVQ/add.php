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
        <h3  style="color: green; padding-left: 50px;">ADD NEW CASHIER</h3>
        <hr>
        <?php if (isset($_COOKIE['msg_f'])) { ?>
            <div class="alert alert-success fade in">
                <strong><?= $_COOKIE['msg_f']; ?>!</strong> 
            </div>
        <?php } ?>
        <form  method="POST" role="form" action="?mod=nvq&act=store">
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" id="" placeholder="ID Cashier" name="maNhanVien" required="">
            </div>  
            <div class="form-group">
                <label for="">Name</label>
               <input type="text" class="form-control" id="" placeholder="Enter new Cashier's name" name="ten">
            </div>  
            <div class="form-group">
                <label for="">Birthday</label>
               <input type="date" class="form-control" id="" placeholder="Enter new Cashier's birthday" name="ngaySinh">
            </div>
            <div class="form-group">
                <label for="">Sex</label>
               <input type="text" class="form-control" id="" placeholder="Enter new Cashier's sex" name="gioiTinh">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" id="" placeholder="Enter new Cashier's phone" name="sdt">
            </div>
            
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Enter new Cashier's email" name="email">
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <input type="text" class="form-control" id="" placeholder="Enter new Cashier's address" name="diaChi">
            </div>
            <div class="form-group">
                <label for="">Position</label>
                <input type="text" class="form-control" id="" name="chucVu" value="Cashier">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="text" class="form-control" id="" name="password" value="000000">
            </div>
            <button type="submit" class="btn btn-primary">ADD</button>
        </form>
    </div>
</div>
<?php 
    include_once('views/layout/footer.php');
 ?>