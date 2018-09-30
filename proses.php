<h2>QUALITY TIME KAMU</h2>
<h2>SILAKAN PILIH</h2>
<form action="" method="post">
<input type="checkbox" name="genre[]" value="horror">HORROR<br/>
<input type="checkbox" name="genre[]" value="action">ACTION<br/>
<input type="checkbox" name="genre[]" value="anime">ANIME<br/>
<input type="checkbox" name="genre[]" value="thriller">THRILLER<br/>
<input type="checkbox" name="genre[]" value="animasi">ANIMASI<br/>
<input type="reset" value="Hapus Hobi" name="delete"> <br> <br>
<hr style="border-color: blue">
<h2>GENRE FILM</h2>
<from action="" method="post">
<input type="checkbox" name="piknik[]" value="Bali">Horror<br/>
<input type="checkbox" name="piknik[]" value="RajaAmpat">Action<br/>
<input type="checkbox" name="piknik[]" value="Derawan">Animasi<br/>
<input type="checkbox" name="piknik[]" value="Bangka Belitung">Thriller<br/>
<input type="checkbox" name="piknik[]" value="Labuan Bajo">Thriller<br/>


    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
    <input type="submit" name="enter" value="KIRIM">
 
  <?php 

if(isset($_POST['kirim']))
	$data=$_POST["genre"];
 			foreach ($wisata as $kirim){
 			echo $kirim."<br/>";
 }
 if(isset($_POST['enter']))
 	$data=$_POST["genre"];
 foreach ($data as $nilai){
 			echo $nilai."<br/>";
 }
 
 




   ?>
