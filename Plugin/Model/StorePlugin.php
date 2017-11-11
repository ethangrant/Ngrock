<?php

namespace Ethangrant\Ngrock\Plugin\Model;

class StorePlugin
{
    /**
     * Replace base url host name with one provided
     * by $_SERVER['HTTP_HOST'].
     *
     * @param \Magento\Store\Model\Store $subject
     * @param $result
     * @return string
     */
    public function afterGetBaseUrl(\Magento\Store\Model\Store $subject, $result)
    {
        $host = parse_url($result, PHP_URL_HOST);
        $url = str_replace($host, $_SERVER['HTTP_HOST'], $result);

        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {

            if (preg_match('/http:\/\//', $url)) {
                $url = str_replace('http://', 'https://', $url);
            }
        }

        return $url;
    }
}