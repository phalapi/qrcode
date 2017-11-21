<?php
namespace PhalApi\QrCode;

/**
 * 生成二维码
 *
 * @see http://phpqrcode.sourceforge.net/
 * @author: dogstar 2017-11-21
 */

class Lite {

    protected $config;

    protected $client;

    /**
     * @param string $config['accessKey']  统一的key
     * @param string $config['secretKey']
     * @param string $config['space_bucket']  自定义配置的空间
     * @param string $config['space_host']  
     */
    public function __construct($config = NULL) {
        $this->config = $config;

        if ($this->config === NULL) {
            $this->config = \PhalApi\DI()->config->get('app.QrCode');
        }
    }
}
