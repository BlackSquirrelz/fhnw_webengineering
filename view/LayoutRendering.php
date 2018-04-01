<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 13:15
 */

namespace view;

class LayoutRendering
{
    public static function basicLayout(TemplateView $contentView) {
        $view = new TemplateView("layout.php");
        $view->header = (new TemplateView("header.php")) -> render();
        $view->content = $contentView->render();
        $view->footer = (new TemplateView("footer.php")) ->render();
        echo $view->render();
    }

}