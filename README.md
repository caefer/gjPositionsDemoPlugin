# gjPositionsDemoPlugin

## About

This plugin exists purely to demonstrate the functionality of gjPositionsPlugin. It provides the following:

1. one model that is configured to have design elements plositioned on it (`DemoPage`)
2. two models that serve as content (`DemoArticle`, `DemoImage`)
3. three design elements in configuration (`app.yml`) and module (`gjPositionsDemo/slideshow`, `gjPositionsDemo/relatedbykeyword`, `gjPositionsDemo/manuallink`)
4. fixtures for one `DemoPage` and four `DemoArticle` and `DemoImage` each

## Installation

Grab the sources from GitHub.

    $ cd plugins
    $ git clone git://github.com/caefer/gjPositionsDemoPlugin.git

Don't forget to enable the plugin in your ProjectConfiguration class.

Of course you also need to install `gjPositionsPlugin`.

Then build all the classes and load the database.

    $ php symfony doctrine:build --all --and-load

Next you need to generate an admin module for `DemoPage`.

    $ php symfony doctrine:generate-admin --theme=composition DemoPage

Now browse http://localhost/demo_page and see where it goes!
