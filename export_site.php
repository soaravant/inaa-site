<?php
$html = file_get_contents('http://localhost:8000');

// Fix paths to be relative (simple string replacement)
// We replace "/user/ with "./user/ etc.
// We also need to handle the base url if it's present.
// The raw HTML had "\/user\/images..." in JS, which is "/user/images...".
// We should replace those too.

$html = str_replace('"/user/', '"./user/', $html);
$html = str_replace('"/assets/', '"./assets/', $html);
$html = str_replace('"/images/', '"./images/', $html);

// Handle JS escaped slashes
$html = str_replace('"\/user\/', '"./user/', $html);
$html = str_replace('"\/assets\/', '"./assets/', $html);
$html = str_replace('"\/images\/', '"./images/', $html);

// Handle CSS links and Scripts
$html = str_replace('href="/user/', 'href="./user/', $html);
$html = str_replace('src="/user/', 'src="./user/', $html);
$html = str_replace('href="/assets/', 'href="./assets/', $html);
$html = str_replace('src="/assets/', 'src="./assets/', $html);

// Handle inline background images (single quotes or no quotes)
// url('/user/...') -> url('./user/...')
$html = str_replace("url('/user/", "url('./user/", $html);
$html = str_replace('url("/user/', 'url("./user/', $html);
$html = str_replace('url(/user/', 'url(./user/', $html);

// Handle escaped versions just in case
$html = str_replace("url('\/user\/", "url('./user/", $html);

// Create directory
if (!is_dir('static_export')) {
    mkdir('static_export');
}

file_put_contents('static_export/index.html', $html);

// Recursive copy function
function recurse_copy($src, $dst)
{
    $dir = opendir($src);
    if (!is_dir($dst)) {
        mkdir($dst, 0755, true);
    }
    while (false !== ($file = readdir($dir))) {
        if (($file != '.') && ($file != '..')) {
            if (is_dir($src . '/' . $file)) {
                recurse_copy($src . '/' . $file, $dst . '/' . $file);
            } else {
                copy($src . '/' . $file, $dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

echo "Copying user directory...\n";
recurse_copy('user', 'static_export/user');
echo "Copying assets directory...\n";
recurse_copy('assets', 'static_export/assets');
echo "Copying images directory...\n";
recurse_copy('images', 'static_export/images');

echo "Export complete.\n";
?>