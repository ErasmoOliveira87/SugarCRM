SugarCRM
========

New Sugarcrm project customization


To generate a pack to upload in SugarCRM you need:

        
        1 - Customize your logic hooks, classes and functions
        2 - Config a manifest file. see example in manifest.php, you need set each file to upload.
        3 - Generate a zip file(manifest.php and SugarModule folder)
                structure example:

                fipFile.zip
                |__ manifest.php
                |
                |__ SugarModules
                    |
                    |____ modules
                        |
                        |______Accounts
                        |     |__ logic_hooks.php
                        |     |
                        |     |__ custom_code
                        |           |____ customscripts.php
                        |           |____ scripts.js
                        |
                        |______Contacts
                        |      |__ logic_hooks.php
                        |      |
                        |      |__ custom_code
                        |           |____ customscripts.php
                        |           |____ scripts.js
                        |
                        |______Leads
                        |      |__ logic_hooks.php
                        |      |
                        |      |__ custom_code
                        |           |____ customscripts.php
                        |           |____ scripts.js
                        |
                        |______Opportunities
                        |       |__ logic_hooks.php
                        |       |
                        |       |__custom_code
                        |           |____ customscripts.php
                        |           |____ scripts.js

                
                * If you create a new module with Module Buider you can customize this module 
                        creating a new folder with a name of your module, new logic hooks file, 
                        new functions and new classes.
                * You can add javascripts with logic hook "after_ui_frame"
                * You need put in manifest each file in correct folder.


        4 - Upload and install your pack with module loader.


        To see more about logic hooks
                http://support.sugarcrm.com/02_Documentation/04_Sugar_Developer/Sugar_Developer_Guide_6.6/03_Module_Framework/Logic_Hooks

        To read more about sugarcrm classes, bean and functions
                http://support.sugarcrm.com/02_Documentation/04_Sugar_Developer/Sugar_Developer_Guide_6.7/02_Application_Framework/SugarBean
                http://cheleguanaco.blogspot.com.br/2009/06/simple-sugarcrm-logic-hook-example.html
