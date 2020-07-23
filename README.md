# Download envato Purchased item using API, php script
Simple code to setup download of purchased items using envato API

This code is useful when you need to download a purchased item from envato using API. I originally created this to give access to a purchased file which I purchased for a friend of mine using my account. When any update to that item arrives, my friend used to ask me for the updated files, I'd then go to my envato account, download the updated files, upload to a cloud file hosting and then share the link with friend. So long and time killing process!

So, I created this script, hosted on my server in a folder & provided the link to that folder only to that friend. Now, He's able to download the latest files anytime by just visiting the url.

However, You may also want to add an extra layer of protection by adding a secret query string validation on index.php to prevent unauthorized use of API.

## How to use?
Using this script is pretty simple and straightforward. Here are some steps:

* Download the script from github
* Upload to your server in a folder
* Go to <a href="https://build.envato.com/my-apps/" target="_blank">http://build.envato.com/</a> and create a new token with following selected: View and search Envato sites, Download your purchased items
* Open class.env.php with a code editor
* replace the value of $bearer with your token
* Save the file and you're ready to go
* Just use the url to the folder on your browser and you should be able to download the file.
* You need to pass a query string purchase_code to the url, or if you don't want the user to provide a purchase code, you can add the purchase code in index.php file where it says PURCHASE-CODE-HERE

## Credits
This is powered by ThemeNcode. an envato Elite Author. Check out some of our products:
<a href="https://codecanyon.net/item/pdf-viewer-for-wordpress/8182815/">PDF Viewer for WordPress</a>
<a href="https://codecanyon.net/item/wp-file-access-manager/26430349">WP File Access Manager</a>
<a href="https://codecanyon.net/item/themencode-pdf-reader-php-script/10015637">ThemeNcode PDF Reader</a>

### We also recommend

<a href="https://codecanyon.net/item/salespower-woocommerce-addon/23448445">SalesPower - WooCommerce Addon</a>
<a href="https://codecanyon.net/item/quotify/23172738?s_rank=2">Quotify WooCommerce Addon</a>

## Questions ?
Please feel free to reach us for any kind of queries.
