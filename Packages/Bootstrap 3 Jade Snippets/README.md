Twitter Bootstrap 3 Jade
==================
Sublime Text Plugin
==================

### Please feel free to contribute
- [@rs459 on Twitter](https://twitter.com/rs459)
- [Opening an issue, contributing, proposing enhancement](https://github.com/rs459/bs3-jade-sublime-plugin/issues)

#### This plugin is a fork of [JasonMortonNZ/bs3-sublime-plugin (for HTML)](https://github.com/JasonMortonNZ/bs3-sublime-plugin/)

A sublime plugin complete with Twitter Bootstrap 3 snippets

## Dependency 

- Jade language plugin

## Class name completion

## What's included - contents
- [Alerts](https://github.com/rs459/bootstrap3-jade-sublime-plugin#alerts)
- [Badges](https://github.com/rs459/bootstrap3-jade-sublime-plugin#badges)
- [Breadcrumbs](https://github.com/rs459/bootstrap3-jade-sublime-plugin#breadcrumbs)
- [Buttons](https://github.com/rs459/bootstrap3-jade-sublime-plugin#buttons)
- [CDN](https://github.com/rs459/bootstrap3-jade-sublime-plugin#cdn)
- [Grid](https://github.com/rs459/bootstrap3-jade-sublime-plugin#grid)
- [Forms](https://github.com/rs459/bootstrap3-jade-sublime-plugin#forms)
- [Icons](https://github.com/rs459/bootstrap3-jade-sublime-plugin#icons)
- [Images](https://github.com/rs459/bootstrap3-jade-sublime-plugin#images)
- [Input](https://github.com/rs459/bootstrap3-jade-sublime-plugin#input-fields-form-fields)
- [Javascript Component](https://github.com/rs459/bootstrap3-jade-sublime-plugin#javascript-component)
- [Labels](https://github.com/rs459/bootstrap3-jade-sublime-plugin#labels)
- [List Groups](https://github.com/rs459/bootstrap3-jade-sublime-plugin#list-groups)
- [Media Objects](https://github.com/rs459/bootstrap3-jade-sublime-plugin#media)
- [Navigation](https://github.com/rs459/bootstrap3-jade-sublime-plugin#navigation)
- [Pagination](https://github.com/rs459/bootstrap3-jade-sublime-plugin#pagination)
- [Panels](https://github.com/rs459/bootstrap3-jade-sublime-plugin#panels)
- [Tables](https://github.com/rs459/bootstrap3-jade-sublime-plugin#tables)
- [Templates](https://github.com/rs459/bootstrap3-jade-sublime-plugin#templates)
- [License](https://github.com/rs459/bootstrap3-jade-sublime-plugin#license)


### Alerts

| Component                		 | Snippet code                   |
|------------------------------- | ------------------------------ |
| Alert Box (Default)			 | bst-alert 					  |
| Danger Alert Box				 | bst-alert:danger 			  |
| Info Alert Box				 | bst-alert:info				  |
| Success Alert Box				 | bst-alert:success			  |
| Warning Alert Box				 | bst-alert:warning			  |

### Badges

| Component                		 | Snippet code                   |
|------------------------------- | ------------------------------ |
| Badge (Default) 				 | bst-badge 					  |

### Breadcrumbs

| Component                		 | Snippet code                   |
|------------------------------- | ------------------------------ |
| Breadcrumbs	 				 | bst-breadcrumbs				  |

### Buttons

**Note:** all button snippets below can have any of the following options append to the end of the snippet *.
- :danger
- :default
- :disabled
- :info
- :primary
- :success
- :warning

**An example:**
- bst-button:success
- bst-lg-button:disabled
- bst-block-button:warning

| Component                		 | Snippet code                   | Options |
|------------------------------- | ------------------------------ | :-----:	|
| Button		 				 | bst-button					  |  *		|
| Block Button	 				 | bst-block-button				  |  *		|
| Mini Button		 			 | bst-xs-button				  |	 *		|
| Small Button		 			 | bst-sm-button				  |	 *		|
| Large Button		 			 | bst-lg-button				  |	 *		|
| Button		 				 | bst-button					  |	 *		|

### CDN

| Component                      | Snippet code                   |
|------------------------------- | :-----------------------------:|
| CDN link (both CSS & JS)       | bst-cdn                        |
| CDN link (CSS only)            | bst-cdn:css                    |
| CDN link (JS only)             | bst-cdn:js                     |

### Forms

| Component       				 | Snippet code        			  |
|------------------------------- | -----------------------------  |
| Form            				 | bst-form            			  |
| Inline Form     				 | bst-form:inline     			  |
| Horizontal Form 				 | bst-form:horizontal 			  |

### Grid

**Note:** The bst-col snippet can be used both on its own or with the addition of a colon followed by the number of columns required: **E.g.**

- bst-col
- bst-col:6
- bst-col:12

| Component                		 | Snippet code                   | Options |
|------------------------------- | ------------------------------ | :-----:	|
| Column		 				 | bst-col						  | :1-12	|

### Icons

| Component                      | Snippet code                   |
|------------------------------- | ------------------------------ |
| Glyphicon		                 | bst-icon:glyphicon             |
| Icon (Font Awesome)		     | bst-icon                       |

### Images

| Component                		 | Snippet code                   |
|------------------------------- | ------------------------------ |
| Thumbnail	 					 | bst-thumbnail 				  |
| Thumbnail with content		 | bst-thumbnail:content		  |

### Input Fields (Form fields)

**Note:** you can add " :h " to the end of any input field snippet to make it compatible with Twitter Bootstrap 3 horizontal forms. **E.g.**
- bst-input:text:h
- bst-input:hidden:h


| Component                		 | Snippet code                   | Options |
|------------------------------- | ------------------------------ | :-----:	|
| Label		 					 | bst-input:label   			  |    		|
| Text Input               		 | bst-input:text 				  | :h 		|
| Email Input 					 | bst-input:email   			  | :h 		|
| Password Input				 | bst-input:password  			  | :h 		|
| Hidden Input					 | bst-input:hidden  			  | :h 		|
| Url Input						 | bst-input:url 	 			  | :h 		|
| Color Input 					 | bst-input:color   			  | :h 		|
| Number Input 					 | bst-input:number   			  | :h 		|
| Range Input 					 | bst-input:range   			  | :h 		|
| Date Input 					 | bst-input:date   			  | :h 		|
| Week Input 					 | bst-input:week   			  | :h 		|
| Month Input 					 | bst-input:month   			  | :h 		|
| Time Input 					 | bst-input:time   			  | :h 		|
| Tel Input 					 | bst-input:tel   	 			  | :h 		|
| Search Input 					 | bst-input:search   			  | :h 		|
| Reset Input 					 | bst-input:reset   			  | :h 		|
| Submit Input 					 | bst-input:submit   			  | :h 		|
| Checkbox Input 				 | bst-input:checkbox  			  | :h 		|
| Radio Box Input 				 | bst-input:radio  			  | :h 		|

### Javascript Component

| Component                      | Snippet code                   |
|------------------------------- | ------------------------------ |
| Accordion                      | bst-accordion                  |
| Carousel                       | bst-carousel                   |
| Modal                          | bst-modal                      |

### Jumbotron

| Component                		 | Snippet code                   |
|------------------------------- | ------------------------------ |
| Jumbotron (ex Hero Unit)		 | bst-jumbotron 				  |

### Labels

| Component                		 | Snippet code                   |
|------------------------------- | ------------------------------ |
| Label		 					 | bst-label 	 				  |
| Danger Label					 | bst-label:danger				  |
| Info Label					 | bst-label:info 				  |
| Success Label					 | bst-label:success			  |
| Warning Label					 | bst-label:warning			  |

### List-groups

| Component                      | Snippet code                   |
|------------------------------- | ------------------------------ |
| List group                     | bst-list-group                 |
| List group (with badges)       | bst-list-group:badges          |
| List group (linked list)       | bst-list-group:linked          |
| List group (with content)      | bst-list-group:content         |

### Media Objects

| Component                      | Snippet code                   |
|------------------------------- | ------------------------------ |
| Media Object                   | bst-media                      |

### Navigation

| Component                		 | Snippet code                   |
|------------------------------- | ------------------------------ |
| Navbar (basic navbar)			 | bst-navbar	 				  |
| Navbar Brand Element			 | bst-navbar:brand				  |
| Navbar Button					 | bst-navbar:button			  |
| Navbar Form 					 | bst-navbar:form 				  |
| Navbar Link 					 | bst-navbar:link 				  |
| Navbar Text 					 | bst-navbar:text 				  |
| Navbar Fixed-Botton			 | bst-navbar:fixed-bottom		  |
| Navbar Fixed-Top				 | bst-navbar:fixed-top			  |
| Navbar Inverse				 | bst-navbar:inverse			  |
| Navbar Responsive				 | bst-navbar:responsive		  |
| Navbar Static-Top				 | bst-navbar:static-top		  |

### Pagination

| Component                		 | Snippet code                   |
|------------------------------- | ------------------------------ |
| Pager		 					 | bst-pager	 				  |
| Aligned Pager             	 | bst-pager:aligned 			  |
| Pagination					 | bst-pagination				  |
| Pagination:small				 | bst-pagination:small			  |
| Pagination:large				 | bst-pagination:large			  |

### Panels

| Component                      | Snippet code                   |
|------------------------------- | ------------------------------ |
| Panel                          | bst-panel                      |
| Panel (contextual)             | bst-panel:{warning,success,info,danger,primary}                  |
| Panel (with heading)           | bst-panel:heading              |
| Panel (with footer)            | bst-panel:footer               |

### Progress bar

| Component                      | Snippet code                   |
|------------------------------- | ------------------------------ |
| Progress Bar                   | bst-progress                   |

### Tables

| Component                		 | Snippet code                   |
|------------------------------- | ----------------------------   |
| Table                    		 | bst-table                      |
| Bordered Table           		 | bst-table:bordered             |
| Condensed Table          		 | bst-table:condensed            |
| Hover Table              		 | bst-table:hover                |
| Striped Table            		 | bst-table:striped              |

### Templates

| Component                                                                        | Snippet code                   |
|--------------------------------------------------------------------------------- | -----------------------------  |
| HTML5 Template Layout                                                            | bst-template:html5             |
| H5BP layout Template                                                             | bst-h5bp-layout-jade           |
| H5BP index Template                                                              | bst-h5bo-index-jade            |
| [BS3 blog](http://getbootstrap.com/examples/blog)                                | bst-tpl-blog                   |
| [BS3 carousel](http://getbootstrap.com/examples/carousel)                        | bst-tpl-carousel               |
| [BS3 cover](http://getbootstrap.com/examples/cover)                              | bst-tpl-cover                  |
| [BS3 dashboard](http://getbootstrap.com/examples/dashboard)                      | bst-tpl-dashboard              |
| [BS3 grid](http://getbootstrap.com/examples/grid/)                               | bst-tpl-grid                   |
| [BS3 jumbotron narrow](http://getbootstrap.com/examples/jumbotron-narrow/)       | bst-tpl-jumbotron-narrow       |
| [BS3 jumbotron](http://getbootstrap.com/examples/jumbotron/)                     | bst-tpl-jumbotron              |
| [BS3 justified nav](http://getbootstrap.com/examples/justified-nav)              | bst-tpl-justified-nav          |
| [BS3 navbar fixed top](http://getbootstrap.com/examples/navbar-fixed-top)        | bst-tpl-navbar-fixed-top       |
| [BS3 navbar static top](http://getbootstrap.com/examples/navbar-static-top)      | bst-tpl-navbar-static-top      |
| [BS3 navbar](http://getbootstrap.com/examples/navbar)                            | bst-tpl-navbar                 |
| [BS3 non responsive](http://getbootstrap.com/examples/non-responsive)            | bst-tpl-non-responsive         |
| [BS3 offcanvas](http://getbootstrap.com/examples/offcanvas/)                     | bst-tpl-offcanvas              |
| [BS3 signin](http://getbootstrap.com/examples/signin/)                           | bst-tpl-starter-signin         |
| [BS3 starter template](http://getbootstrap.com/examples/starter-template/)       | bst-tpl-starter-template       |
| [BS3 sticky footer navbar](http://getbootstrap.com/examples/sticky-footer-navbar)| bst-tpl-sticky-foote-navbar    |
| [BS3 sticky footer](http://getbootstrap.com/examples/sticky-footer)              | bst-tpl-sticky-footer          |
| [BS3 theme](http://getbootstrap.com/examples/theme)                              | bst-tpl-theme                  |


### License

Twitter Bootstrap 3 Jade - Sublime Text Plugin is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
