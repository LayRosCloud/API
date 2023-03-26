<?php
//SEND MESSAGES (ECHO)
require 'functions/functionsErrors.php';

//SELECT (GET)

//DELETE
require 'functions/functionsDeletes.php';

//UPDATE (PUT)
require 'functions/functionsPuts.php';

//CREATE (POST)
require 'functions/functionsPosts.php';

//GETTER MODELS

//Controllers
require 'controllers/TemplateController.php';
require 'controllers/GetController.php';
require 'controllers/PutController.php';
require 'controllers/PostController.php';
require 'controllers/DeleteController.php';

//Main Controller
require 'controllers/CommandController.php';