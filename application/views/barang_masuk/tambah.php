<div class="body-wrapper">
    <div class="container-fluid">
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
                <div class="row align-items-center">
                    <div class="col-9">
                        <h4 class="fw-semibold mb-8">Barang Masuk</h4>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="<?= base_url(); ?>">Dasbor</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a class="text-muted text-decoration-none" href="<?= base_url('barang_masuk'); ?>">Barang Masuk</a>
                                </li>
                                <li class="text-muted breadcrumb-item" aria-current="page">Tambah Barang Masuk</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-3">
                        <div class="text-center mb-n5">
                            <img src="<?= base_url('assets/images/breadcrumb/ChatBc.png'); ?>" alt="" class="img-fluid mb-n4"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="datatables">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <h5 class="card-title">
                                    Tambah Barang Masuk
                                </h5>
                            </div>
                            <p class="card-subtitle mb-3">
                                <mark>Step 1</mark>. Isi form faktur pembelian.
                            </p>

                            <form class="was-validated" method="post" action="<?= base_url('barang_masuk/simpan'); ?>">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group  mb-3">
                                            <label class="form-label" for="validationCustom01">Tanggal</label>
                                            <input type="date" class="form-control" id="validationCustom01" name="tanggal" value="<?= date('Y-m-d') ?>" required>
                                            <div class="invalid-feedback">Harus diisi</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group  mb-3">
                                            <label class="form-label" for="validationCustom01">Pemasok</label>
                                            <select class="form-control select2" name="pemasok" required>
                                                <?php foreach($pemasok as $key): ?>
                                                    <option value="<?= $key->id; ?>"><?= $key->nama; ?></option>
                                                <?php endforeach ?>
                                            </select>
                                            <div class="invalid-feedback">Harus diisi</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group mb-3">
                                            <label class="form-label" for="validationCustom01">Nomor Faktur</label>
                                            <input type="text" class="form-control" id="validationCustom01" name="nomor_faktur">
                                        </div>
                                    </div>
                                </div>
                                
                                <button class="btn btn-primary rounded-pill px-4 mt-3 me-2" type="submit">Lanjut</button>
                                <a href="<?= base_url('barang_masuk')?>" class="btn btn-outline-danger rounded-pill px-4 mt-3" >Batal</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>