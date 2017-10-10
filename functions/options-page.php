<?php ob_start ();?> 

// //Pola 
// iqboxy_
// address
// about
//socialmedia
//contact
//apki
//singingoogle

<?php 	
	//Opcje	
	//Linki 
	add_option("instagram_link","https://www.instagram.com/restauracja.tiffany/");
	add_option("facebook_link","https://www.facebook.com/Restauracja.Tiffany");
	add_option("tripadvisor_link","https://pl.tripadvisor.com/Restaurant_Review-g2428026-d10206866-Reviews-Restauracja_Tiffany-Krzeszowice_Lesser_Poland_Province_Southern_Poland.html");
	//Dane-teleadresowe
		add_option("email_dane","tiffany@restauracjatiffany.pl");
		add_option("telefon_dane","+48 604 065 649");
		add_option("telefon2_dane","+48 12 283 77 88");
		add_option("adres_dane","Wola Filipowska<br>ul. Chrzanowska 2<br>32–065 Krzeszowice");
		add_option("godzinyotwarcia_dane","12.00-20.00");
	//Teksty
	add_option("teksty_wirtualnyspacer_h2","Wirtualny spacer");
	add_option("teksty_wirtualnyspacer_p","Opis");
	add_option("teksty_wirtualnyspacer_link","Opis");
	add_option("teksty_wirtualnyspacer_img","Opis");
?>
<?php
add_action('admin_menu', 'wirtualnyspacer_page');

function wirtualnyspacer_page() {
	add_options_page('Wirtualny spacer', 'Wirtualny spacer', 'read', 'wirtualnyspacer_page', 'wyswietlanie_wirtualnyspacer_page');

};

function wyswietlanie_wirtualnyspacer_page(){


	  if (isset($_POST['dana1'])) {

	  	update_option("teksty_wirtualnyspacer_h2", $_POST['dana1']);
	  	update_option("teksty_wirtualnyspacer_p", $_POST['dana2']);
	  	update_option("teksty_wirtualnyspacer_link", $_POST['dana3']);
	  		update_option("teksty_wirtualnyspacer_img", $_POST['dana4']);
         
    } 
 
	 
 	echo'<div class="wrap dane">
<h1>Edycja danych teleadresowych</h1>';
echo '<div style=" display:inline-block; width:30%; float:left;">
<style>
.wrap.dane label, .wrap.dane input, .wrap.dane textarea { display:block; width:50%; clear:both;}


</style>
<form method="post" > 
<label>Nagłówek</label>
<input type="text" name="dana1" value="'.stripslashes( get_option('teksty_wirtualnyspacer_h2')).'">
<label>Opis</label>
<textarea name="dana2">'.stripslashes( get_option('teksty_wirtualnyspacer_p')).'</textarea>
 <label>Link</label>
<input type="text" name="dana3" value="'.stripslashes( get_option('teksty_wirtualnyspacer_link')).'">
 <label>Link do zdjęcia</label>
<input type="text" name="dana4" value="'.stripslashes( get_option('teksty_wirtualnyspacer_img')).'">
 <input type="submit" value="Zapisz" class="button button-primary button-large">
</form>
</div>
 

';
	};
?>
<?php
add_action('admin_menu', 'dane_teleadresowe_page');

function dane_teleadresowe_page() {
	add_options_page('Dane teleadresowe', 'Dane teleadresowe', 'read', 'dane_teleadresowe_page', 'wyswietlanie_dane_teleadresowe_page');

};

function wyswietlanie_dane_teleadresowe_page(){
	  if (isset($_POST['dana1'])) {

	  	update_option("instagram_link", $_POST['dana1']);
	  	update_option("facebook_link", $_POST['dana2']);
	  	update_option("tripadvisor_link", $_POST['dana3']);
	  	update_option("email_dane", $_POST['dana4']);
	  	update_option("telefon_dane", $_POST['dana5']);
	  	update_option("telefon2_dane", $_POST['dana6']);
	  	update_option("adres_dane", $_POST['dana7']);
	  	update_option("godzinyotwarcia_dane", $_POST['dana8']);
	   
         
    } 
 
	 
 	echo'<div class="wrap dane">
<h1>Edycja danych teleadresowych</h1>';
echo '<div style=" display:inline-block; width:30%; float:left;">

<style>
.wrap.dane label, .wrap.dane input { display:block; width:50%; clear:both;}


</style>
<form method="post" > 
<label>Instagram link</label>
<input type="text" name="dana1" value="'.stripslashes( get_option('instagram_link')).'">
<label>Facebook link</label>
<input type="text" name="dana2" value=" '.stripslashes( get_option('facebook_link')).'">
<label>Tripadvisor link</label>
<input type="text" name="dana3" value="'.stripslashes( get_option('tripadvisor_link')).'">
<label>E-mail</label>
<input type="text" name="dana4" value="'.stripslashes( get_option('email_dane')).'">
<label>Telefon 1</label>
<input type="text" name="dana5" value="'.stripslashes( get_option('telefon_dane')).'">
<label>Telefon 2</label>
<input type="text" name="dana6" value="'.stripslashes( get_option('telefon2_dane')).'">
<label>Adres</label>
<input type="text" name="dana7" value="'.stripslashes( get_option('adres_dane')).'">
<label>Godziny otwarcia</label>
<input type="text" name="dana8" value="'.stripslashes( get_option('godzinyotwarcia_dane')).'">
 



 <input type="submit" value="Zapisz" class="button button-primary button-large">
</form>




</div>
 

';
	};
?>
<?php ob_end_clean ();?>