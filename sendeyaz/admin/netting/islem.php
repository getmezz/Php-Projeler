<?php
ob_start();
include 'baglan.php';


if (isset($_POST['genelayarkaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET 
	ayar_siteurl=:siteurl,
	ayar_title=:title,
	ayar_description=:description,
	ayar_keywords=:keywords,
	ayar_author=:author

	WHERE ayar_id=1");
	$UPDATE=$ayarkaydet->execute(array(
		'siteurl' => $_POST['ayar_siteurl'],
		'title' => $_POST['ayar_title'],
		'description' => $_POST['ayar_description'],
		'keywords' => $_POST['ayar_keywords'],
		'author' => $_POST['ayar_author'],
		));

if ($UPDATE)
 		{
		header("Location:../production/genel-ayar.php?durum=ok");
		} 
	else
		{
			header("Location:../production/genel-ayar.php?durum=no");
		}}



if (isset($_POST['apiayarkaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET 
	ayar_recapctha=:recapctha,
	ayar_googlemap=:googlemap,
	ayar_analystic=:analystic
	WHERE ayar_id=1");
	$update=$ayarkaydet->execute(array(
		'recapctha' => $_POST['ayar_recapctha'],
		'googlemap' => $_POST['ayar_googlemap'],
		'analystic' => $_POST['ayar_analystic']
		
		));

if ($update)
 		{
		header("Location:../production/api-ayar.php?durum=ok");
		} 
	else
		{
			header("Location:../production/api-ayar.php?durum=no");
		}}




	if (isset($_POST['mailayarkaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE ayar SET 
	ayar_smtphost=:smtphost,
	ayar_smtpuser=:smtpuser,
	ayar_smtppassword=:smtppassword,
	ayar_smtpport=:smtpport
	WHERE ayar_id=1");
	$update=$ayarkaydet->execute(array(
		'smtphost' => $_POST['ayar_smtphost'],
		'smtpuser' => $_POST['ayar_smtpuser'],
		'smtppassword' => $_POST['ayar_smtppassword'],
		'smtpport' => $_POST['ayar_smtpport']
		));

if ($update)
 		{
		header("Location:../production/ayar-mail.php?durum=ok");
		} 
	else
		{
			header("Location:../production/ayar-mail.php?durum=no");
		}}


if (isset($_POST['hakkimizdakaydet'])) {
	
	$ayarkaydet=$db->prepare("UPDATE hakkimizda SET 
	hakkimizda_baslik=:baslik,
	hakkimizda_icerik=:icerik,
	hakkimizda_resim=:resim,
	hakkimizda_altbaslik=:altbaslik,
	hakkimizda_misyon=:misyon

	WHERE hakkimizda_id=1");
	$UPDATE=$ayarkaydet->execute(array(
		'baslik' => $_POST['hakkimizda_baslik'],
		'icerik' => $_POST['hakkimizda_icerik'],
		'resim' => $_POST['hakkimizda_resim'],
		'altbaslik' => $_POST['hakkimizda_altbaslik'],
		'misyon' => $_POST['hakkimizda_misyon'],
		));

if ($UPDATE)
 		{
		header("Location:../production/hakkimizda.php?durum=ok");
		} 
	else
		{
			header("Location:../production/hakkimizda.php?durum=no");
		}}
		



?>