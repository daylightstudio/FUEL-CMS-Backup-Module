<h1>Backup Module Documentation</h1>
<p>This Backup module documentation is for version <?=BACKUP_VERSION?>.</p>

<h2>Overview</h2>
<p>The Backup module can be used to backup the FUEL database as well as the <dfn>assets</dfn> folder.
It comes with a controller to backup the database with options to include the assets folder as well as email it as an attachment. 
The Backup module can be used along with the <a href="<?=user_guide_url('modules/cronjobs')?>">Cronjobs module</a> to do periodic backups.</p>

<?=generate_config_info()?>

<?=generate_toc()?>


