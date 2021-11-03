<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <title>
      Praktikum 4
      Fernando
      105217034
    </title>

    <style>
        body 
        {
            background: #ffffff;
        }

        h1 
        {
            font-family: 'Poppins';
            text-align: center;
            letter-spacing: 1px;
        }

        th 
        {
            background: #f5f5f5;
        }

        table 
        {
            border-radius: 5px;
        }

        .no
        {
            background: #f5f5f5;
        }

        .baris 
        {
            background: #ffffff;
        }
    </style>
</head>

<body>
    <div id="header">
        <h1>
            Data Gaji Karyawan
        </h1>
    </div>

    <div id="content">

        <?php
        class pegawai
        {
            private $nama;
            private $ttl;
            private $kelamin;

            function __construct($nama, $ttl, $kelamin)
            {
                $this->nama = $nama;
                $this->ttl = $ttl;
                $this->kelamin = $kelamin;
            }

            function get_nama()
            {
                return $this->nama;
            }

            function get_ttl()
            {
                return $this->ttl;
            }

            function get_kelamin()
            {
                return $this->kelamin;
            }
        }
        
        class LevelKaryawan extends pegawai
        {
            private $level;
            private $stat;
            private $gaji;

            public function set_level($level)
            {
                if ($level == 'Senior')
                {
                    $this->gaji = 5000000;
                }

                else if ($level == 'Amateur')
                {
                    $this->gaji = 3500000;
                } 

                else {
                    $this->gaji = 2000000;
                }

                $this->level = $level;

            }

            public function get_level()
            {
                return $this->level;
            }

            public function set_stat($stat)
            {
              if ($stat == 'Parttime')
              {
                  $this-> gaji /= 2;
              }

                $this->stat = $stat;
            }

            public function get_stat()
            {
                return $this->stat;
            }

            public function get_gaji()
            {
                return $this->gaji;
            }
        }

        $Fernando = new LevelKaryawan('Fernando', 'Bekasi, 23 Oktober 1999', 'Laki-laki');
        $Fernando->set_level('Senior');
        $Fernando->set_stat('Fulltime');

        $Hakam = new LevelKaryawan('Hakam', 'Bogor, 2 November 2000', 'Laki-laki');
        $Hakam->set_level('Amateur');
        $Hakam->set_stat('Parttime');

        $Altha = new LevelKaryawan('Altha', 'Jakarta, 13 November 1998', 'Laki-laki');
        $Altha->set_level('Junior');
        $Altha->set_stat('Fulltime');

        $Boy = new LevelKaryawan('Boy', 'Banten, 12 Juni 1999', 'Laki-laki');
        $Boy->set_level('Junior');
        $Boy->set_stat('Parttime');

        $Fathan = new LevelKaryawan('Fathan', 'Jakarta, 6 Februari 1999', 'Laki-laki');
        $Fathan->set_level('Senior');
        $Fathan->set_stat('Parttime');

        $Fritz = new LevelKaryawan('Fritz', 'Bekasi, 3 Maret 1999', 'Laki-laki');
        $Fritz->set_level('Amateur');
        $Fritz->set_stat('Fulltime');

        $karyawan = array($Fernando, $Hakam, $Altha, $Boy, $Fathan, $Fritz);

        ?>

        <table align="center" border="2">
            <tr>
                <th>
                    No
                </th>

                <th>
                    Nama
                </th>

                <th>
                    Tempat Tanggal Lahir
                </th>

                <th>
                    Jenis Kelamin
                </th>

                <th>
                    Level Karyawan
                </th>
                
                <th>
                    Status
                </th>

                <th>
                    Gaji Karyawan
                </th>
            </tr>

            <?php
            foreach ($karyawan as $index => $value) {
            ?>
                <tr>
                    <td class="no">
                        <?= $index + 1; ?>
                    </td>

                    <td class="baris">
                        <?= $value->get_nama(); ?>
                    </td>

                    <td class="baris">
                        <?= $value->get_ttl(); ?>
                    </td>

                    <td class="baris">
                        <?= $value->get_kelamin(); ?>
                    </td>

                    <td class="baris">
                        <?= $value->get_level(); ?>
                    </td>

                    <td class="baris">
                        <?= $value->get_stat(); ?>
                    </td>

                    <td class="baris">
                        <?= $value->get_gaji(); ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>