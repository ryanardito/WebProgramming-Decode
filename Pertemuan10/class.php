<?php
    class Manusia{
        //atribut ( ciri - ciri)
        var $jenis_kelamin = 'Laki Laki';
        var $nama = '';

        //method  ( aksi object nya )

        //camel case
        function setJenisKelamin($kelamin){
          $this->jenis_kelamin = $kelamin;
        }

        function getJenisKelamin(){
          echo $this->jenis_kelamin;
        }

        function setNama($nama){
          $this->nama = $nama;
        }

        function getNama(){
          echo $this->nama;
        }

        function getFullIndentitas(){
          echo "Namanya " . $this->nama ." Jenis Kelaminnya " . $this->jenis_kelamin;
        }
    }

    $harvey = new Manusia();
    $prema = new Manusia();
    $prema->setJenisKelamin("Lainnya");
    $prema->setNama("Prema");
    $prema->getFullIndentitas();

    //menggunakan object operator
    // $harvey->jenis_kelamin = "Perempuan";

    //kalo di java
    //harvey.jenis_kelamin = "Perempuan";

    // echo $harvey->jenis_kelamin;
    // echo "<br>";
    // echo $prema->jenis_kelamin;


?>
