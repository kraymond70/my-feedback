# Introduction #


Have you ever noticed Google+ has an amazing feature called Google Feedback. You click on feedback highlight an area of the site page and getting screenshot with your marking on it sent to the Google support team. If you wonder of having this tool on your own, just take my code and adapt for your requirements.

![http://dsheiko.com/download/000000124/rst-01.jpg](http://dsheiko.com/download/000000124/rst-01.jpg)

# How to install #

First of all you have to install server side components for making screenshots ( XServer and CutyCapt).

The first set of steps is to get the requirements for CutyCapt installed and the Headless XServer setup. On Ubuntu it can be done like that:

```unix

sudo apt-get update
sudo apt-get -y install build-essential
sudo apt-get install xvfb
sudo apt-get install xfs xfonts-scalable xfonts-100dpi
sudo apt-get install libgl1-mesa-dri
sudo apt-get install subversion libqt4-webkit libqt4-dev g++
```

Now let's download and install CutyCapt.

```xml

svn co https://cutycapt.svn.sourceforge.net/svnroot/cutycapt cd cutycapt/CutyCapt
qmake
make
```

Create a folder for the tool scripts (e.g. 'srt') and copy there the package files.

You have to include into the HTLM code of you page JS and CSS on the Support Request Tool plugin

```html

<link rel="stylesheet" type="text/css" href="./assets/srt.css" /> <script type="text/javascript" src="./js/jquery.srt.js">

Unknown end tag for &lt;/script&gt;


```

It is assumed that you are using jQuery on the page:

```html

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js">

Unknown end tag for &lt;/script&gt;


```

You also need to include srt-embedding.php

```php

<? include "srt-embedding.php" ?>
```

At the last we change in srt-config.php relative path for the tool folder

```php

define ('SRT_BASE_RPATH', './srt');
```

And the 'screenshots' folder of the package must have write permission.

```unix

chmod 777 screenshots
```