<?php
class sinhvien{
    private $hoVaTen, $gioitinh,$ngaysinh, $quequan;

    public function __construct($hoVaTen, $gioitinh,$ngaysinh, $quequan)
    {
        $this->hoVaTen= $hoVaTen;
        $this->gioitinh= $gioitinh;
        $this->ngaysinh= $ngaysinh;
        $this->quequan= $quequan;

    }

    /**
     * @return mixed
     */
    public function getHoVaTen()
    {
        return $this->hoVaTen;
    }

    /**
     * @param mixed $hoVaTen
     */
    public function setHoVaTen($hoVaTen)
    {
        $this->hoVaTen = $hoVaTen;
    }

    /**
     * @return mixed
     */
    public function getGioitinh()
    {
        return $this->gioitinh;
    }

    /**
     * @param mixed $gioitinh
     */
    public function setGioitinh($gioitinh)
    {
        $this->gioitinh = $gioitinh;
    }

    /**
     * @return mixed
     */
    public function getNgaysinh()
    {
        return $this->ngaysinh;
    }

    /**
     * @param mixed $ngaysinh
     */
    public function setNgaysinh($ngaysinh)
    {
        $this->ngaysinh = $ngaysinh;
    }

    /**
     * @return mixed
     */
    public function getQuequan()
    {
        return $this->quequan;
    }

    /**
     * @param mixed $quequan
     */
    public function setQuequan($quequan)
    {
        $this->quequan = $quequan;
    }

}
$sinhvien = new sinhvien("Tung","nam","06/03/2002","Hà Nội");
echo $sinhvien->getHoVaTen();
echo $sinhvien->getGioitinh();
echo $sinhvien->getNgaysinh();
echo $sinhvien->getQuequan();
