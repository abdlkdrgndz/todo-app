<p align="center"><a href="https://laravel.com" target="_blank">
<img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
    <a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Todo App
- <i>php artisan migrate</i> komutu ile tabloları oluşturun. <b>dbname : todoapp</b> 
- <i>php artisan serve</i> komutu ile projeyi başlatın. <b>./vendor/bin/sail up</b> komutu ile Docker üzerinde deploy edebilirsiniz.

## Neler Var?

- TodoController içerisinde öncelikle veritabanında "fetch_urls" tablosunda kayıtlı olan bağlantılardan HTTP Client ile tüm verileri çekip Cache içerisinde 30 dakika süre ile saklanır. 
- İlgili tüm methodlar <b><i>TodoController</i></b> içerisinde tanımlanmış olup her method üzerinde annotate tanımlanmıştır.
- Çalışanlar ile ilgili bilgiler "employees" tablosunda yer almaktadır.
- Repository Patterns içerisinde sorgular yer almaktadır. (Employess ve FetchUrl Repository)
- Commands klasörü altında yer alan FetchDataCommand ile terminalde <b><i>php artisan fetch:url</i></b> komutu ile tüm veriler getirilebilir.
- Arayüzde Bootstrap5, CDN üzerinden entegre edilmiştir.

## Sonuç

<img src="https://i.ibb.co/72z7M8D/output3.png" alt="output3">
