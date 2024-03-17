<?php

// Define a constant named BASE_PATH which represents the parent directory of the directory where this PHP file resides.
const BASE_PATH = __DIR__ . '/../';

// Include (import) the contents of a file named "functions.php" into the current PHP script.
require "Core/functions.php";

// Include (import) the contents of a file named "index.view.php" from the "views" directory into the current PHP script.
require "views/index.view.php";
