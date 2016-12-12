<?php

namespace pxgamer
{

    /**
     * Class dirtyAPI
     * @package pxgamer
     */
    class dirtyAPI
    {
        /**
         * @var array
         */
        private static $urls = [
            'html' => 'https://dirtymarkup.com/api/html',
            'css' => 'https://dirtymarkup.com/api/css',
            'js' => 'https://dirtymarkup.com/api/js',
        ];

        /**
         * dirtyAPI constructor.
         */
        public function __construct()
        {
        }

        /**
         * @param $code
         * @param int $indent
         * @return bool|mixed
         */
        public static function html($code, $indent = 4)
        {
            return self::post('html', $code, $indent);
        }

        /**
         * @param string $mode
         * @param string $code
         * @param int $indent
         * @return bool|mixed
         */
        private static function post($mode = 'html', $code = '', $indent = 4)
        {
            if (!isset(self::$urls[$mode]))
            {
                return false;
            }
            $ch = curl_init();
            curl_setopt_array(
                $ch,
                [
                    CURLOPT_URL => self::$urls[$mode],
                    CURLOPT_POST => 1,
                    CURLOPT_POSTFIELDS => http_build_query(['code' => $code, 'indent' => $indent]),
                    CURLOPT_SSL_VERIFYPEER => 0,
                    CURLOPT_SSL_VERIFYHOST => 0,
                    CURLOPT_RETURNTRANSFER => 1,
                ]
            );
            $result = json_decode(curl_exec($ch));
            curl_close($ch);

            return $result;
        }

        /**
         * @param $code
         * @param int $indent
         * @return bool|mixed
         */
        public static function css($code, $indent = 4)
        {
            return self::post('css', $code, $indent);
        }

        /**
         * @param $code
         * @param int $indent
         * @return bool|mixed
         */
        public static function js($code, $indent = 4)
        {
            return self::post('js', $code, $indent);
        }
    }
}
