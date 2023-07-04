<p align="center">
  <div align="center">
    <a href="https://animezia.com/">
      <img src="https://cdnzia.pages.dev/images/logo.webp" alt="Logo">
    </a>
    <h1>AnimeZia - Watch High Quality Anime Online, No Ads !</h1>
    
  </div>

  <hr />

#### NOTE:

* This's an **Educational** Project, purely made for learning purposes.
* We do **NOT** promote piracy or free anime streaming sites.
* Project is OPENSOURCE


  <div align="center">
   <h2> Demo https://the.animezia.com or https://linkzia.42web.io/ </h2> <br>
   <!-- PREVIEW IMAGE -->
<img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiceJ8ksJ7c_-6zydA2eB2l9jKM0ls32LALgy60oizZrMn4tJwZ1IH48aurvpgoH6aok11EjXQ5YPfytuc-oXJJ6q5Ar83fV6nXQrvgSdNhQPMZ96dNxkqh6SEyEJK6flk-UWQncxzqurvh_nls_yZ8VEDJ-zDpQeCVKdq1WzztkqsLendtpbNgXYXLQw/s700/Screenshot%202023-04-01%20184807.png">
   <p> A PHP web application used for browsing, searching and fetching anime details and episodes.</p>
  </div>
  
  <hr />
<h3>This is old source of https://animezia.com </h3>
<h4>This is an improved version of <a href="https://github.com/shashankktiwariii/anikatsu">Anikatsu</a> - Base code of this repo.</h4>
New source code of animezia.com will not be public anytime soon.

<hr/>

## Features 
 - ✔Requires no database.
 - ✨No Annoying Video Ads.
 - 🎁Recent released, popular, sub, sub, trending, A to Z list.
 - ✔WatchList localstorage functions.
 - 🎉Stream in 1080p, 720p, 480p and 360p.
 - ⚡Supported Devices: PCs, Laptops, Tablets, Android and iOS mobile, smart TVs.
 - 🎨Responsive Design and SEO optimized.
 - 🏆 Auto Image Optimization to webp. 
 - ⭐Anime Available Based on Genres, Seasons, categories, status, language.
 - 🚀Ready to deploy code.


## Requirements
 - Before running check if `.htaccess file` is present in root dir of your web server.
 - Follow ** Online Deployment ** procedure from below.
 - First deploy the <a href="https://github.com/warlordsnet/zia-api" >API REPO</a>. Run It and Update the `$api` variable in `_config.php` with new URL.
 - Php environment or Directly Upload the code on php supported hosting.
 - Deploy the <a href="https://github.com/warlordsnet/cdnzia">CDN repo</a> and add it's url in  `_config.php`.

 - **To Update Website Info (Website name, logo, favicon, socials url) Edit `_config.php` file**
 - Sign up on <a href="https://imagekit.io">Imagekit</a> and follow these steps to use it ->
 **Go to settings**
![image](https://user-images.githubusercontent.com/125268757/231135267-26a145c8-cb6f-49fc-a055-6db70d4529dd.png)

Create new origin named - anime. select web proxy option and save.
![image](https://user-images.githubusercontent.com/125268757/231141699-8963cb08-6298-4278-b5fe-f45223a5b376.png)

Now go to url endpoints section and select existing endpoint, configure it > add existing orogin - anime.
![image](https://user-images.githubusercontent.com/125268757/231142346-fefaf351-6177-4458-b419-b6f095133640.png)

Now go to developer options and copy your imagekit id.
![image](https://user-images.githubusercontent.com/125268757/231146646-e53e1eff-3e03-42dd-9838-3e83823a8c8d.png)

- Add your imagekit id in variable `$imgk` of `_config.php`.

<hr />

## Online Deployment

Deploy on any PHP Apache hosting.
You can try these free hosting providers for demo or testing -
 - https://www.infinityfree.net/   
 - https://profreehost.com/   
 - https://in.000webhost.com/free-php-hosting

## Hosting from cpanel.
Buy Php hosting from ambitionhost.in (cheap), hostinger.in, bluehost.in or godaddy.
If you have purchased Cpanel from hosting provider then follow these:
 - Login your Cpanel > Open file manager. ![image](https://user-images.githubusercontent.com/96106468/229330640-e5efbb5b-ca74-47f5-8316-f4a052cd9e4a.png)
 - Open `public_html` (some cpanel may have `htdocs` instead of public_html so follow same steps) ![image](https://user-images.githubusercontent.com/96106468/229330740-37fff5cd-fbc1-47fd-a57b-909b9abc50ea.png)
 - Upload the files of this repo in the public_html directory.
 - configure domains and site is ready ✨

## Local Deployment

First download the repository using. After cloning, change the repo name to your site name.
```
git clone https://github.com/warlordsnet/animezia.com
cd animezia.com
```

Now start the production build of the site:
 - Use the following systemctl command on Debian Linux version 8.x+ or Ubuntu Linux version Ubuntu 15.04+ or above:

```
## Start command ##
sudo systemctl start apache2.service
## Stop command ##
sudo systemctl stop apache2.service
## Restart command ##
sudo systemctl restart apache2.service
```
We can view status using the following command:
`sudo systemctl status apache2.service`

## Sponsor this project
 - riley.famc@idfcbank    - Support warlords.

 - [!["Buy Me A Coffee"](https://www.buymeacoffee.com/assets/img/custom_images/orange_img.png)](https://www.buymeacoffee.com/shashankk)  - Support original creator of base code
