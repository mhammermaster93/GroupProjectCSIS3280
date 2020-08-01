
<?php

class Reservation {

    //properties
    private $reservationNr;
    private $id;
    private $roomNr;
    private $startDate;
    private $endDate;
    private $paymentDate;
    private $serviceIncluded; 
 
    private $totalPrice; //???

    //setters
    function setId($id){
        $this->type=$id;
    }
    function setRoomNr($roomNr){
        $this->roomNr=$roomNr;
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
    function setServiceIncluded($serviceIncluded){
        $this->serviceIncluded=$serviceIncluded;
    }

    //getters
    function getReservationNr(): int {
        return $this->reservationNr;
    }
    function getId(): int {
        return $this->id;
    }
    function getRoomNr(): int {
        return $this->roomNr;
    }
    function getStartDate() {
        return $this->startDate;
    }
    function getEndDate(): int {
        return $this->endDate;
    }
    function getPaymentDate(): int {
        return $this->paymentDate;
    }
    function getServiceIncluded(): array {
        return $this->serviceIncluded;
    }

    function calculateTotalPrice() : float {

    }






}













?>