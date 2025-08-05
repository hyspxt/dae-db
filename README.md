# dae-db

*Databases team project - University of Bologna (a.y. 2023-24)*

## Contributors

Patrick Alfieri: [@hyspxt](https://github.com/hyspxt)
Sofia Zanelli: [@SofZll](https://github.com/SofZll)  
Kaori Jiang: [@Kmoon-7](https://github.com/Kmoon-7)

## Description

A database system designed to simulate the management of cardiac emergency requests and the use of automated external defibrillators. Inspired by the "**DAE RespondER**" application.

Database design specifics are documented in 'relazione.pdf'.

## Requirements and Setup

### Prerequisites

- PHP with SQLite3 extension
- Web server (or use PHP's built-in server)

### Installation and Application Access

```bash
# Required if not already installed
sudo apt update
sudo apt install php-cli php-sqlite3

cd /path/to/project

php -S localhost:8000
```

Open your browser and go to http://localhost:8000.

There are two sections:
- **Database**: where you can view individual tables.
- **Queries**: where you can interact with the database through queries.