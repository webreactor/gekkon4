<?php

namespace Reactor\Gekkon\Tags\Common;

class Tag_static extends Tag_no_parse {
    function __construct($content = '') {
        $this->content_raw = $content;
    }
}

//end of class
