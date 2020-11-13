<?php include 'api.php'; ?>
<?php include 'header.php'; ?>
            
            <h3>Berita Bisnis</h3>
            <div class="row">
            <?php foreach($bisnis['articles'] as $b){ ?>
                <div class="col-md-6">
                <br>
                <b><center class="card-title">
                    <?php echo $judul =  $b['title'];?></b></center>
                    <div class="card">
                        <img src="<?php echo $b['urlToImage']; ?>" height="350px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"> <?php echo $b['content']; ?></p>
                        </div>
                        <div class="card-footer">
                            <center><a href="<?php echo $b['url']; ?>" class="btn btn-danger">Kunjungi Situs Berita</a></center>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </body>
</html>
