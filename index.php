<?php include 'api.php'; ?>
<?php include 'header.php'; ?>
            
            <h3>Berita Teratas</h3>
            <div class="row">
            <?php foreach($utama['articles'] as $u){ ?>
                <div class="col-md-6">
                <br>
                <b><center class="card-title">
                    <?php echo $judul =  $u['title'];?></b></center>
                    <div class="card">
                        <img src="<?php echo $u['urlToImage']; ?>" height="350px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text"> <?php echo $u['content']; ?></p>
                        </div>
                        <div class="card-footer">
                            <center><a href="<?php echo $u['url']; ?>" class="btn btn-danger">Kunjungi Situs Berita</a></center>
                        </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    </body>
</html>
