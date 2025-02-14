## swark - Swiss Architecture Knife

`swark` is a tool for software and IT architects to document their infrastructure and architecture in a readable and
structured way.

The vision for `swark` is to have a tool which combines parts of `LeanIX`, `Spark's Enterprise Architect`, `CMDBuild`
with usage of Markdown and the C4 model to give architects and their teams insight in their environment.

## Getting started
### Requirements

Prior to executing `swark`, please install the following packages:

    # To create non-default PlantUML and other graphs
    $ sudo apt-get install \
        graphviz \
        default-jre

### Installation

    $ composer create-project --prefer-dist swark/swark my-awesome-architecture-documentation
    
    # edit .env variables
    
    $ php artisan migrate

    # link public repository for created assets like diagrams
    $ php artisan storage:link

    # import default content from storage/app/swark/_default
    $ php artisan app:import 
    
    # import custom content
    $ php artisan app:import storage/app/swark/custom

    # create initial user
    $ php artisan make:filament-user --name=admin --email=admin@admin.com --password=<your password>

    $ php artisan serve 

### Open the UI
Go to http://localhost:8000/admin and log in with the recent created admin user

Available URLs:
- http://localhost:8000/: user interface
- http://localhost:8000/admin: admin interface for stamdata-related things
- http://localhost:8000/admin-compliance: admin interface for compliance-related stuff (findings, actions, regulations, chapters)
