<h1>Backup Documentation</h1>
<p>The Backup module can be used to backup the FUEL database as well as the <dfn>assets</dfn> folder.
It comes with a controller to backup the database with options to include the assets folder as well as email it as an attachment. 
The Backup module can be used along with the <a href="<?=user_guide_url('modules/cronjobs')?>">Cronjobs module</a> to do periodic backups.</p>

<?=generate_config_info('backup')?>
<br /><br />
<?=generate_docs('fuel_backup')?>


