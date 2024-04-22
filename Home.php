<main style="width:1000px;margin:1rem auto; background-color:wheat;padding:20px;border-radius:6px;border:none">
<?php
class PatientApp {
    // Properties
    public int $id;
    public string $room;
    public string $patientName;
    public string $doctorName;
    public DateTime $Date;
    public string $reason;
    public bool $Status;

  // Constructor
    public function __construct($id, $room, $patientName, $doctorName, $Date, $reason, $Status = false) {
        $this->id = $id;
        $this->room = $room;
        $this->patientName = $patientName;
        $this->doctorName = $doctorName;
        $this->Date = new DateTime($Date);
        $this->reason = $reason;
        $this->Status = $Status;
    }

    //Methods
    public function checkAppointment(){
        if ($this->Status) {
            $this->Status = false;
            print("Appointment has been insert successfully.");
        } else {
            print("Appointment is exist.");
        }
    }
    public function getData(){
        $status = $this->Status ? 'Not Meeted' : 'Meeted';
        return "Appointment ID: {$this->id}, Room: {$this->room}, 
        Patient: {$this->patientName}, Doctor: {$this->doctorName}, 
        Date: {$this->Date->format('Y-m-d')}, Reason: {$this->reason}, 
        Status: {$status}";
    }
}

// Assign Values
$appointment1 = new PatientApp(1, "101", "John Doe", "Dr. Samnang", "2024-03-30", "Regular Checkup");
$appointment2 = new PatientApp(2, "102", "John Wick", "Dr. Dara", "2024-04-30", "Regular Checkup",true);
$appointment3 = new PatientApp(3, "103", "Da Ra", "Dr. Jonny Sin", "2024-03-10", "Regular Checkup",true);

// Print
echo $appointment1->getData();
echo "<br>";
echo $appointment1->checkAppointment();
echo "<br>";
echo $appointment2->getData();
echo "<br>";
echo $appointment2->checkAppointment();
echo "<br>";
echo $appointment3->getData();
echo "<br>";
echo $appointment3->checkAppointment();
?>
</main>