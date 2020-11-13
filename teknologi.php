<?php include 'api.php'; ?>
<?php include 'header.php'; ?>
            
            <h3>Berita Teknologi</h3>
            <div class="row">
            <?php foreach($teknologi['articles'] as $t){ ?>
                <div class="col-md-6">
                <br>
                <b><center class="card-title">
                    <?php echo $judul =  $t['title'];?></b></center>
                    <div class="card">
                        <img src="<?php echo $t['urlToImage']; ?>" height="350px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"> <?php echo $t['content']; ?></p>
                        </div>
                        <div class="card-footer">
                            <center><a href="<?php echo $t['url']; ?>" class="btn btn-danger">Kunjungi Situs Berita</a></center>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </body>
</html>
