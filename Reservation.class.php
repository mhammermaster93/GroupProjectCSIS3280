
<?php

class Reservation {

    //properties
    private $reservationNr;
    private $roomType;
    private $email;
    private $roomNr;
    private $startDate;
    private $endDate;
    private $paymentDate;
    private $totalPrice;
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
    function getPaymentDate(): int {
        return $this->paymentDate;
    }
    //this function returns number of reserved days
    function noOfDays($date_1 , $date_2 , $differenceFormat = '%a' ) {
        $datetime1 = date_create($date_1);
        $datetime2 = date_create($date_2);
   
        $interval = date_diff($datetime1, $datetime2);
        return $interval->format($differenceFormat); 
   }
    //this function calculates total price of the reservation including sales tax
    function calculateTotalPrice(Reservation $res) : float {
        $room=$res->getRoomType;
        $noOfDays=noOfDays($res->getStartDate(), $res->getEndDate());
        $price=$room->getPricePerNight($noOfDays);
        $total=($noOfDays*$price);
        return $totalPriceWithTax=$total*(1+SALES_TAX);
    }
}

?>