<blockquote class="imgur-embed-pub" lang="en" data-id="a/NuaRnY0"><a href="//imgur.com/a/NuaRnY0"></a></blockquote><script async src="//s.imgur.com/min/embed.js" charset="utf-8"></script>

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

