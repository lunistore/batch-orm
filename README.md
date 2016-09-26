Batch ORM for Doctrine entities
====================

## TL;DR

This component is dedicated to massive Doctrine ORM 2+ entities data manipulation,
designed to be manipulated by `akeneo/batch` and `AkeneoBatchBundle`.

> NB: This is not limited to be used by Akeneo's PIM application, you can use it for any of your batch tools.

This tool uses CSV direct injection in the database and simplifies for you its management.

## Structure of the library

The library is structured in 3 tool families:

* _Repositories_, that fetches data from the database
* _Persisters_, that inserts and updates the contents in the database
* _Deleters_, that deletes data in the database

Additionally, there are 3 tools helping you to drive the data manipulation processes:

* _Query builders_, which let you access the SQL query manipulation
* _Query visitors_, which let you manipulate the internal Doctrine DBAL `QueryBuilder`
* _Units of work_, which will help you handle filesystem management and specificities, and also retrieving new auto-increment ids
