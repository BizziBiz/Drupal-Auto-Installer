Drupal Auto-Installer is a script for cPanel/WHM that will automate Drupal 6 and Drupal 7 installs with the use of Drush (http://drush.ws). This script works on the detection of a specific cPanel package, and once selected it will automatically install Drupal to that account.

Installation Instructions
===========================
Note: requires drush to be installed and accessible via the "drush" command.

1. Upload "postwwwacct" to your /scripts folder
2. Upload the drupal.make and drush_enable.php files to "/"
3. Modify the postwwacct variables located at the top of the page
	You may need to make database specific tweaks if you do not use "localhost:3306".
	This is located under the "Create the database" section and "drush install" section
4. Create a cPanel package titled "drupal_autoinstall". Alternatively you can change this in postwwwacct


Usage Instructions
===========================
To setup drupal accounts all you need to do is select the "drupal_autoinstall" package when creating a new account with cPanel. 

Customization
===========================
To change the version of Drupal, modules enabled, or modules disabled, simply edit the drupal.make and drush_enable.php files accordingly.