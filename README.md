# Dataservis XML Servisi

Dataservis.net XML servisleri ile ilgili kod örnekleri.<br>
XML adreslerine https://www.dataservis.net/xml üzerinden ulaşılabilir.

### Dataservis XML Yapısı

```
<Toplam>         XML içerisinde listelenen toplam ürün adetini verir.
<UrunKod>        XML içerisinde yer alan ürünün ürün kodudur. Tekil bir değerdir, bir ürün kodu ikinci bir ürüne ait olamaz.
<UrunKategori>   XML içerisinde yer alan ürünün kategorisidir.
<UrunAd>         XML içerisinde yer alan ürünün adıdır.
<UrunAciklama>   XML içerisinde yer alan ürünün detayıdır.
<UrunKDV>        XML içerisinde yer alan ürünün tanımlı KDV oranıdır.
<UrunFiyat>      XML içerisinde yer alan ürünün son kullanıcı satış fiyatıdır. KDV hariç olarak verilmektedir. 00.00 formatındadır.
<UrunKur>        XML içerisinde yer alan ürünün para birimidir.
<UrunStok>       XML içerisinde yer alan ürünün stok durumudur, 1 ve 0 olarak verilmektedir. Değeri 1 olan ürünler stokta mevcuttur. Değeri 0 olan ürünler stokta mevcut değildir.
<UrunGaranti>    XML içerisinde yer alan ürünün garanti durumudur. Ay olarak verilmektedir.
<UrunGorsel>     XML içerisinde yer alan ürünün tüm görselleridir. <UrunGorsel> tagı içerisinde tüm görseller <IMG[Sıra]> taglarında sunulmaktadır.
<UrunEan>        XML içerisinde yer alan ürünün (eğer mevcutsa) EAN13 kodudur.
<UrunMarka>      XML içerisinde yer alan ürünün markasıdır.
```

### XmlGetImage.php

Dataservis XML dosyasındaki ürünleri okur ve resimleri belirtilen klasöre kaydeder.
