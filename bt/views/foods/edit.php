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
        <h3 align="center">EDIT INFORMATION FOOD</h3>
        <hr>
        <?php if (isset($_COOKIE['msg_f'])) { ?>
            <div class="alert alert-success fade in">
                <strong><?= $_COOKIE['msg_f']; ?>!</strong> 
            </div>
        <?php } ?>
        <form enctype="multipart/form-data" action="?mod=foods&act=update&id=<?= $edit_food['maMonAn'] ?>" method="POST" role="form">
             
            <div class="form-group">
                <label for="">Name</label>
               <input type="text" class="form-control" id="" placeholder="Enter new food's name" name="ten" value="<?= $edit_food['Ten'] ?>">
            </div>  
            <div class="form-group">
                <label for="">Picture</label>
               <input type="file" class="form-control" id="" placeholder="Enter new food's name" name="hinhAnh" value="<?= $edit_food['Hinhanh'] ?>">
            </div>
            <div class="form-group">
                <label for="">Price</label>
               <input type="text" class="form-control" id="" placeholder="Enter new food's price" name="donGia" value="<?= $edit_food['Dongia'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="Enter new food's price" name="moTa" value="<?= $edit_food['Mota'] ?>">
            </div>
            
            <div class="form-group">
                <label for="">Kind</label>
                <input type="text" class="form-control" id="" placeholder="Kind of new food" name="loai" value="<?= $edit_food['Loai'] ?>">
            </div>
            
            <button type="submit"  class="btn btn-primary">UPDATE</button>
        </form>
    </div>
</div>
<?php 
    include_once('views/layout/footer.php');
 ?>