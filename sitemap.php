<?php
header('Content-type: application/xml');

echo "<?xml version='1.0' encoding='UTF-8'?>"."\n";
echo "<sitemapindex xmlns='http://www.sitemaps.org/schemas/sitemap/0.9'>"."\n";
?>
  <sitemap>
    <loc>https://<?=$_SERVER['SERVER_NAME']?>/sitemaps/sitemap.xml</loc>
  </sitemap>
  <sitemap>
    <loc>https://<?=$_SERVER['SERVER_NAME']?>/sitemaps/ongoing-sitemap.xml</loc>
  </sitemap>
  <sitemap>
    <loc>https://<?=$_SERVER['SERVER_NAME']?>/sitemaps/recentCN-sitemap.xml</loc>
  </sitemap>
  <sitemap>
    <loc>https://<?=$_SERVER['SERVER_NAME']?>/sitemaps/recentDUB-sitemap.xml</loc>
  </sitemap>
  <sitemap>
    <loc>https://<?=$_SERVER['SERVER_NAME']?>/sitemaps/recentSUB-sitemap.xml</loc>
  </sitemap>
  <sitemap>
    <loc>https://tech.animezia.com/post-sitemap.xml</loc>
  </sitemap>
  <sitemap>
    <loc>https://animezia.com/sitemap.xml</loc>
  </sitemap>
  <sitemap>
    <loc>https://snaply.in/sitemap.xml</loc>
  </sitemap>
  <?php
  $array = range(1, 85);
array_walk($array, function ($value) {
    echo "<sitemap>";
    echo "<loc>https://{$_SERVER['SERVER_NAME']}/sitemaps/allanime-sitemap.xml?page=".$value."</loc>";
    echo "</sitemap>";
});
 ?>

</sitemapindex>