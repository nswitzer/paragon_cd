# Paragon

## Deployment

Deployed and built by Circle CI!!

## Git workflow

This project uses our standard single master branch workflow with date based tag releases. https://elevatedthird.github.io/docs/docs_git_workflow.html

## Hosting

* Platform: Acquia
* Environment name: Elevated Third - Paragon Dev (paragondev)
* Dev URL: http://paragondevansnwocpp3.devcloud.acquia-sites.com/
* Prod URL: N/A

### Shield credentials

* Username: paragon
* Password: 3ditParagon

## Config workflow

This project uses CMI for all configuration changes. To make a configuration
update, first, sync the production database to your local environment and export and commit any config changes from the production environment to the project repo. After that, make your new configuration changes on your local environment, export those changes and commit them to the project repo. Once you're finished push those changes to the remote environment and run `drush cim vcs` to import all new configuration.


## Composer

All packages in this project are managed using Composer - see composer.json for detailed information about each package. This project is not being built serverside, so the vendor directory is committed - be sure any new packages you add are committed to this repo.