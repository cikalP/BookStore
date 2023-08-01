<form action="<?= base_url('Pages/update_penerbit');?>" method="POST">
    <div class="modal-body">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeHolder="NamaPenerbit" name="namaPenerbit"
                value="<?=$data_penerbit['nama_penerbit'];?>">
            <input type="hidden" name="kodePenerbit" value="<?=$data_penerbit['kode_penerbit'];?>" />
            <label for="floatingInput">Nama Penerbit</label>
        </div>
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeHolder="AlamatPenerbit" name="alamatPenerbit"
                value="<?=$data_penerbit['alamat_penerbit'];?>">
            <label for="floatingPenerbit">Alamat Penerbit</label>
        </div>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
    </div>
</form>