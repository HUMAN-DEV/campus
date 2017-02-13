CAMPUS
=========

INSTALLATION

1. Copy this folder into apache work dir
2. Edit the file app/config/parameters.yml and set database parameters.
3. Execute in a terminal this comands:
	- cd workdirapache/campus
	- php bin/console doctrine:database:create 
	- php bin/console doctrine:schema:create
	- php bin/console fos:user:create root —-super-admin
4. Open in a web browser http://localhost/campus/web/app.php
5. Enjoy…
