<?php

class Reservation {

    //properties
    private $reservationNr = 1;
    private $roomType = "";
    private $email = "";
    private $roomNr = 1;
    private $startDate = "";
    private $endDate = "";
    private $paymentDate = "";
    private $totalPrice = 0;
    const SALES_TAX = 0.08;

    //setters
    function setEmail($email){
        $this->email=$email;
    }
    function setRoomType($roomType){
        $this->roomType=$roomType;
    }
    function setStartDate($startDate){
        $this->setStartDate=$startDate;
    }
    function setEndDate($endDate){
        $this->endDate=$endDate;
    }
    function setPaymentDate($paymentDate){
        $this->paymentDate=$paymentDate;
    }
    function setTotalPrice($totalPrice){
        $this->totalPrice=$totalPrice;
    }

    //getters
    function getReservationNr(): int {
        return $this->reservationNr;
    }
    function getRoomType(): string {
        return $this->roomType;
    }
    function getEmail(): string {
        return $this->email;
    }
    function getRoomNr(): int {
        return $this->roomNr;
    }
    function getStartDate() {
        return $this->startDate;
    }
    function getEndDate()  {
        return $this->endDate;
    }
    function getPaymentDate(): string {
        return $this->paymentDate;
    }
    //this function returns number of reserved days
    function noOfDays($date_1 , $date_2 , $differenceFormat = '%a' ) {
        $datetime1 = date_create($date_1);
        $datetime2 = date_create($date_2);

        $interval = date_diff($datetime1, $datetime2);
        return $interval->format($differenceFormat); 
   }
   //this function calculates total price
   public function getPricePerNight($noOfDays){
    if($noOfDays>3 && $noOfDays <= 7){
         $price= $noOfDays * 115;
         return $totalPriceWithTax= $price*(1+SALES_TAX);
    }
    if ($noOfDays>7){
      $price=100*$noOfDays;
      return $totalPriceWithTax= $price*(1+SALES_TAX);

    }
    else { 
        $price= $noOfDays * 125;
         return $totalPriceWithTax= $price*(1+SALES_TAX);
    }
 }

    public function calculateTotalPrice() {
        
    }



}

?>