<?php
require_once("Model.php");

class Payment extends Model {
    private int $id;
    private int $user_id;
    private float $amount;
    private int $ticket_id;
    private string $payment_method;

    public static string $table = "Payments";

    public function __construct(array $array) {

        $this->id = $array["id"];
        $this->amount = $array["amount"];
        $this->user_id = $array["user_id"];
        $this->ticket_id = $array["ticket_id"];
        $this->payment_method = $array["payment_method"];
    }

    public function getId() :int{
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getUserId():int{
        return $this->user_id;
    }

    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }

    public function getTicketId():int {
        return $this->ticket_id;
    }

    public function setTicketId($ticket_id) {
        $this->ticket_id = $ticket_id;
    }

    public function getAmount():float {
        return $this->amount;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
    }

    public function getPaymentMethod():string {
        return $this->payment_method;
    }

    public function setPaymentMethod($payment_method) {
        $this->payment_method = $payment_method;
    }

    public function toArray() {
        return [
            'id' => $this->id,
            'amount' => $this->amount,
            'user_id' => $this->user_id,
            'ticket_id' => $this->ticket_id,
            'payment_method' => $this->payment_method
        ];
    }
}