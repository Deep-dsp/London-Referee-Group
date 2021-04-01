<?php 
    $email = new \SendGrid\Mail\Mail();
    $email->setFrom("dspguru97@gmail.com", "Deep Patel");
    $email->setSubject("Sending With Sendgrid");
    $email->addTo("deep.guru97@gmail.com", "Deep-Dsp");
    $email->addContent("text/plain", "easy to do anywhere");
    $email->addContent("text/text", "<strong>and easy to do anywhere, especially with PHP!</strong>");

    $sendGrid = new \SendGrid(getenv("SENDGRID_API_KEY"));

    try{
        $response = $sendgrid->send($email);
        print $response->statusCode()."\n";
        print_r($response->header());
        print $response->body()."\n";
    }catch(Exception $e){
        //throw $th
    }
?>