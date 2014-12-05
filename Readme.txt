Thanks for Choosing to use this Wordpress Plugin for your Excel Sheet generation.

Instruction On How to Use this plugin:

1.Once you download this plugin, please cut the folder "themefile" from this plugin main directory and paste it at some other safe location, as we will use it during setup of this plugin.

2.Now place this plugin folder in Wordpress installation plugin directory and activate this plugin from the wordpress admin side.

3.Now go to your "themefile" folder and copy the file "xlsgen.php" and paste it to the prefered location i.e your root theme installation directory, of course you could place it anywhere in your preferred location in the Wordpress active theme directory, then after that add that page to your Wordpress website from admin side by choosing the template name contained in  "xlsgen.php" file and note the permalink that is generated as we will need this permalink to refer our link to this file. You can use other methods to refer to refer to this file if you know how to do it, but only thing necessary is that, the link should refer to this "xlsgen.php" file correctly.

4.Now for creating a link to download the excel sheet we need to provide a table name from our database for that we will use a session variable as we cannot pass database table name as parameter from the client side. So please start_session() in the page where you want to create a link to download the excel sheet. The session variable name is "$_SESSION['xlsgentbnm']", assign the name of the database table to this session variable. After that create a download link, referring to the "xlsgen.php" file. Now your work is done. Once you publish this page with downloadable link, the link will generate the Excel sheet for you. 

5.For getting only the selected columns from the database, please open the "func.php" file and change the query according to your requirements, but by default in this version 1.0 of the plugin we download all the columns and rows from the database table name

NOTE: Before you create a link referring to the "xlsgen.php" file you need to set the "$_SESSION['xlsgentbnm']" to the correct database table name.