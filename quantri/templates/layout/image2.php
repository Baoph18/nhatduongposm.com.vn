<div class="photoUpload-zone">
    <div class="photoUpload-detail" id="photoUpload-preview2">
        <?= $func->getImage(['class' => 'rounded', 'size-error' => '250x250x1', 'upload' => $photoDetail['upload'], 'image' => $photoDetail['image2'], 'alt' => 'Alt Photo']) ?>
    </div>
    <label class="photoUpload-file" id="photo-zone2" for="file-zone2">
        <input type="file" name="file2" id="file-zone2">
        <i class="fas fa-cloud-upload-alt"></i>
        <p class="photoUpload-drop">Kéo và thả hình vào đây</p>
        <p class="photoUpload-or">hoặc</p>
        <p class="photoUpload-choose btn btn-sm bg-gradient-success">Chọn hình</p>
    </label>
    <div class="photoUpload-dimension"><?= $photoDetail['dimension'] ?></div>
</div>