<?php
/*
 * @category View
 * @package Support Request Tool
 * @copyright 2011, 2012 Dmitry Sheiko (http://dsheiko.com)
 * @license GNU
 */
include "srt-config.php";

if (isset ($_GET["srt-data"])) : ?>
<?
$params = explode (",", $_GET["srt-data"]);
list($left, $top, $width, $height) = $params;
?>
        <style type="text/css">
        div.srt-rectangle {
            top: <?= $top ?>px;
            left: <?= $left ?>px;
            width: <?= $width ?>px;
            height: <?= $height ?>px;
        }
        div.srt-shadow.srt-top {
            top: 0px;
            left: 0px;
            width: 100%;
            height: <?= $top ?>px;
        }
        div.srt-shadow.srt-bottom {
            top: <?= ($top + $height) ?>px;
            left: 0px;
            width: 100%;
            height: 100%;
        }
        div.srt-shadow.srt-left {
            top: <?= $top ?>px;
            left: 0px;
            width: <?= $left ?>px;
            height: <?= $height ?>px;
        }
        div.srt-shadow.srt-right {
            top: <?= $top ?>px;
            left: <?= $left + $width ?>px;
            width: 100%;
            height: <?= $height ?>px;
        }
        </style>
        <div class="srt-base srt-rectangle"></div>
        <div class="srt-base srt-shadow srt-top"></div>
        <div class="srt-base srt-shadow srt-bottom"></div>
        <div class="srt-base srt-shadow srt-left"></div>
        <div class="srt-base srt-shadow srt-right"></div>
<? else: ?>
        <div class="srt-feedback-btn">
        Feedback
    </div>
    <div class="srt-feedback">
        <div class="srt-header">
            <h2>Send feedback</h2>
            <a class="srt-close">X</a>
        </div>
        <form action="<?= SRT_BASE_RPATH ?>srt-preview.php" method="POST">
            <fieldset>
            <label>Highlight the problem:</label>
            <button class="srt-highlight srt-start">Start highlighting</button>
            <button class="srt-highlight srt-stop">Stop highlighting</button>
            </fieldset>
            <fieldset>
            <label>Describe the problem:</label>
            <textarea name="srt-description"></textarea>
            </fieldset>
            <input name="requestUri" type="hidden" value="<?= $_SERVER["REQUEST_URI"]?>" />
            <input name="srt-data" type="hidden" value="" />
            <button name="submit">Preview</button>
        </form>
    </div>
<? endif ?>