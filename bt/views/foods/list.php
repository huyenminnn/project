<?php 
    include_once('views/layout/header.php');
 ?>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Menu foods</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    LIST OF FOOD
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <a href="?mod=foods&act=add" class="btn btn-primary" style="margin-bottom: 8px; vertical-align: right;">Add</a>
                    <?php if (isset($_COOKIE['msg_s'])) { ?>
                        <div class="alert alert-success fade in">
                            <strong><?= $_COOKIE['msg_s']; ?>!</strong> 
                        </div>
                    <?php } ?>
                        
                         
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Picture</th>
                                <th>Price </th>
                                <th>Description</th>
                                <th>Kind</th>
                                <th>More...</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_food as $value) {?>
                            <tr class="odd gradeX">
                                <td><?= $value['maMonAn'] ?></td>
                                <td><?= $value['Ten'] ?></td>
                                <td><img src="<?= $value['Hinhanh'] ?>" class="img-responsive"  ></td>
                                <td><?= $value['Dongia'] ?></td>
                                <td><?= $value['Mota'] ?></td>
                                <td><?= $value['Loai']?></td>
                                <td style="width: 15%;">
                                	<a href="?mod=foods&act=edit&id=<?= $value['maMonAn'] ?>" class="btn btn-primary">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    <a href="?mod=foods&act=description&id=<?= $value['maMonAn'] ?>" class="btn btn-primary">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a href="?mod=foods&act=delete&id=<?= $value['maMonAn'] ?>" class="btn btn-danger">
                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                    </a>
                                    
                                </td>
                            </tr>

                            <?php } ?> 
                        </tbody>
                    </table>
                    <!-- /.table-responsive -->
                    
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div> 

<?php 
    include_once('views/layout/footer.php');
 ?>
   
