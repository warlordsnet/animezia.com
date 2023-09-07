<p align="center">
  <a href="https://animezia.com/">
    <img alt="AnimeZia website" src="https://cdnzia.pages.dev/images/logo.webp" width="150">
  </a>
</p>

<h1 align="center">
  AnimeZia - Watch High Quality Anime Online, No Ads !
</h1>

<p align="center">
 A PHP web application used for browsing, searching and fetching anime details and episodes.
</p>
<p align="center">
    <a href="https://discord.gg/43pgyxBDPg">
      <img src="https://img.shields.io/discord/987492554486452315?color=7289da&label=discord&logo=discord&logoColor=7289da" alt="Discord">
    </a>
    <a href="https://telegram.me/animezia_updates">
    <img src="https://img.shields.io/badge/-warlordsnet-blue?style=flat-square&logo=telegram&logoColor=white&link=https://www.telegram.me/animezia_updates" alt="GitHub">
  </a>
</p>

<h2> Table of Contents </h2>

- [Note](#note)
- [Features](#features)
- [Requirements](#requirements)
- [Installation](#installation)
  - [Locally](#locally)
  - [Docker](#docker)
  - [Heroku](#heroku)
  - [Vercel](#vercel)
  - [Render](#render)
  - [Railway](#railway)
-[sponsor](#sponsor)

## Note

* This is an **Educational** Project, purely made for learning purposes.
* We do **NOT** promote piracy or free anime streaming sites.

  <div align="center">
   <h2> Demo https://the.animezia.com </h2> <br>
   <!-- PREVIEW IMAGE -->
<img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiceJ8ksJ7c_-6zydA2eB2l9jKM0ls32LALgy60oizZrMn4tJwZ1IH48aurvpgoH6aok11EjXQ5YPfytuc-oXJJ6q5Ar83fV6nXQrvgSdNhQPMZ96dNxkqh6SEyEJK6flk-UWQncxzqurvh_nls_yZ8VEDJ-zDpQeCVKdq1WzztkqsLendtpbNgXYXLQw/s700/Screenshot%202023-04-01%20184807.png">
  </div>
  
  <hr />
<strong>This is old source of https://animezia.com </strong>
This is an improved version of Anikatsu - Base code of this repo.
New source code of animezia.com will not be public anytime soon.


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
 - A php webserver hosting. [Buy paid or free hostings](#hosting)
 - A domain for website. [Buy nice domain or get a free](#domain)
 - Deploy [Zia Api](#api).
 - Deploy [Consu Api](#api).
 - First deploy the <a href="https://github.com/warlordsnet/zia-api" >API REPO</a>. Deploy It and Update the `$api` variable in `_config.php` with new URL.
 - Also deploy this <a href="https://github.com/warlordsnet/consu-api">api repo</a> if you want the trending section and banner.
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

## Domain
Purchase a domain from ambitionhost.in, namecheap or godaddy.
If u dont know what to do about domain - **_search google on how to buy domain and add cloudflare to it_**

If you try a free hosting given below, you will get a free sub-domain from them.
You can also get a free domain from FREENOM - **_search google on how get freenom domain_**

## Hosting

**Only for testing**
You can try these free hosting providers for demo or testing. Do not use these as your own because these are slow. -
 - https://www.infinityfree.net/   
 - https://profreehost.com/   
 - https://in.000webhost.com/free-php-hosting


**Important & required**
Buy Php hosting from ambitionhost.in (cheap), hostinger.in, bluehost.in or godaddy.
If you have purchased a domain, **_search google on how to add domain to cpanel hosting_**

Once you have purchased Cpanel from hosting provider then follow these:
 - Login your Cpanel > Open file manager. ![image](https://user-images.githubusercontent.com/96106468/229330640-e5efbb5b-ca74-47f5-8316-f4a052cd9e4a.png)
 - Open `public_html` (some cpanel may have `htdocs` instead of public_html so follow same steps) ![image](https://user-images.githubusercontent.com/96106468/229330740-37fff5cd-fbc1-47fd-a57b-909b9abc50ea.png)
 - Upload the files of this repo in the public_html directory.
 - configure domains from cpanel and site is ready ✨

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

## Sponsor
 - aayushsc@upi