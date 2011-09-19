<?PHP
/*
 * @category View
 * @package Support Request Tool
 * @copyright 2011, 2012 Dmitry Sheiko (http://dsheiko.com)
 * @license GNU
 */
include "srt-config.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Support Request Tool Preview</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.srt-preview.js"></script>
<link rel="stylesheet" type="text/css" href="./assets/srt.css" />
<link rel="stylesheet" type="text/css" href="./assets/example.css" />


</head>
<body>

    <body>
    <div class="desktop">
        <div class="silo">
        <div class="header">
            <h1>Support Request Tool Preview</h1>
        </div>
        <div class="body">

            <div class="content">
                <h2>Preview and Send Feedback to us</h2>
                <form class="srt-preview">
                    <input type="hidden" name="requestUri" value="<?= $_REQUEST["requestUri"] ?>" />
                    <input type="hidden" name="srt-data" value="<?= $_REQUEST["srt-data"] ?>" />
                    <fieldset>
                        <label>Describe the problem:</label>
                        <textarea name="srt-description"><?= $_REQUEST["srt-description"] ?></textarea>
                    </fieldset>
                    <fieldset>
                        <label>Screenshot:</label>
                        <div class="screenshot"><!-- --></div>
                    </fieldset>
                    <button name="submit">Submit</button>
                    <button name="cancel">Cancel</button>
                </form>

            </div>
        </div>
        </div>
        <div class="copyright">
            Produced by <a href="http://dsheiko.com">Dmitry Sheiko</a>
        </div>
    </div>

</body>
</html>