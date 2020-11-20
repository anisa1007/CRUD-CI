<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-3">Daftar Rumah Sakit di Bandar Lampung</h1>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama Rumah Sakit</th>
                        <th scope="col">Alamat</th>
                        <th width="15%" scope="col">No.Telpon</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>RS. Advent Bandar Lampung</td>
                        <td>Jl. Teuku Umar No..48, Sidodadi, Kec. Kedaton, Kota Bandar Lampung, Lampung 35148</td>
                        <td>(0721) 703459</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>RS. Graha Husada</td>
                        <td>Jl. Gajah Mada No. 6 GH, Tj. Agung Raya, Kedamaian, Kota Bandar Lampung, Lampung 35128</td>
                        <td>(0721) 240000</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>RS. Imanuel Way Halim</td>
                        <td>Jl. Soekarno - Hatta No.1, Way Dadi, Kec. Sukarame, Kota Bandar Lampung, Lampung 35133</td>
                        <td>(0721) 704900</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>RS. Urip Sumoharjo Bandar Lampung</td>
                        <td>Jl. Urip Sumoharjo No.200, Gn. Sulah, Way Halim, Kota Bandar Lampung, Lampung 35132</td>
                        <td>(0721) 771322</td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td>RSUD Dr. H. Abdul Moeloek Provinsi Lampung</td>
                        <td>Jl. Dr. Rivai No.6, Penengahan, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35112</td>
                        <td>(0721) 7033122</td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td>RSIA Belleza Kedaton Bandar Lampung</td>
                        <td>Jl. Sultan H., Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132</td>
                        <td>(0721) 773333</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>