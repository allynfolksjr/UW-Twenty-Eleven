# UW Twenty Eleven - 1.4
## Introduction

While the University of Washington offers a more [fully-branded WordPress theme to the campus community](https://github.com/uweb/UW-Wordpress-Child-Theme), many have expressed a desire for a simpler option that just adds a UW header and footer to the standard TwentyEleven theme.

We've been making this theme available to users of the [UW Blogs Network](http://blogs.uw.edu) as an alternative theme option, and it has proven to be a popular choice.

This sticks with the default look and feel of TwentyEleven quite closely, except for the modifications as noted in the 'Modifications' section.

## Install

Download the latest tagged release and upload to your WordPress install using your favourite method.

You can clone the repository if you want to as well.

## Modifications

* UW CSS code added to header.php, with logic to automatically route requests over HTTPS if the site is secured using SSL
* UW header code added to header.php
* UW footer code added to footer.php
* Single-width format of TwentyEleven increased from 690px to 1000px for header compatability. Personally, I think this looks better anyway and matches what the two-column's approach is with regards to width.
* Favicon changed to UW's standard

## Other Notes

You are free and welcome to modify this theme as you see fit, and you're encouraged to play around with the different header and footer options on the [Header & Footer Wizard](https://depts.washington.edu/uweb/tmplgen/) and plug them into your source of the theme.

The theme version matches the version of TwentyEleven that it is synced with.

## To-Do

* Add automated method of having theme check for upstream updates rather than have users manually check for changes to the repository.
* Merge code with the Header/Footer WordPress theme plugin to allow in-theme modifications to code rather than direct source editing.

## Feedback/Comments

Nikky Southerland  
University of Washington Information Technology  
nikky@uw.edu  

## Credits

* Thanks to the UW Marketing Team for creating and maintaining the header and footer code! I'm much more of a back-end person than web design.