<?php
/*
 * @category Controller
 * @package Support Request Tool
 * @copyright 2011, 2012 Dmitry Sheiko (http://dsheiko.com)
 * @license GNU
 */

include "srt-config.php";

class ScreenshotTool 
{
    
    public static function create($requestUri, $data)
    {
        ob_start();
        $filename = md5($requestUri) . ".png";
        passthru('xvfb-run --server-args="-screen 0, 1024x768x24" '
            . '/usr/ccapt/cutycapt/CutyCapt/CutyCapt --url=http://' . $_SERVER['SERVER_NAME']
            . '/' . ltrim($requestUri, "/") . '?srt-data=' . $data
            . ' --out=' . SRT_BASE_PATH . '/' . SRT_SCREENSHOT_RPATH. '/' . $filename);
        ob_end_flush();
        return SRT_SCREENSHOT_RPATH. '/' . $filename;
    }
}
$url = ScreenshotTool::create($_REQUEST["requestUri"], $_REQUEST["srt-data"]);

header("HTTP/1.0 200");
echo $_REQUEST["callback"] . '({"url" : "' . $url . '"});';
// Clean up memory and stuff like that.
flush();
gc_collect_cycles();