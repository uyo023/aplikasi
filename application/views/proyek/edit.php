<div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <?= $this->session->flashdata('image'); ?>
  <!-- DataTales Example -->
      <div class="col-md-12">
      <div class="card shadow  mb-5">
      <div class="card-header  py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
      </div>
      <div class="card-body">
          <?= form_open_multipart('proyek/edit');?>
          <input type="hidden" class="form-control form-control-sm" id="id_proyek" name="id_proyek" readonly value="<?= $proyek['id_proyek']?>">
          <div class="row">
            <div class="col-sm-7">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3 mb-1">
                    <label for="formGroupExampleInput">Pilih Jalan</label>
                  </div>
                  <div class="col-md-9">
                    <div class="row">
                      <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="id_jalan" name="id_jalan" readonly value="<?= $proyek['id_jalan']?>">
                      </div>
                      <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" id="nama_jalan" name="nama_jalan" readonly value="<?= $proyek['nama_jalan']?>">
                      </div>
                    </div>
                    <?= form_error('id_jalan', '<small class="text-danger pl-3">*','</small>'); ?>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3 mb-1">
                    <label for="formGroupExampleInput">Pilih jasa</label>
                  </div>
                  <div class="col-md-9">
                    <div class="row">
                      <div class="col-sm-2">
                        <input type="text" class="form-control form-control-sm" id="id_jasa" name="id_jasa" readonly value="<?= $proyek['id_jasa']?>">
                      </div>
                      <div class="col-sm-10">
                        <input type="text" class="form-control form-control-sm" id="nama_jasa" name="nama_jasa" readonly value="<?= $proyek['nama_jasa']?>">
                      </div>
                    </div>
                    <?= form_error('id_jasa', '<small class="text-danger pl-3">*','</small>'); ?>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3">
                  <label for="example-date-input" class=" form-label">Kategori</label>
                  </div>
                <div class="col-md-9">
                  <select class="form-control" id="kategori"name="kategori"  required >
                      <option value="<?= $proyek['kategori']?>"><?= $proyek['kategori']?></option>
                      <option value="Peningkatan">Peningkatan </option>
                      <option value="Pembangunan">Pembangunan </option>
                  </select>
                  <?= form_error('kategori', '<small class="text-danger pl-3">*','</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3">
                  <label for="example-date-input" class=" form-label">Tanggal kontrak</label>
                  </div>
                <div class="col-md-9">
                  <input class="form-control" type="date"  id="tanggal_kontrak" name="tanggal_kontrak" value="<?= $proyek['tanggal_kontrak']?>" required>
                  <?= form_error('tanggal_kontrak', '<small class="text-danger pl-3">*','</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3">
                  <label for="example-date-input" class=" form-label">Akhir kontrak</label>
                  </div>
                <div class="col-md-9">
                  <input class="form-control" type="date"  id="akhir_kontrak" name="akhir_kontrak" value="<?= $proyek['akhir_kontrak']?>" required>
                  <?= form_error('akhir_kontrak', '<small class="text-danger pl-3">*','</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3">
                  <label for="example-date-input" class=" form-label">Pelaksanaan</label>
                  </div>
                <div class="col-md-9">
                  <input class="form-control" type="date"  id="pelaksanaan" name="pelaksanaan" value="<?= $proyek['pelaksanaan']?>" required>
                  <?= form_error('pelaksanaan', '<small class="text-danger pl-3">*','</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3">
                  <label for="example-date-input" class=" form-label">Sumber dana</label>
                  </div>
                <div class="col-md-9">
                  <input type="text" class="form-control form-control-sm" id="sumber_dana" name="sumber_dana"  value="<?= $proyek['sumber_dana']?>" required>
                  <?= form_error('sumber_dana', '<small class="text-danger pl-3">*','</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3">
                  <label for="example-date-input" class=" form-label">Total Anggaran</label>
                  </div>
                <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-1">
                      <label for="example-date-input" class=" form-label">Rp.</label>
                    </div>
                    <div class="col-md-11">
                      <input type="text" class="form-control form-control-sm" id="anggaran" name="anggaran"  value="<?= $proyek['anggaran']?>" required>
                    </div>
                  </div>
                  <?= form_error('anggaran', '<small class="text-danger pl-3">*','</small>'); ?>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-3">
                  <label for="example-date-input" class=" form-label">Tahun anggaran</label>
                  </div>
                <div class="col-md-9">
                  <input type="number" class="form-control form-control-sm" max="2090" min="2020" id="tahun_anggaran" name="tahun_anggaran" value="<?= $proyek['tahun_anggaran']?>" required>
                  <?= form_error('tahun_anggaran', '<small class="text-danger pl-3">*','</small>'); ?>
                </div>
              </div>
                      <div class="form-group row">
                        <div class="col-md-3">
                          <label for="example-date-input" class=" form-label">keterangan</label>
                          </div>
                        <div class="col-md-9">
                          <textarea class="form-control" id="keterangan" name="keterangan" rows="3"required><?= $proyek['keterangan']?></textarea>
                        </div>
                      </div>
            </div>
            <div class="col-sm-5 pl-5  ">
              <small class="text-danger pl-3">*File jpg/png dan ukuran dibawah 2Mb</small>
            <?php foreach ($image as $img): ?>
              <input type="text" readonly class="form-control-plaintext" id="progres" name="progres[]" value="<?= $img['progres'] ?>">
              <div class="row">
                <div class="col-md-5 oldImage">
                  <img src="<?= base_url('assets/img/proyek/').$img['image']?>"class="img-thumbnail" >
                </div>
                <div class="col-md-7">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="image" name="image[]"  multiple="multiple">
                      <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
          </div>
              </div>
          <button type="submit"  class="btn btn-primary">Simpan</button>
          </form>
      </div>
    </div>
  </div>
</div>
