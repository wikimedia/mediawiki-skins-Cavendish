# Cavendish
Cavendish MediaWiki skin version 2.6.0

## Compatibility
This version of the skin is compatible with MW 1.35+

## Customization
There are different options that can be set in `LocalSettings.php`.

`$wgLogos['1x-options'] = [ 'width' => 10, 'height' => 20, 'margin' => 10 ]`
* width of the logo as a number in px
* height of the logo as a number in px
* offset on top of the logo

`$wgCavendishSiteWidth`
fixed width of the content area, if not set it's dynamic (default is false, that means dynamic)

`$wgCavendishQRCode`
Whether to add QR code to all pages (true) or not (false)

`$wgCavendishQRUrlAdd`
Used to track campaign for entry through QR Code in analytics software (e.g. Google Analytics, Piwik, ...); default is "?pk_campaign=qr-code"
