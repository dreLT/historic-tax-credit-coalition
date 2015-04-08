# Historic Tax Credit Coalition
A fully responsive Wordpress theme developed for the Historic Tax Credit Coalition. The theme is live at [http://historiccredit.com](http://historiccredit.com). I developed this theme mostly from scratch, with the help of [html5blank](https://github.com/toddmotto/html5blank/), which provided great basic HTML and Wordpress scaffolding. The theme responds appropriately to all screen resolutions. In terms of Wordpress functionality, I tailored the theme to meet the needs of the client, using custom post types and taxonomies for the various categories of posts required (Advocacy, News and Members posts). I also implemented custom fields to give the client the ability to edit most of the site's content via the Wordpress dashboard.

## The Stack
This theme was scaffolded using:  
[html5blank](https://github.com/toddmotto/html5blank/) for scaffolding of the directory structure, basic HTML, and basic Wordpress functionality

### Files/Directory Structure (the main parts to look at)
`./` (root directory) - PHP files for the various page templates. These contain structural HTML and PHP for Wordpress functionality (for example, loops for generating posts and post content, conditionals for loading content on specific pages, etc)  

`sass/` - The SASS directory where the main `.scss` file and all partials are located. Partials are titled according to the page or elements they are associated with, and are required by the main SASS file, `styles.scss`. During production, `styles.scss` is watched by Compass for changes and compiled to `styles.css` in the root directory.

## Dev Tools
* SASS
* [Compass](http://compass-style.org/) - I used this mostly to compile SASS
* [Singularity](https://github.com/at-import/Singularity) - A SASS Grid System. I used it to used to construct layouts of the Homepage, Join page, and Footer.

## Progress
Development is complete, with exception to some refactoring to eliminate some repeated code. For example, I would like to modularize some PHP functionality and HTML that is used by multiple page templates. I would also like to better organize the SASS partials so they are easier to navigate by anyone that might be working on the theme in the future.