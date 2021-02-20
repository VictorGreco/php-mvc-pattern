<?php

// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.


// TODO Implement the logic to include the controller passed by the URL dynamically
// In the event that the controller passed by URL does not exist, you must show the error view.

require "controllers/mainController.php";


//file_put_contents('php://stderr', print_r(CONTROLLERS, TRUE)); // Terminal log in php

