# swark - Swiss Architecture Knife

`swark` is a tool for software and IT architects to document their infrastructure and architecture in a readable and
structured way.

The vision for `swark` is to have a tool which combines parts of `LeanIX`, `Spark's Enterprise Architect`, `CMDBuild`
with usage of Markdown and the C4 model to give architects and their teams insight in their environment.

## Usage
After deploying swark (see below), go to http://localhost:8000/admin and log in.

## Deployment options
### Docker / Docker Compose
Head over to our [swiss-architecture-knife/docker](https://github.com/swiss-architecture-knife/docker) repo to find instructions how to use the Docker image.
It contains also working [Docker Compose](https://github.com/swiss-architecture-knife/docker/tree/main/.examples/full) examples.

### Local development
#### Requirements

Prior to executing `swark`, please install the following packages:

    # To create non-default PlantUML and other graphs
    $ sudo apt-get install \
        graphviz \
        default-jre

#### Set up

    $ composer create-project --prefer-dist swark/swark my-awesome-architecture-documentation
    
    # edit .env variables
    
    $ php artisan migrate

    # link public repository for created assets like diagrams
    $ php artisan storage:link

    # import default importables (regulations)
    $ php artisan swark:import:datamodel ./default-importables
    
    # import custom content
    $ php artisan app:import:content storage/app/swark/custom

    # create initial user
    $ php artisan make:filament-user --name=admin --email=admin@admin.com --password=<your password>

    $ php artisan serve 


Available URLs:
- http://localhost:8000/: user interface
- http://localhost:8000/admin: admin interface for stamdata-related things
- http://localhost:8000/admin-compliance: admin interface for compliance-related stuff (findings, actions, regulations, chapters)
