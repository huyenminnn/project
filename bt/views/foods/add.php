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
        <h3  style="color: green; padding-left: 50px;">ADD NEW FOOD</h3>
        <hr>
        <?php if (isset($_COOKIE['msg_f'])) { ?>
            <div class="alert alert-success fade in">
                <strong><?= $_COOKIE['msg_f']; ?>!</strong> 
            </div>
        <?php } ?>
        <form  enctype="multipart/form-data" method="POST" role="form" action="?mod=foods&act=store" >
            <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" id="" placeholder="ID Food" name="maMonAn" required="">
            </div>  
            <div class="form-group">
                <label for="">Name</label>
               <input type="text" class="form-control" id="" placeholder="Enter new food's name" name="ten" required="">
            </div>  
            <div class="form-group">
                <label for="">Picture</label>
               <input type="file" class="form-control"  id="hinhAnh" name="hinhAnh">
            </div>
            <div class="form-group">
                <label for="">Price</label>
               <input type="text" class="form-control" id="" placeholder="Enter new food's price" name="donGia">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="Enter new food's price" name="moTa">
            </div>
            
            <div class="form-group">
                <label for="">Kind</label>
                <input type="text" class="form-control" id="" placeholder="Kind of new food" name="loai" required="">
            </div>
            
            <button type="submit" class="btn btn-primary" name="submit">ADD</button>
        </form>
    </div>
</div>
<?php 
    include_once('views/layout/footer.php');
 ?>