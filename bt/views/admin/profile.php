<?php 
	include_once("views/layout/header.php");
?>
<style type="text/css">
  .row{
    margin-left: 50px ;
    
  }

.glyphicon {  margin-bottom: 10px;margin-right: 10px;}
p{
  font-size: 20px;
}
.all{
  background-color: #FFF;
}
small {
display: block;
line-height: 1.428571429;
color: #999;
font-size: 15px;
}
}
</style>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="well well-sm">
                <div class="row all">
                    <div class="col-sm-6 col-md-4">
                        <img src="<?= $ad['Hinh anh']?>" alt="" class="img-rounded img-responsive" />
                    </div>

                    <div class="col-sm-6 col-md-8">
                        
                        <h1><?= $ad['Ten'] ?></h1>
                        <small><cite title="San Francisco, USA"><i class="glyphicon glyphicon-map-marker">
                        </i><?= $ad['Dia chi']?> </cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><?= $ad['Email']?>
                            <br />
                            
                            <i class="glyphicon glyphicon-gift"></i><?= $ad['Ngay sinh']?>
                            <br/>
                            <i class="glyphicon glyphicon-user" style="font-size: 17px"></i> <?= $ad['Gioi tinh']?></p>
                        <!-- Split button -->
                        
                        <a href="?mod=admin&act=edit&id=<?= $_SESSION['maQuanLi']?>" class="btn btn-primary" style="margin-bottom: 8px; vertical-align: right;">Change</a>
                    </div>
            </div>
        </div>
    </div>
</div>

<?php 
	include_once("views/layout/footer.php");
?>