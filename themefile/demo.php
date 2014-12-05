<?php session_start();
/*
Template Name: XLS Generator Demo Page
*/
echo site_url();
?>
<html>
<body>
<?php $_SESSION['xlsgentbnm'] = 'your_database_table_name_here';?>
<a href="<?php echo site_url().'/xlsgenp/' ?>">Download Excel Sheet</a><!-- echo site_url().'/xlsgenp/ is the permalink that we got from the admin side when we added xlsgen.php file to the wordpress installation -->
</body>
</html>