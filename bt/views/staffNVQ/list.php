<?php 
    include_once('views/layout/header.php');
 ?>

<div id="page-wrapper" >
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">List of Cashier</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    LIST OF CASHIER
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <a href="?mod=nvq&act=add" class="btn btn-primary" style="margin-bottom: 8px; vertical-align: right;">Add</a>
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
                                <th>Birthday</th>
                                <th>Sex </th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Position</th>
                                <th>More...</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_nvq as $value) {?>
                            <tr class="odd gradeX">
                                <td><?= $value['maNhanVien'] ?></td>
                                <td><?= $value['Ten'] ?></td>
                                <td><?= $value['Ngay Sinh'] ?></td>
                                <td><?= $value['Gioi tinh'] ?></td>
                                <td><?= $value['So dien thoai'] ?></td>
                                <td><?= $value['Email']?></td>
                                <td><?= $value['Dia chi']?></td>
                                <td><?= $value['Chuc vu']?></td>
                                <td style="width: 15%;">
                                	<a href="?mod=nvq&act=edit&id=<?= $value['maNhanVien'] ?>" class="btn btn-primary">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                    </a>
                                    
                                    <a href="?mod=nvq&act=delete&id=<?= $value['maNhanVien'] ?>" class="btn btn-danger">
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
   
