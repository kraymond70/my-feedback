<?PHP
/*
 * @category View
 * @package Support Request Tool
 * @copyright 2011, 2012 Dmitry Sheiko (http://dsheiko.com)
 * @license GNU
 */
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Support Request Tool</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.srt.js"></script>
<link rel="stylesheet" type="text/css" href="./assets/srt.css" />
<link rel="stylesheet" type="text/css" href="./assets/example.css" />
    
</head>
<body>

    <body>
    <div class="desktop">
        <div class="silo">
        <div class="header">
            <h1>Support Request Tool</h1>
        </div>
        <div class="body">
            <div id="sbar" class="sidebar">
                <h2>Who is the author?</h2>
                <p>
                    I'm Dmitry Sheiko, a web developer, open source contributor. Since 1987 in IT Research and in web-development since 1998. Find out more <a href="http://dsheiko.com/aboutme">on my page</a>.
                </p>
                <h2>Download</h2>
                <p>
                    The package with souce code is available at
                    <a title="Download Support Request Tool like Google Feedback for free" href="http://code.google.com/p/Support Request Tool like Google Feedback/downloads/list">here</a>
                </p>
                <h2>Requirements</h2>
                <p>
                    The version tested on
                    </p><ul>
                    <li>Firefox</li>
                    <li>Google Chrome</li>
                    <li>Opera</li>
                    <li>Apple Safari</li>
                    </ul>

                <h2>License</h2>
                <p>
                    This project is distributed under <a href="http://www.gnu.org/licenses/gpl.html" rel="nofollow">GPL</a>
                </p>
                <h2>Bugs</h2>
                <p>
                    Project is hosted at Google Code, so
                    if you see any bugs, you can <a href="http://code.google.com/p/Support Request Tool like Google Feedback/issues/list">report them to me</a>
                </p>
            </div>
            <div class="content">
                <h2>Introduction</h2>
<p>
Have you ever noticed Google+ has an amazing feature called Google Feedback. You click on feedback highlight an area of the site page and getting screenshot with your marking on it sent to the Google support team.  If you wonder of having this tool on your own, just take my code and adapt for your requirements.</p>
<h2>How to install</h2>
<p>
First of all you have to install server side components for making screenshots ( XServer and CutyCapt).</p>
<p>The first set of steps is to get the requirements for CutyCapt installed and the Headless XServer setup. On Ubuntu it can be done like that:</p>

<textarea>
sudo apt-get update
sudo apt-get -y install build-essential
sudo apt-get install xvfb
sudo apt-get install xfs xfonts-scalable xfonts-100dpi
sudo apt-get install libgl1-mesa-dri
sudo apt-get install subversion libqt4-webkit libqt4-dev g++
</textarea>

<p>Now let's download and install CutyCapt.</p>

<textarea>
svn co https://cutycapt.svn.sourceforge.net/svnroot/cutycapt
cd cutycapt/CutyCapt
qmake
make
</textarea>

<p>Create a folder for the tool scripts (e.g. 'srt') and copy there the package files.</p>
<p>You have to include into the HTLM code of you page JS and CSS on the Support Request Tool plugin</p>

<textarea>
<link rel="stylesheet" type="text/css" href="./assets/srt.css" />
<script type="text/javascript" src="./js/jquery.srt.js"></script>
</textarea>

<p>It is assumed that you are using  jQuery on the  page:</p>
<textarea>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
</textarea>
<p>You also need to include srt-embedding.php</p>
<textarea>
<? print '<? include "srt-embedding.php" ?>'; ?>
</textarea>
<p>At the last we change in srt-config.php relative path for the tool folder</p>
<textarea>
define ('SRT_BASE_RPATH', './srt');
</textarea>
<p>And the 'screenshots' folder of the package must have write permission.</p>
<textarea>
chmod 777 screenshots
</textarea>

        <p>
            My other open source works can be found <a href="http://dsheiko.com/freeware/">here</a>
        </p>
            </div>
        </div>
        </div>
        <div class="copyright">
            Produced by <a href="http://dsheiko.com">Dmitry Sheiko</a>
        </div>
    </div>

    <? include "srt-embedding.php" ?>


</body>
</html>