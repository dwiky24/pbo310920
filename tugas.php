 <!DOCTYPE html>  
 <html>  
   <head>  
    <title> Data Siswa </title>  
    <style>  
     p {  
       color: grey;  
       font-size: 20px;  
     }  
    </style>  
   </head>  
  <body>  
    <p>  
   <?php  
    class siswa{  
     public $isAlive = true;  
    public $nama;
    public $nis;
    public $rombel;
    public $rayon; 
     public function __construct($nama,$nis,$rombel,$rayon){  
           $this->nama = $nama;  
           $this->nis = $nis;  
           $this->rombel = $rombel;  
           $this->rayon = $rayon;  
         }  
    }  
    $siswa1 = new siswa("Dwiky Juliyansyah", "11907116", "RPL XI-4", "Wikrama 2");  
    
    echo $siswa1->nama; 
    echo "<br />";
    echo $siswa1->nis; 
    echo "<br />";
    echo $siswa1->rombel; 
    echo "<br />";
    echo $siswa1->rayon; 
    echo "<br />";
    
   ?>  
     </p>  
   </body>  
 </html>  
