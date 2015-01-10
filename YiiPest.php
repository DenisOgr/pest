<?php
/**
 * Created by Marketing Pdffiller.
 * User: Denis Porplenko <denis.porplenko@pdffiller.com>
 * Date: 1/10/15
 * Time: 5:08 PM
 */

include 'Pest.php';

/**
 * Implements RESTfull client for Yii2 server
 * Class YiiPest
 */
class YiiPest  extends Pest{

    /**
     * Perform HTTP HEAD request
     * @param string $url
     * @return string
     */
    public function head($url)
    {
        return $this->post($url, ['_method' => 'HEAD'], []);
    }

    /**
     * Perform HTTP OPTIONS request
     * @param string $url
     * @return string
     */
    public function options($url)
    {
        return $this->post($url, ['_method' => 'OPTIONS'], []);
    }

} 