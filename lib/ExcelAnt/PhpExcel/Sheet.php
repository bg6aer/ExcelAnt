<?php

namespace ExcelAnt\PhpExcel;

use PHPExcel_Worksheet;

use ExcelAnt\Sheet\SheetInterface;

class Sheet implements SheetInterface
{
    private $phpExcelWorksheet;

    /**
     * @param WorksheetInterface $worksheet         The parent Worksheet where the Sheet will live
     * @param PHPExcel_Worksheet $phpExcelWorksheet
     */
    public function __construct(Worksheet $worksheet, PHPExcel_Worksheet $phpExcelWorksheet = null)
    {
        $this->phpExcelWorksheet = $phpExcelWorksheet ?: new PHPExcel_Worksheet($worksheet->getRawClass());
    }

    /**
     * Get the raw class
     *
     * @return PHPExcel_Worksheet
     */
    public function getRawClass()
    {
        return $this->phpExcelWorksheet;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle($name)
    {
        $this->phpExcelWorksheet->setTitle($name);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle()
    {
        return $this->phpExcelWorksheet->getTitle();
    }

    public function writeCell()
    {

    }

    public function addTable()
    {

    }

    public function setRowHeight()
    {

    }

    public function setColumnWidth()
    {

    }

    public function importImage()
    {

    }

    public function write()
    {

    }
}