<?php

if(!function_exists('encode_id')) {
    function encode_id($id)
    {
        return app('hash.id')->encode($id);
    }
}

if(!function_exists('decode_id')) {
    function decode_id($encodeId)
    {
        return app('hash.id')->decode_id($encodeId);
    }
}