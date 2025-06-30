# More Frontend Modules

*More Frontend Modules* is an extension for the [Contao CMS](https://www.contao.org)
and brings additional frontend modules.

## Requirements

* Contao CMS in Version 4.13 and newer
* PHP 8.1 and newer

## Modules

### Module Image

Select and insert an image from the Filesystem.

This makes it possible, for example, to integrate the logo of the website/company, on the one hand, as a module and on the other hand, to use the comfort functions regarding image cropping, linking of Contao CMS.

### Module Text

Inserts a text element using the Wysiwyg editor of Contao CMS.

Here you can use the functions of the TinyMCE (Wysiwyg-Editor) of Contao CMS to set, for example, a text/link/list etc. comfortably via an editor. Then you can insert the whole thing as a module in the page layout or as a content element (module) in the page and maintain centrally.

### Module Envelope-Begin / Module Envelope-End

Inserts the Beginning/the End of an Envelope-Element, which operates like a wrapper.

This can be used to group elements together (e.g., to use the elements in a row of grid-system).
You can select from different HTML tags like *div*, *span*, *p*, *ul*.

#### Example: Output with DIV tag

````
<div class="mod_mfmenvbegin row">
    <div class="col-md-4">(...)</div>
    <div class="col-md-8">(...)</div>
</div>
````

## More information

* Sourcecode: [https://github.com/xx81/contao-more-frontend-modules](https://github.com/xx81/contao-more-frontend-modules)
* Issues: [https://github.com/xx81/contao-more-frontend-modules/issues](https://github.com/xx81/contao-more-frontend-modules/issues)
