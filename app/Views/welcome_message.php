<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

   
</head>
<body>

    <form method="post" action="<?= base_url('save') ?>" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nobp</td>
                <td>
                    <input type="text" name="nobp" id="nobp">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>
                   <select name="jurusan" id="jurusan">
                        <option value="">- Pilih -</option>
                        <option value="SI">SI</option>
                        <option value="SK">SK</option>
                        <option value="MI">MI</option>
                   </select>
                </td>
            </tr>
            <tr>
                <td>Semester</td>
                <td>
                    <input type="text" name="semester" id="semester">
                </td>
            </tr>
            <tr>
                <td>File</td>
                <td>
                    <input type="file" name="file" id="file">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="simpan" value="Simpan">
                    <input type="reset" name="batal" value="Batal">
                </td>
            </tr>
        </table>
    </form>
    <hr>
    <table border="1px">
        <tr>
            <td>No</td>
            <td>Nobp</td>
            <td>Nama</td>
            <td>Jurusan</td>
            <td>Semester</td>
            <td>File</td>
        </tr>
        <?php foreach($file as $no => $data ) { ?>
            <tr>
                <td><?= $no+1 ?></td>
                <td><?= $data->nobp ?></td>
                <td><?= $data->nama ?></td>
                <td><?= $data->jurusan ?></td>
                <td><?= $data->semester ?></td>
                <td>
                    <a href="<?= base_url('file/'. $data->file) ?>">File</a>
                </td>
            </tr>
        <?php } ?>
    </table>


<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

</body>
</html>
