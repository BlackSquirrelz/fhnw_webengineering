<?php
/**
 * Created by PhpStorm.
 * User: andreas.martin
 * Date: 01.11.2017
 * Time: 13:51
 */

namespace controller;

use service\ProjectServiceImpl;
use view\TemplateView;
use service\PDFServiceClient;

class PDFController
{
    public static function generatePDFProjects(){
        $pdfView = new TemplateView("projectsListPDF.php");
        $pdfView->projects = (new ProjectServiceImpl())->findAllProjects();
        $result = PDFServiceClient::sendPDF($pdfView->render());
        header("Content-Type: application/pdf", NULL, 200);
        echo $result;
    }
}