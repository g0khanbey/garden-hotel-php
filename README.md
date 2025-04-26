
<h1>GardenHTMLPHP Framework</h1>

<p><strong>GardenHTMLPHP</strong>, küçük ve orta ölçekli projeler için geliştirilmiş, hafif ve esnek bir <strong>PHP MVC Framework</strong>'üdür. Basit yapısıyla hızlı başlangıç imkânı sunar, aynı zamanda modern PHP geliştirme standartlarına uygundur.</p>

<h2>Genel Özellikler</h2>

<ul>
<li>Hafif ve hızlı MVC mimarisi</li>
<li>Özelleştirilebilir Controller, Model ve View yapısı</li>
<li>Basit Router mekanizması</li>
<li>Composer entegrasyonu</li>
<li>Temiz URL (Pretty URL) desteği (.htaccess ile)</li>
<li>Kolay öğrenilebilir ve genişletilebilir</li>
<li>Standartlara uygun dosya organizasyonu</li>
<li>CodeIgniter tarzı kullanım mantığı</li>
</ul>

<h2>Klasör Yapısı</h2>

<pre><code>
/app
    /Controllers → Uygulama controller dosyaları
    /Models → Veri işleme ve veri tabanı işlemleri
    /Views → Sayfa şablonları (HTML + PHP)
/public
    index.php → Uygulama giriş dosyası
    .htaccess → URL yönlendirme ayarları
/system
    /Core → Çekirdek sistem dosyaları (App.php, Controller.php, Model.php)
/composer.json → Composer yapılandırması
/README.md → Proje tanımı
</code></pre>

<h2>Başlangıç</h2>

<h3>1. Kurulum</h3>

<pre><code>git clone https://github.com/g0khanbey/gardenhtmlphp.git</code></pre>

<p>Public dizinini sunucunuzun kök dizini olarak ayarlayın (Apache için <code>DocumentRoot</code> ayarı <code>public/</code> klasörüne yönlendirilmeli).</p>

<h3>2. Gereksinimler</h3>

<ul>
<li>PHP 7.4 veya üstü</li>
<li>Apache Web Server (mod_rewrite aktif)</li>
<li>Composer (isteğe bağlı)</li>
</ul>

<h3>3. .htaccess Ayarları</h3>

<p>Public klasörü altındaki <code>.htaccess</code> dosyası URL'leri temiz hale getirir. Eğer Apache kullanıyorsanız mod_rewrite modülünün aktif olduğundan emin olun.</p>

<h3>4. URL Kullanımı</h3>

<pre><code>http://localhost/{controller}/{method}/{parametre1}/{parametre2}</code></pre>

<p>Örnek:</p>

<pre><code>http://localhost/home/index</code></pre>

<p>Bu çağrı <code>app/Controllers/Home.php</code> içindeki <code>index()</code> metodunu çalıştırır.</p>

<h3>5. Controller Oluşturma</h3>

<pre><code>
&lt;?php

class Home extends Controller
{
    public function index()
    {
        $this-&gt;view('home/index');
    }
}
</code></pre>

<h3>6. View Dosyası Kullanımı</h3>

<p><code>app/Views/home/index.php</code> dosyası üzerinden HTML/PHP içeriklerini yönetebilirsiniz.</p>

<h3>7. Model Kullanımı</h3>

<pre><code>
&lt;?php

class UserModel extends Model
{
    public function getUsers()
    {
        // Örnek veri işlemleri
    }
}
</code></pre>

<h2>Katkı Sağlama</h2>

<ol>
<li>Fork oluşturun</li>
<li>Yeni bir branch açın (<code>feature/özellik</code>)</li>
<li>Geliştirmelerinizi yapın</li>
<li>Pull Request gönderin</li>
</ol>

<h2>Lisans</h2>

<p>Bu proje açık kaynaklıdır. Lisans bilgileri için <code>LICENSE</code> dosyasını inceleyiniz.</p>
