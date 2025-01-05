# [Leap](http://treehouse.github.io/project-leap)
Leap is an internal CSS library made for Treehouse. It contains immutable utility classes that enable rapid front-end prototyping.

## Quick Start
Several options are available for installing Leap into your project.

* [Download the latest release](https://github.com/treehouse/project-leap/archive/v0.11.1.zip)

* Clone the repo: `git clone https://github.com/treehouse/project-leap.git`
* Install with [Bower](http://bower.io)

Read the [getting started](http://treehouse.github.io/project-leap/getting-started.html) page for information on the framework contents, examples, and more.

## Running Docs Locally
The Leap docs are built with Jekyll. This means you'll need to get Jekyll up and running in order to view and edit the docs on your own machine. Jekyll will handle rendering the pages and compiling Sass, so no need to run `sass --watch` or anything like that.

To get Jekyll running follow these steps:

* Open Terminal and navigate to where your project-leap site folder lives
* Run `bundle install`
* After that finishes, run `bundle exec jekyll serve`
* Go to your browser and load up `localhost:4000/project-leap/`

Way to go, nerd. You should be up and running now!

## Compiling CSS Separately
To compile the CSS outside of Jekyll, run:

```
bundle exec sass --update --force --style expanded _sass/leap.sass:css/leap.css
bundle exec sass --update --force --style compressed _sass/leap.sass:css/leap.min.css
```

## Copyright and license
Code and documentation copyright 2021 Treehouse Island, Inc. Code released under the [MIT license](https://github.com/treehouse/project-leap/blob/main/LICENSE).
