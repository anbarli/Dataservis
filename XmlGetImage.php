<?php

/*

* XmlGetImage.php
* Dataservis XML dosyasındaki ürünleri okur ve resimleri belirtilen klasöre kaydeder
* XML adresleri https://www.dataservis.net/xml/ adresinde yer almaktadır

*/

// XML içeriğini çekelim
$xml = simplexml_load_file('[XML-ADRES]');

// Tüm ürünler için
foreach($xml->Urun as $urlUrun)
{
	// Tüm görseller çekilsin
	foreach($urlUrun->UrunGorsel->children() as $url)
	{
		$filename = basename($url); // dosyayı yakala
		if(file_exists('images/'.$filename))
		{
			// Dosya mevcutsa mesaj yaz geç
			echo $urlUrun->UrunKod." > <strong>$filename</strong> mevcut<br/>";
		} else {
			// Dosya mevcut değilse kaydet
			$img = file_get_contents($url); // urlden resmi al
			file_put_contents('images/'.$filename, $img); // dosyayı yarat ve resmi koy, yazılabilir durumda images klasörünün bulunması gereklidir, klasör adı isteğe göre değişebilir.
			echo $urlUrun->UrunKod." > <strong>$filename</strong> oluşturuldu <br/>";
		}
	}
}

?>
