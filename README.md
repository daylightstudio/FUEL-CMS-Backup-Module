# BACKUP MODULE FOR FUEL CMS
This is a FUEL CMS backup module for backing up the database and asset files for your [FUEL CMS](http://www.getfuelcms.com) site.

## INSTALLATION
There are a couple ways to install the module. If you are using GIT you can use the following method
to create a submodule:

### USING GIT
1. Open up a terminal window on your system (e.g. the Terminal application in OS X)
Type in:
``php index.php fuel/installer/install git://github.com/daylightstudio/FUEL-CMS-Backup-Module.git backup``

2. Then to install, type in:
``php index.php fuel/installer/install backup``


### MANUAL
1. Download the zip file from GitHub:
[https://github.com/daylightstudio/FUEL-CMS-Backup-Module](https://github.com/daylightstudio/FUEL-CMS-Backup-Module)

2. Create a folder in fuel/modules/backup and place the contents of backup folder in there.

3. Then to install, type in:
``php index.php fuel/installer/install backup``


## UNINSTALL
You may need to put in your full path to the "php" interpreter.

To uninstall the module which will remove any permissions and database information:
``php index.php fuel/installer/uninstall backup``


## DOCUMENTATION
To access the documentation, you can visit it [here](http://www.getfuelcms.com/user_guide/modules/backup).

## TEAM
* David McReynolds, Daylight Studio, Main Developer

## BUGS
To file a bug report, go to the [issues](https://github.com/daylightstudio/FUEL-CMS-Backup-Module/issues) page.

## LICENSE
The Backup Module for FUEL CMS is licensed under [APACHE 2](http://www.apache.org/licenses/LICENSE-2.0).