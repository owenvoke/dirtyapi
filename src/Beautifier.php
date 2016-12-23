<?php

namespace pxgamer\dirtyApi;

/**
 * Class Beautifier
 * @package pxgamer\dirtyApi
 */
class Beautifier
{
    const BASE_URL = 'https://dirtymarkup.com/api';

    /**
     * @param $code
     * @param int $indent
     * @return bool|mixed
     */
    public function html($code, $indent = 4)
    {
        return $this->post('/html', [
            'code' => $code,
            'indent' => $indent
        ]);
    }

    /**
     * @param $code
     * @param int $indent
     * @return bool|mixed
     */
    public function css($code, $indent = 4)
    {
        return $this->post('/css', [
            'code' => $code,
            'indent' => $indent
        ]);
    }

    /**
     * @param $code
     * @param int $indent
     * @return bool|mixed
     */
    public function js($code, $indent = 2)
    {
        return $this->post('/js', [
            'code' => $code,
            'indent' => $indent
        ]);
    }

    /**
     * @param string $mode
     * @param $content
     * @return bool|mixed
     */
    private function post($mode, $content)
    {
        $ch = curl_init();
        curl_setopt_array(
            $ch,
            [
                CURLOPT_URL => self::BASE_URL . $mode,
                CURLOPT_POST => 1,
                CURLOPT_POSTFIELDS => http_build_query($content),
                CURLOPT_SSL_VERIFYPEER => 0,
                CURLOPT_SSL_VERIFYHOST => 0,
                CURLOPT_RETURNTRANSFER => 1,
            ]
        );
        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}
