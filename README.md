# Historic Tax Credit Coalition
A fully responsive Wordpress theme developed for the Historic Tax Credit Coalition website. The theme can be viewed live at [http://historiccredit.com](http://historiccredit.com). I developed this theme mostly from scratch, with the help of [html5blank](https://github.com/toddmotto/html5blank/), which provided great basic HTML and Wordpress scaffolding. The theme responds appropriately to all screen resolutions using CSS3 media queries. In terms of Wordpress functionality, I tailored the theme to meet the needs of the client, using multiple custom post types and taxonomies for the various categories of posts they required (Advocacy, News and Members posts). I also implemented custom fields to give the client the ability to edit most of the site's content via the Wordpress dashboard.

## The Stack
This theme was scaffolded using:  
[html5blank](https://github.com/toddmotto/html5blank/) for scaffolding of the directory structure, HTML, and basic Wordpress functionality

### Files/Directory Structure (the main parts to look at)
```
sass/
(note to self: list relevant PHP files and explain where they are used in the theme, once you've refactored a bit)
```
`sass/` - The SASS directory where the main `.scss` file and all partials are located. During production this directory is watched by Compass for changes and compiled to `style.css` in the theme's root directory.

## Dev Tools
* SASS
* [Compass](http://compass-style.org/) - I used this mostly to compile SASS
* [Singularity](https://github.com/at-import/Singularity) - A SASS Grid System. I used it to used to construct layouts on certain pages.

## Progress
Development is complete, with exception to some refactoring an cleaning of the code. For example, I would like to better organize the SASS partials so they are more intuitive and easier to navigate by anyone that might be working on the theme in the future. I would also like to refactor some of the media queries to eliminate some repeated code.

