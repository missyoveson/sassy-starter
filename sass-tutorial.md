
+ [Introduction](#intro)
+ [Variables](#variables)
+ [Nesting](#nesting)
+ [Media Queries Made Easy](#media)
+ [Extends](#extend)
+ [Mixins](#mixins)
+ [Compiling](#compiling)

##<a name="intro"></a>Introduction
Thank you for picking up a copy of Developer Elf's Introduction to Sass. This guide will get you started with Sass so that you can make the most of our WordPress themes. We assume that if you are picking up this guide you have a basic knowledge of CSS and that you are ready to take your CSS to the next level.


##<a name="variables"></a>Variables   

To create a variable, you need to pick a name for the variable and put a dollar sign($) before it. It helps when naming variables to pick a name that hints at what is stored in the variable. For instance:
```sass
$font-color: black;
```
This variable is meant to be used to set the font color as the variable name suggests. When creating multiple word variables, best practice suggests that we separate the words with a hyphen(-).

Variables are great to use when you are:

+ repeating information  
+ storing numbers you want to use in [mixins](#mixins)
+ using information that would be provided by a user

##<a name="nesting"></a>Nesting  
One large difference between Sass and CSS is that Sass is able to nest elements. This helps to clean up code as elements are grouped together in a logical fashion. It also helps to prevent you from repeating yourself in your code. For instance:
```sass
a {
	color: $color;
}
a .title {
	color: $title;
}
```  
will simplifiy into:  
```sass
a {
	color: $color;
	.title {
		color: $title;
	}
}
```  
This becomes extremely handy when you need to deal with repeating arguments and a lot of reference tags. You can see how nesting helps keep the code clean and organized in the example below.
```sass
.header {
	width: 80%;
	background-color: $background-color;
	margin: 10 auto;
	.a {
		color: red;
		text-decoration: none;
		.title {
			color: purple;
		}
		.menu {
			text-decoration: underline;
			ul ul li {
				color: red;
				text-transform: uppercase;
			}
		}
	}
}
```
##<a name="media"></a>Media Queries Made Easy
Nesting brings another awesome element with it. That is the ability to nest a media query within the initial set up of an element.
```sass
.header {
	width: 80%;
	media screen and width(max-width: 700) {
		width: 100%
	}
}
```
##<a name="extend"></a>Extends

```sass
@extend .class
```

```sass
@extend %placeholder
```

##<a name="mixins"></a>Mixins

```sass
@mixin font-size($size: $font-size) {
	font-size: $font-size+0px;
	font-size: $font-size/10+0em;
}
```

```sass
@include font-size(15);
```

##<a name="compiling"></a>Compiling