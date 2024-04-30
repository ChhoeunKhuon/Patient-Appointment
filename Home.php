<main style="width:1000px;margin:5rem auto;box-shadow:0 0 15px rgba(0,0,0,0.25);padding:20px;border-radius:6px;border:none;">
<?php
class PatientApp {
    // Properties
    public int $id;
    public string $room;
    public int $patientId;
    public int $doctorId;
    public DateTime $Date;
    public string $reason;
    public bool $Status;

    // Constructor
    public function __construct($id, $room, $patientId, $doctorId, $Date, $reason, $Status = false) {
        $this->id = $id;
        $this->room = $room;
        $this->patientId = $patientId;
        $this->doctorId = $doctorId;
        $this->Date = new DateTime($Date);
        $this->reason = $reason;
        $this->Status = $Status;
    }

    //Methods
    public function PrintAppointment(){
        $status = $this->Status ? 'Not Meeted' : 'Meeted';
        return "Appointment ID: {$this->id}, Room: {$this->room}, 
        Patient ID: {$this->patientId}, Doctor ID: {$this->doctorId}, 
        Date: {$this->Date->format('Y-m-d')}, Reason: {$this->reason}, 
        Status: {$status}";
    }
    public function checkAppointment(){
        if ($this->Status) {
            $this->Status = false;
            echo "<p style=\"color:green;text-align:center\">Appointment has been insert successfully.</p>";
        } else {
            echo "<p style=\"color:red;text-align:center\">Appointment is exist.</p>";
        }
    }
    
}

// Assign Values
$appointment1 = new PatientApp(1, "101", "24242", "455454", "2024-03-30", "Regular Checkup");
$appointment2 = new PatientApp(2, "102", "24242", "5353", "2024-04-30", "Regular Checkup",true);
$appointment3 = new PatientApp(3, "103", "42432424", "47884", "2024-03-10", "Regular Checkup",true);

// Print
echo $appointment1->PrintAppointment();
echo "<br>";
echo $appointment1->checkAppointment();
echo "<br><hr>";
echo $appointment2->PrintAppointment();
echo "<br>";
echo $appointment2->checkAppointment();
echo "<br><hr>";
echo $appointment3->PrintAppointment();
echo "<br>";
echo $appointment3->checkAppointment();
?>
</main>