<a href="http://prntscr.com/ss8jd1">Döviz Kuru Örnek Görünüm</a>

# Döviz Kuru Botu Oluşturma
Döviz Verilerini Bot ile Çekmek ve Json Olarak Oluşturmak

# Döviz Kuru JSON çıkarma
index-json-cikti.php	dosyasında Doviz.com'da bulunan verileri çekip sunucuda doviz.json dosyası olarak dosya oluşturmasını sağlayabilirsiniz. Sunucuda cron ayarı yaparak belli aralıklarla dosyanın çalıştırılmasını sağlarsanız kurun güncellenme süresini siz belirlemiş olursunuz.

# Döviz Kuru JSON'daki veriyi ekrana yazdırma
Aşağıdaki kod yapısı ile dilediğiniz veriyi oluşturduğunuz doviz.json dosyasından çekebilirsiniz.


$jsonVeri=file_get_contents("doviz.json");<br>
$veri=json_decode($jsonVeri,1);


echo $veri["doviz"]["DOLAR ALIS"];<br>
echo $veri["doviz"]["DOLAR SATIS"]; 

