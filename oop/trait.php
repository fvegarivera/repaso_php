<?php

trait EmailSender {
    public function sendEmail() {
        // Simulate sending an email
        echo "Se envia un email <br>";
    }
}

trait DB {
    public function save() {
        echo "Se guarda en la base de datos <br>";
    }
}

trait Log {
    protected function log(string $message, string $fileName) {
        if(!file_exists($fileName)) {
            file_put_contents($fileName, "");
        }

        $current = file_get_contents($fileName);
        $current .= date("Y-m-d H:i:s"). " - " . $message . "\n";
        file_put_contents($fileName, $current);
    }
}

class Invoice {
    use EmailSender, DB, Log; // Use multiple traits

    public function create() {
        echo "Se crea la factura <br>";
        $this->log("Se crea la factura", "log.txt");
    }
}

$invoice = new Invoice();
$invoice->sendEmail(); // Output: Se envia un email
$invoice->create();