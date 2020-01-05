boilerplate-messenger-process-bundle
===

This is a boilerplate for : 
* [Messenger Process Bundle](https://github.com/jycamier/messenger-process-bundle)
* [Alice Process Bundle](https://github.com/jycamier/alice-process-bundle)
* [Console command Process Bundle](https://github.com/jycamier/console-command-process-bundle)

# Aim

To install the project, thanks to [Process Bundle](https://github.com/cleverage/process-bundle) : 
* we create a fresh database
* we generate Message fixtures with [Alice](https://github.com/nelmio/alice)
* we inject fixtures via MessageBus

## Requirements

* docker 
* docker-compose
* mutagen (tested with 0.11.0-beta2)

## Install

```
$ make install
```