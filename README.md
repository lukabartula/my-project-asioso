# Asioso Pimcore Test Project

Welcome to the Asioso Pimcore test project documentation. This guide will help you set up and run the development environment.

## Environment Prerequisites

Ensure your development machine has the following:

-   Docker Engine and Docker Compose installed
-   Appropriate user permissions for Docker operations
-   Port 80 not occupied by other services

## Project Setup Guide

### Checking Port Availability

Before launching the environment, verify port 80 is available:

```bash
# Method 1: Using lsof
sudo lsof -i :80

# Method 2: Using netstat
sudo netstat -tulnp | grep :80

# If port is in use, terminate the process
sudo kill -9 <PROCESS_ID>
```

### Setting Up Project Permissions

Configure the necessary directory permissions:

```bash
# Move to project directory
cd /path/to/my-project-asioso

# Apply required permissions
chmod -R 777 public var
```

## Launching the Development Environment

### Starting Docker Services

Initialize the Docker environment with:

```bash
docker compose up -d
```

### Database Configuration

Setting up the database involves two steps:

1. Identify the MariaDB container and copy the ID:

```bash
docker ps
```

2. Import the initial database:

```bash
# Execute the import command (replace <CONTAINER_ID> with actual ID)
docker exec -i <CONTAINER_ID> mysql -u root -pROOT pimcore < dump.sql
```

## Project Organization

### Codebase Structure

The project structure:

```
public/            # Web-accessible assets
src/
├── Controller/    # Business logic controllers
└── Document/      
   └──AreaBrick/   #Areabricks of code used
templates/         # View layer templates
```

