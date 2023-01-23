<?php

include __DIR__."/router/router.php";

Router::router("/disquera/index",["index","index_main"]);
Router::router("/disquera/login",["login","login_main"]);
Router::router("/disquera/upload",["crud_Media","upload_main"]);

Router::router("/disquera/loginv",["login","login"]);

Router::error_404();
