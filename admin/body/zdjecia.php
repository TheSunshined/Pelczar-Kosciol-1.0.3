<?php 
echo '<div style="display:none;">';
include('../../checkuser.php'); 
echo '</div>';
?>

<div id="NewsConter">
<script>
									
$(document).ready(function(){
    $(".AddAktual").click(function(){
    $("#AddAktual").toggle();});
    $(".AddAktualPrawy").click(function(){
    $("#AddAktualPrawy").toggle();});
    $(".ErseAktual").click(function(){
    $("#ErseAktual").toggle();});
    $(".ErseAktualPrawy").click(function(){
    $("#ErseAktualPrawy").toggle();});
    $(".ErseFotoID").click(function(){
    $("#ErseFotoID").toggle();});
    $(".UpdatePrawy").click(function(){
    $("#UpdatePrawy").toggle();});
    $(".UpdateFoto").click(function(){
    $("#UpdateFoto").toggle();});
});
    
</script>
<script>
$(document).ready(function(){
	$(function(){
        $("#AddAktual").load("admin/html/AddFoto.html"); 
        $("#AddAktualPrawy").load("admin/html/AddPrawy.html"); 
        $("#ErseAktual").load("admin/html/UsunFoto.html");
        $("#ErseFotoID").load("admin/html/UsunFotoID.html");
        $("#ErseAktualPrawy").load("admin/html/UsunPrawy.html");
        $("#UpdatePrawy").load("admin/html/UpdatePrawy.html"); 
        $("#UpdateFoto").load("admin/html/UpdateFoto.html");
    });
});
</script>
<button style="float: left;" class="AddAktual">Dodaj Folder GoogleDrive</button>
<button style="float: left;" class="UpdateFoto">Aktualizuj Zdjęcia</button>
<a href="../../Foto/dodaj.php"><button style="float: left;">Dodaj Na Serwer Zdjęcie</button></a>
<button style="float: left;" class="ErseFotoID">Usuń Folder GoogleDrive</button>
<button style="float: right;" class="AddAktualPrawy">Dodaj Prawy</button>
<button style="float: right;"  class="UpdatePrawy">Aktualizuj Prawy</button>
<button style="float: right;"  class="ErseAktualPrawy">Usuń Prawy</button>
<div style="display: none;" id="AddAktual"></div>
<div style="display: none;" id="UpdateFoto"></div>
<div style="display: none;" id="AddAktualPrawy"></div>
<div style="display: none;" id="ErseAktual"></div>
<div style="display: none;" id="ErseFotoID"></div>
<div style="display: none;" id="ErseAktualPrawy"></div>
<div style="display: none;" id="UpdatePrawy"></div>





		<style>
		#zdjecia {color:var(--Wazne);border-bottom: 4px solid var(--Wazne);box-shadow: 0px 5px 5px -5px;}
		#foto {display: none;}
		#fotoActive {display: inline-block;}
        .LinkMenu:hover:nth-child(3) {border-radius:20px 20px 0px 0px;background: var(--Wazne3);}

	   </style>
<div>
	<?php
include('../../db.php');

									$sql = "SELECT Title, Opis, Data, ID FROM foto ORDER BY id DESC"; 
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {

										 while($row = $result->fetch_assoc()) {
								echo  
									
'<div id="OgloszeniaCont" class="col-12 ArtContener">
   <div class="CenterArtConter">
	<div class="HeadArt">'
	.$row['Title'].' / ID:'.$row['ID'].' / Dodano:'.$row['Data'].'
	</div>
	<div class="ArticleBoxText">
		<div class="ArticleText ArtTextCenter">'
		.$row['Opis'].
		'</div>
	</div>
  </div>
</div>'		
									
					;
									
										 }
									}
									$conn->close();
									?>
							</div>
</div>