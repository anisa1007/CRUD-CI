<div class="p-3 mb-2 bg-primary text-white">
    <?= $this->extend('layout/template'); ?>

    <?= $this->section('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>About Me</h1>
                <img src="/img/about.jpg" class="img-rounde" alt="foto profil" width="304" height="236">
                <div class="text-center">
                </div>
                <p class="mt-3">Web ini dibuat untuk mempermudah pengguna dalam melihat daftar rumah sakit beserta alamat dan nomor telepon dalam bentuk list.</p>
                <p>Gunakan web ini sebaik mungkin dan jaga kesehatan selalu.</p>
                <p>Salam Sehat,</p>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>
</div>