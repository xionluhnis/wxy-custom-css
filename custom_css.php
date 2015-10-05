<?php

include_once ROOT_DIR . '/files.php';

/**
 * Allow customized CSS for specific files
 * or directories by looking for {file}.css
 * next to the corresponding {file}.md
 */
class Custom_CSS {

    public function before_render(&$twig_vars, &$twig, &$template) {
        $css = Request::resolve_custom('.css');
        if(!$css)
            $css = Request::resolve_path('style.css');
        $twig_vars['custom_css'] = $css;
    }

}

?>
