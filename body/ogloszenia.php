<div id="NewsConter">
        <div id="OgloszeniaCont" class="col-12 ArtContener">
       <div class="CenterArtConter">
        <div class="HeadArt" style="text-align:center;padding:0px">OGŁOSZENIA
        </div>
      </div>
    </div>
<style>
			#ogloszenia {color:var(--Wazne);border-bottom: 4px solid var(--Wazne);box-shadow: 0px 5px 5px -5px;}
			#info {display: none;}
			#infoActive {display: inline-block;}
        .LinkMenu:hover:nth-child(2) {border-radius:20px 20px 0px 0px;background: var(--Wazne3);}
</style>
								<?php
include('../db.php');

									$sql = "SELECT Title, Opis, Data FROM ogloszenia ORDER BY ID DESC LIMIT 5"; 
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {

										 while($row = $result->fetch_assoc()) {
								echo  
									
'<div id="OgloszeniaCont" class="col-12 ArtContener">
   <div class="CenterArtConter">
	<div class="HeadArt">'
	.$row['Title'].'
	</div>
	<div class="ArticleBoxText">
		<div class="ArticleText ArtTextCenter">'
		.$row['Opis'].
		'<div class="Date">Dodano: '.$row['Data'].'</div>
		</div>
	</div>
  </div>
</div>'
									
									;}
									}
									$conn->close();
									?>
<script>
function pokaz (){
    $(document).ready(function(){
	$(function(){
      $("#Aktualdoczytaj").load("body/ogloszeniadoczytaj.php"); 
    });
});
    pokazz.style.display = 'none';
    znik.style.display = 'block';
    Aktualdoczytaj.style.display = 'block';
}
    
function znikaj (){
    Aktualdoczytaj.style.display = 'none';
    pokazz.style.display = 'block';
    znik.style.display = 'none';
}
</script>
<div class="ButtonConter">
<div class="ButtonPoka">
<input id="pokazz" type="button" value="Pokaż więcej" class="pokawiecej" type="submit" onclick="pokaz()" >
<input id="znik" type="button" value="Ukryj" class="pokawiecej" type="submit" onclick="znikaj()" >
</div>
</div>
<div id="Aktualdoczytaj"></div>
</div>