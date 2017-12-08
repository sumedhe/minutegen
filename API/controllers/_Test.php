<?php
// Exception controller
class _Test extends Controller {

    public function __construct($request){
        parent::__construct($request);
    }

    public function main(){
        // Instanciation of inherited class
        $pdf = new PDF();
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('Times','',12);
        for($i=1;$i<=40;$i++){
            $pdf->Cell(0,10,'Printing line number '.$i,0,1);
        }



            // First page
        $html = 'You can now<np> easily print text mixing different styles: <b>bold</b>, <i>italic</i>,
        <u>underlined</u>, or <b><i><u>all at once</u></i></b>!<br><br>You can also insert links on
        text, such as <a href="http://www.fpdf.org">www.fpdf.org</a>, or on an image: click on the logo.';

        $pdf->AddPage();
        $pdf->SetFont('Arial','',20);
        // $pdf->Write(5,"To find out what's new in this tutorial, click ");
        // $pdf->SetFont('','U');
        // $link = $pdf->AddLink();
        // $pdf->Write(5,'here',$link);
        // $pdf->SetFont('');
        // // Second page
        // $pdf->AddPage();
        // $pdf->SetLink($link);
        // $pdf->Image('logo.png',10,12,30,0,'','http://www.fpdf.org');
        $pdf->SetLeftMargin(15);
        $pdf->SetFontSize(14);
        $pdf->WriteHTML($html);

        $pdf->Output();

    }

}
