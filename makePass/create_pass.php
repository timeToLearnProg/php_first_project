<?php
session_start();
date_default_timezone_set('Asia/Yekaterinburg');
require('tfpdf.php');

    class PDF_receipt extends tfpdf
    {
        public function __construct($orientation = 'p', $unit = 'pt', $format = 'Letter', $margin = 40){
            // $this->FPDF($orientation, $unit, $format);
            parent::__construct($orientation, $unit, $format, $margin);
            $this->SetTopMargin($margin);
            $this->SetLeftMargin($margin);
            $this->SetRightMargin($margin);

            $this->SetAutoPageBreak(true, $margin);
        }

        public function Header(){
            $this->AddFont('DejaVu','','DejaVuSans.ttf',true);
            $this->SetFont('DejaVu','',10);
            $this->image('img/abc-logo.png', $x = 20, $y = 10, $w =115, $h = 70);//вставка рисунка

            $this->Cell(0, 16, "'Разрешаю'", 0, 1, 'R');
            $this->Cell(0, 16, "Генеральный директор Inc.'АВС'", 0, 1, 'R');

            $this->SetXY(400, 70);
            $this->Cell(110, 20, "", 'B', 1, 'R');

            $this->SetXY(479, 75);
            $this->Cell(0, 20, "C. DUNGEY", 0, 1, 'R');

            $this->SetXY(403, 95);
            $this->Cell(25, 14, "'       '", 'B', 1, 'C');

            $this->SetXY(433, 95);
            $this->Cell(90, 14, "", 'B', 0, 'R');

            $this->SetXY(528, 95);
            $this->Cell(30, 14, "", 'B', 0, 'R');

            $this->SetXY(538, 98);
            $this->Cell(0, 14, "г.", 0, 0, 'R');
        }

         public function RusDay($_mDdd){
            $ex = explode(".", $_mDdd);
            $_monthsList = array("01" => "января", "02" => "февраля",
            "03" => "марта", "04" => "апреля", "05" => "мая", "06" => "июня",
            "07" => "июля", "08" => "августа", "09" => "сентября",
            "10" => "октября", "11" => "ноября", "12" => "декабря");
            $_dD = $ex[0];
            $_mD = $ex[1];
            $_yD = $ex[2];
            $currentDate = "$_dD " . "       " .   "$_monthsList[$_mD]" . "       " . "$_yD";
            return $currentDate;
        }

        public function HoureMinet($hMinSec){
            $res = explode(":", $hMinSec);
            $h = $res[0];
            $m = $res[1];
            $s = $res[2];

            $result = "$h" . "          " . "$m";
            return $result;
        }

    }
// <------------------
    // Создав экземпляр нашего класса, добавив страницу и установив шрифт, мы можем перейти к делу.
    $pdf = new PDF_receipt();
    $pdf->AddFont('DejaVu','','DejaVuSans.ttf',true);
    // $pdf->AddFont('DejaVu','','DejaVuSerif.ttf',true);
    $pdf->AddPage();

    // установили дату
    $pdf->SetFont('DejaVu','',12);
    $pdf->SetXY(418, 97);
    $pdf->Cell(132, 14, $pdf->RusDay($_POST['date']), 0, 0, 'C');
    // $pdf->SetFont('DejaVu', '');
// <-----------
    // установили наименование пропуск

    $pdf->SetXY(25, 124);
    $pdf->Cell(0, 20, 'ПРОПУСК №' , 0, 0, 'C');
    // подчеркивание после пропуска
    $pdf->SetXY(341, 118);
    $pdf->Cell(30, 20, '' , 'B' , 1, 'C');

     // добавляем номер пропуска
    $pdf->SetFont('DejaVu','',8);
    $pdf->SetXY(340, 124);
   $pdf->Cell(30, 20,  $_POST['number'], 0, 0, 'C');
// <-----------


    // Следующая строка
   $pdf->SetFont('DejaVu','',12);
    $pdf->SetXY(18, 140);
    $pdf->Cell(0, 20, "Incorporated 'American Broadcasting Company'" , 0, 0, 'C');

// <-----------
    // Следующая строка
    $pdf->SetXY(60, 170);
    $pdf->Cell(0, 14, "Ф.И.О. посетителя:" , 0, 0, 'L');
    // подчеркивание после Ф.И.О. посетителя
    $pdf->SetXY(188, 161);
    $pdf->Cell(340, 20, '' , 'B' , 1, 'C');
    // выводим Ф.И.О
    $pdf->SetXY(200, 167);
    $pdf->Cell(200, 17, $_POST['name2'], 0, 2);
    $pdf->SetXY(280, 167);
    $pdf->Cell(100, 17, $_POST['name1'], 0, 0, 'C');
    $pdf->SetXY(380, 167);
    $pdf->Cell(200, 17, $_POST['middle_name'], 0, 2);
// <-----------

// <-----------
    // Следующая строка
    $pdf->SetXY(60, 185);
    $pdf->Cell(0, 14, "Документ удостоверяющий личность, наименование:" , 0, 0, 'L');
    // подчеркивание после Документ удостоверяющий личность, наименование
    $pdf->SetXY(407, 176);
    $pdf->Cell(121, 20, '' , 'B' , 1, 'C');
    // выводим наименование документа
    $pdf->SetXY(407, 182);
    $pdf->Cell(200, 17, $_POST['nameDoc'], 0, 2);
// <-----------

// <-----------
     // Выводим слово серия
    $pdf->SetXY(60, 200);
    $pdf->Cell(0, 14, "Серия", 0, 0, 'L');
    // подчеркивание после серия
    $pdf->SetXY(105, 191);
    $pdf->Cell(50, 20, '' , 'B' , 1, 'C');
     // выводим серию документа
    $pdf->SetXY(102, 197);
    $pdf->Cell(100, 17, $_POST['seriaDoc'], 0, 2);
// <-----------

// <-----------
      // Выводим слово №
    $pdf->SetXY(156, 200);
    $pdf->Cell(0, 14, "№", 0, 0, 'L');
    // подчеркивание после №
    $pdf->SetXY(174, 191);
    $pdf->Cell(60, 20, '' , 'B' , 1, 'C');
    // выводим номер документа
    $pdf->SetXY(176, 197);
    $pdf->Cell(200, 17, $_POST['numberDoc'], 0, 2);
// <-----------

// <-----------
    // Выводим слово Кем и когда выдан
    $pdf->SetXY(236, 200);
    $pdf->Cell(100, 14, "Кем и когда выдан", 0, 0, 'L');
    // подчеркивание после Кем и когда выдан
    $pdf->SetXY(363, 191);
    $pdf->Cell(165, 20, '' , 'B' , 1, 'C');
    // выводим   Кем и когда выдан
    $pdf->SetFont('DejaVu','',10);
    $pdf->SetXY(360, 197);
    $pdf->Cell(200, 17, $_POST['makeDoc'], 0, 2);
    $pdf->SetFont('DejaVu','',12);
// <-----------

// <-----------
   // Выводим слово Место работы
    $pdf->SetXY(60, 215);
    $pdf->Cell(100, 14, "Место работы", 0, 0, 'L');
    // подчеркивание после Место работы
    $pdf->SetXY(156, 206);
    $pdf->Cell(372, 20, '' , 'B' , 1, 'C');

    $pdf->SetXY(156, 211);
    $pdf->Cell(372, 20, $_POST['ma_work'], 0, 2);

// <---------------------

// <-----------
    // Выводим Отдел лицо к кому приходит посетитель
    $pdf->SetXY(55, 230);
    $pdf->Cell(200, 14, " Отдел лицо к кому приходит посетитель", 0, 0, 'L');
    // подчеркивание после Отдел лицо к кому приходит посетитель
    $pdf->SetXY(323, 222);
    $pdf->Cell(205, 20, '' , 'B' , 1, 'C');

    $pdf->SetXY(326, 228);
    $pdf->Cell(200, 17, $_POST['goust'], 0, 2);
// <------------------------

// <------------------------
    // Выводим Дата
    $pdf->SetXY(58, 245);
    $pdf->Cell(40, 14, "Дата", 0, 0, 'L');
    // подчеркивание Дата
    $pdf->SetXY(95, 237);
    $pdf->Cell(20, 20, '' , 'B' , 1, 'C');
     // подчеркивание после подчеркивания Дата
    $pdf->SetXY(122, 237);
    $pdf->Cell(80, 20, '' , 'B' , 1, 'C');
    // подчеркивание после подчеркивания после подчеркивания Дата
    $pdf->SetXY(209, 237);
    $pdf->Cell(40, 20, '' , 'B' , 1, 'C');

    $pdf->SetXY(105, 245);
    $pdf->Cell(132, 14, $pdf->RusDay($_POST['date']), 0, 0, 'C');

    $pdf->SetXY(246, 245);
    $pdf->Cell(0, 14, "г.", 0, 0, 'L');
// <------------------------

// <------------------------
    // Выводим Время
    $pdf->SetXY(258, 245);
    $pdf->Cell(70, 14, "Время прибытия", 0, 0, 'L');

    $pdf->SetXY(370, 237);
    $pdf->Cell(20, 20, '' , 'B' , 1, 'C');

    $pdf->SetXY(340, 245);
    $pdf->Cell(132, 14, $pdf->HoureMinet($_POST['time']), 0, 0, 'C');

    $pdf->SetXY(390, 245);
    $pdf->Cell(30, 14, "час.", 0, 0, 'L');

    $pdf->SetXY(425, 237);
    $pdf->Cell(20, 20, '' , 'B' , 1, 'C');

     $pdf->SetXY(445, 245);
    $pdf->Cell(30, 14, "мин.", 0, 0, 'L');
// <------------------------


// <------------------------
$pdf->SetXY(258, 261);
    $pdf->Cell(70, 14, "Время убытия", 0, 0, 'L');

    $pdf->SetXY(370, 253);
    $pdf->Cell(20, 20, '' , 'B' , 1, 'C');

    $pdf->SetXY(340, 261);
    $pdf->Cell(132, 14, $pdf->HoureMinet($_POST['time_out']), 0, 0, 'C');

    $pdf->SetXY(343, 261);
    $pdf->Cell(132, 14, " ", 0, 0, 'C');

    $pdf->SetXY(390, 261);
    $pdf->Cell(30, 14, "час.", 0, 0, 'L');

    $pdf->SetXY(425, 253);
    $pdf->Cell(20, 20, '' , 'B' , 1, 'C');

     $pdf->SetXY(445, 261);
    $pdf->Cell(30, 14, "мин.", 0, 0, 'L');
// <------------------------


// <------------------------
 // Выводим Время
     $pdf->SetFont('DejaVu','',11);
    $pdf->SetXY(58, 277);
    $pdf->Cell(0, 14, "Должность, ФИО, подпись ответственного сотрудника Inc.'АВС' за посетителя:", 0, 0, 'L');
     $pdf->SetXY(58, 293);
    $pdf->Cell(467, 14, '' , 'B' , 1, 'C');

    $pdf->SetXY(62, 294);
    $pdf->Cell(200, 17, $_POST['goust'], 0, 2);
// <------------------------

// <------------------------
    $pdf->SetFont('DejaVu','',12);

    $pdf->SetXY(188, 340);
    $pdf->Cell(0, 14, "Пропуск оформил:" , 0, 0, 'L');

    $pdf->SetXY(315, 338);
    $pdf->Cell(219, 14, '' , 'B' , 1, 'C');

    $pdf->SetXY(315, 338);
    $pdf->Cell(240, 17, $_POST['contr'], 0, 2);

    $pdf->SetFont('DejaVu','',8);

    $pdf->SetXY(348, 350);
    $pdf->Cell(0, 14, "(Должность ФИО)" , 0, 0, 'L');

     $pdf->SetFont('DejaVu','',12);
// <------------------------

// <------------------------
      $pdf->SetXY(348, 390);
     $pdf->Cell(0, 14, "Подпись:" , 0, 0, 'L');

    $pdf->SetXY(410, 387);
     $pdf->Cell(122, 14, '' , 'B' , 1, 'C');

// <------------------------


    $pdf->SetXY(40, 225);
    $pdf->SetXY(118, 225);


    $filename = $_POST['name2'] . "_" . $_POST['date'] . "_" . "pass" . ".pdf";
    $dir = "Pass/PDF/";
    $pdf->Output($dir . $filename, 'F');
    // $pdf->Output();