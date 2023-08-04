<section class="content-header">
    <div class="col-sm">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class=""><?php echo $judul; ?></h3>
            </div>

            <form method="post" action=" <?php echo base_url(); ?>/sepatu/simpan" enctype="multipart/form-data">
                <div class="card-body">
                    <div class="form-group">
                        <label>Merek Sepatu</label>
                        <input type="text" class="form-control" id="" placeholder="Masukan Merek Sepatu" name="merek_sepatu">
                    </div>
                    <div class="form-group">
                        <label for="ukuran">Ukuran Sepatu</label>
                        <input type="text" class="form-control" placeholder="Masukan Ukuran" name="ukuran_sepatu">
                    </div>

                    <div class="form-group">
                        <label>Model Sepatu</label>
                        <select class="form-control" name="model_sepatu">
                            <option value="">Pilih</option>
                            <?php
                            foreach ($model_sepatu as $model) { ?>
                                <option value=" <?php echo $model->id_model; ?>">
                                    <?php echo $model->nama_model; ?>
                                </option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah</label>
                        <input type="text" class="form-control" placeholder="Masukan Jumlah" name="jumlah_sepatu">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Design Sepatu</label>
                        <input class="form-control" accept=".jpg,.png,.jpeg" type="file" name="design_sepatu" >
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>