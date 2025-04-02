<?php

declare(strict_types=1);

$sale = new Sale(25.45, date("d-m-Y"));
$onlineSale = new OnlineSale(15, date("d-m-Y"), "Efectivo");
// $onlineSale->createInvoice();
// echo $onlineSale->showInfo();
// $sale = new Sale(25.45, date("d-m-Y"));
// echo Sale::reset();
// $sale = new Sale(25.45, date("d-m-Y"));
// $sale->createInvoice();
// echo Sale::$count;
// print_r($sale);
$sale->setDate(date("Y"));
echo $sale->getDate();

class Sale {
    public float $total;
    private string $date;
    public array $concepts;
    public static $count;

    public function __construct(float $total, string $date) {
        $this->total = $total;
        $this->date = $date;
        $this->concepts = [];
        self::$count++;
    }

    public function addConcept(Concept $concept) {
        $this->concepts[] = $concept;
    }
    
    public static function reset() {
        self::$count = 0;
    }

    public function getDate(): string {
        return $this->date;
    }

    public function setDate(string $date) {
        $this->date = $date;
    }
    
    // public function __destruct() {
    //     echo "Se ha eliminado el objeto";
    // }

    public function createInvoice() {
        echo "Se crea la factura";
    }    
}

class OnlineSale extends Sale {
    public $paymentMethod;

    public function __construct(float $total, string $date, string $paymentMethod) {
        parent::__construct($total, $date);
        $this->paymentMethod = $paymentMethod;
    }

    public function showInfo(): string {
        return "La venta tiene un monto de: $this->total";
    }
}

class Concept {
    public string $description;
    public float|int $amount;

    public function __construct(string $description, int|float|string $amount) {
        $this->description = $description;
        $this->amount = $amount;
    }
}