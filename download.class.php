<?php

 

define('BUF_SIZE', 8192);

define('CONTENT_TYPE', 'application/octet-stream');

define('CONTENT_DESCRIPTION', 'File Transfer');

define('CON_STATUS_NORMAL', 0);

define('CON_STATUS_ABORTED', 1);

define('CON_STATUS_TIMEOUT', 2);

define('X_POWERED', 'PHP/SIMDownload');

 

class SIMDownload

{

    var $server_vars;

    var $filename;

    var $filesize;

    var $filetime;

    var $filepath;

    var $realpath;

    var $__contentType;

    var $__contentDisposition;

    var $__bufSize;

 

        function SIMDownload($fileName, $filePath='.', $contentDisposition=null, $bufSize=BUF_SIZE, $contentType=CONTENT_TYPE)

        {

            $this->filename = $fileName;

            $this->filepath = preg_replace('~[/]+$~', '', $filePath);

            $this->realpath = $this->filepath . '/' . $this->filename;

            if (!file_exists($this->realpath))

            {

                $this->__404();

                exit;

            }

            $this->filesize = filesize($this->realpath);

            $this->filetime = filemtime($this->realpath);

            $this->__bufSize = $bufSize;

            $this->__contentType = $contentType;

            $this->__contentDisposition = (!empty($contentDisposition)) ? $contentDisposition : $fileName;

            $this->server_vars = &$_SERVER;

        }

        function download()

        {

            $realpath = $this->realpath;

            if (!file_exists($realpath))

            {

                $this->__404();

                exit;

            }

            $fp = fopen($realpath, 'rb');

            if (!is_resource($fp))

            {

                $this->__403();

                exit;

            }

            if (isset($this->server_vars['HTTP_RANGE']))

            {

                preg_match('~bytes=(\d+)-~', $this->server_vars['HTTP_RANGE'], $out);

                $range = intval($out[1]);

                fseek($fp, $range);

                $this->__206($range);

            }

            else

            {

                $this->__200();

            }

            while (!feof($fp) and connection_status() == CON_STATUS_NORMAL)

            {

                $content = fread($fp, $this->__bufSize);

                print $content;

            }

            fclose($fp);

            exit;

        }

        function __getGMT($time=null)

        {

            $offset = date('O');

            if ($offset{0} == '+') $roffset = '-';

            else $roffset = '+';

            $roffset .= $offset{1} . $offset{2};

            if (empty($time))

            {

                        $time = time();

                }

                return (date('D, d M Y H:i:s', $time+$roffset*3600) . ' GMT');

        }

        function __200()

        {

            header('HTTP/1.1 200 OK');

            header('Date: ' . $this->__getGMT());

            header('X-Powered-By: ' . X_POWERED);

            header('Expires: Mon, 27 Jan 1986 14:40:00 GMT');

            header('Last-Modified: ' . $this->__getGMT($this->filetime));

            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');

            header('Pragma: Public');

            header('Accept-Ranges: bytes');

            header('Content-Disposition: attachment; filename="' . $this->__contentDisposition . '"');

            header('Content-Type: ' . $this->__contentType);

            header('Content-Description: ' . CONTENT_DESCRIPTION);

            header('Content-Transfer-Encoding: binary');

            header('Content-Length: ' . $this->filesize);

            header('Proxy-Connection: close');

        }

        function __206($range=0)

        {

            $length = $this->filesize-$range;

            $offset = $this->filesize-1;

            header('HTTP/1.1 206 Partial Content');

            header('Date: ' . $this->__getGMT());

            header('X-Powered-By: ' . X_POWERED);

            header('Expires: Mon, 27 Jan 1986 14:40:00 GMT');

            header('Last-Modified: ' . $this->__getGMT($this->filetime));

            header('Cache-Control: must-revalidate, post-check=0, pre-check=0');

            header('Pragma: Public');

            header('Accept-Ranges: bytes');

            header('Content-Disposition: attachment; filename="' . $this->__contentDisposition . '"');

            header('Content-Type: ' . $this->__contentType);

            header('Content-Description: ' . CONTENT_DESCRIPTION);

            header('Content-Transfer-Encoding: binary');

            header("Content-Range: bytes $range-$offset/" . $this->filesize);

            header('Content-Length: ' . $length);

            header('Proxy-Connection: close');

        }

        function __403()

        {

            header('HTTP/1.0 403 Forbidden', true, 403);

            header('X-Powered-By: ' . X_POWERED);

            header('Proxy-Connection: close');

        }

        function __404()

        {

            header('HTTP/1.0 404 Not Found', true, 404);

            header('X-Powered-By: ' . X_POWERED);

            header('Proxy-Connection: close');

        }

}

 

?>

